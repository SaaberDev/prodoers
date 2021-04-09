<?php

    namespace App\Models;

    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;

    /**
 * @mixin IdeHelperCoupon
 */
    class Coupon extends Model
    {
        use HasFactory;

        protected $guarded = [];
        protected $dates = ['start_date', 'end_date'];

        /**
         * @param $code
         * @return Coupon|Builder
         */
        public static function findByCodeIfPublished($code)
        {
            return self::where('coupon_code', $code)->where('published_status', '=', 1);
        }

        /**
         * @return MorphToMany
         */
        public function categories()
        {
            return $this->morphedByMany(ServiceCategory::class, 'couponable');
        }

        /**
         * @return MorphToMany
         */
        public function services()
        {
            return $this->morphedByMany(Service::class, 'couponable');
        }

        /**
         * @param $value
         * @return string
         */
        public function setStartDateAttribute($value)
        {
            return $this->attributes['start_date'] = Carbon::createFromFormat('d-m-Y G:i:s A',
                $value)->format('Y-m-d G:i:s');
        }

        /**
         * @param $value
         * @return string
         */
        public function setEndDateAttribute($value)
        {
            return $this->attributes['end_date'] = Carbon::createFromFormat('d-m-Y G:i:s A',
                $value)->format('Y-m-d G:i:s');
        }

        /**
         * @return string
         */
        public function checkCouponValidity()
        {
            if (Carbon::now()->greaterThanOrEqualTo($this->end_date)) {
                return 'This Coupon has expired at ' . Carbon::parse($this->end_date)->toDayDateTimeString();
            } elseif (!Carbon::now()->gte($this->start_date)) {
                return 'This Coupon is not started yet. Will start at ' . Carbon::parse($this->start_date)->toDayDateTimeString();
            }
        }

        /**
         * @param $query
         * @param $category
         * @param $service
         * @return mixed
         * This will query check if given coupon has applied to categories or services
         */
        public function scopeApplyCouponTo($query, $category, $service)
        {
            return $query->whereHas('categories', function ($query) use ($category) {
                $query->where('couponable_id', '=', $category);
            })->orWhereHas('services', function ($query) use ($service) {
                $query->where('couponable_id', '=', $service);
            });
        }

        /**
         * @param Service $service
         * @return int|string|null
         */
        public function discount(Service $service)
        {
            if ($this->coupon_type == 'fixed') {
                return $this->amount;
            } elseif ($this->coupon_type == 'percentage') {
                return number_format(($this->percent_off / 100) * $service->price, 2);
            } else {
                return 0;
            }
        }
    }

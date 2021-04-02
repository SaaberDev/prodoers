<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCoupon
 */
class Coupon extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['start_date', 'end_date'];

    public function categories()
    {
        return $this->morphedByMany(ServiceCategory::class, 'couponable');
    }

    public function services()
    {
        return $this->morphedByMany(Service::class, 'couponable');
    }

    // TODO -- Need to work on expiry date
    public function expired()
    {
        return self::where('start_date', '>=', Carbon::now())
            ->where('end_date', '<=', Carbon::now());
    }

    public static function findByCode($code)
    {
        return self::where('coupon_code', $code);
//            ->where('start_date', '>=', Carbon::now())
//            ->where('end_date', '<=', Carbon::now());
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
        return $query->whereHas('categories', function ($query) use ($category){
            $query->where('couponable_id', '=', $category);
        })->orWhereHas('services', function ($query) use ($service){
            $query->where('couponable_id', '=', $service);
        });
    }

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

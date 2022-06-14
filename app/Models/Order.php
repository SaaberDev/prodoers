<?php

    namespace App\Models;

    use App\Traits\Searchable;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Support\Str;
    use Spatie\MediaLibrary\HasMedia;
    use Spatie\MediaLibrary\InteractsWithMedia;

    /**
 * @mixin IdeHelperOrder
 */
    class Order extends Model implements HasMedia
    {
        use HasFactory, Searchable, InteractsWithMedia;

        protected $guarded = [];

        const PENDING = 'pending';
        const ONGOING = 'ongoing';
        const DELIVERED = 'delivered';
        const IN_REVISION = 'in_revision';
        const CANCELLED = 'cancelled';
        const COMPLETED = 'completed';

        protected $searchable = [
            'order_number'
        ];

        /**
         * @return BelongsTo
         */
        public function users()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

        /**
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function assignOrders()
        {
            return $this->hasMany(AssignOrder::class, 'order_id');
        }

        /**
         * @return BelongsToMany
         */
        public function assignOrderLogs()
        {
            return $this->belongsToMany(
                User::class,
                'assign_order_logs',
                'user_id', 'order_id', 'user_id'
            )
                ->using(AssignOrderLog::class)
                ->withPivot('status')
                ->withTimestamps()
                ;
        }

        /**
         * @return BelongsTo
         */
        public function services()
        {
            return $this->belongsTo(Service::class, 'service_id');
        }

        /**
         * @return HasOne
         */
        public function invoices()
        {
//        return $this->morphedByMany(Invoice::class, 'orderable');
            return $this->hasOne(Invoice::class);
        }

        /**
         * @return HasOne
         */
        public function payments()
        {
//        return $this->morphedByMany(Payment::class, 'orderable');
            return $this->hasOne(Payment::class);
        }

        /**
         * @param $query
         * @param $column
         * @param $arg
         * @return mixed
         */
        public function scopeFilterBy($query, $column, $arg)
        {
            return $query->where(function ($query) use ($arg, $column) {
                $arg == '' ? $query->orderBy('id', 'desc') : $query->orWhere($column, '=', $arg);
            });
        }

        /**
         * @param $sanitize | true or false
         * @return string
         */
        public function getStatus($sanitize): string
        {
            $query = $this->order_status;
            if ($sanitize === true) {
                $string = Str::replace('_', ' ', $query);
                return ucwords($string);
            }

            return $query;
        }
    }

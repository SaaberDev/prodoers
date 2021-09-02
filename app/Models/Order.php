<?php

namespace App\Models;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    protected $searchable = [
        'order_number'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function assignUsers()
    {
        return $this->belongsToMany(User::class, 'order_assigned_to_designwalas')->withPivot('status');
    }

    public function services()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function invoices()
    {
//        return $this->morphedByMany(Invoice::class, 'orderable');
        return $this->hasOne(Invoice::class);
    }

    public function payments()
    {
//        return $this->morphedByMany(Payment::class, 'orderable');
        return $this->hasOne(Payment::class);
    }

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

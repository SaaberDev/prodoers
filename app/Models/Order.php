<?php

namespace App\Models;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperOrder
 */
class Order extends Model
{
    use HasFactory, Searchable;

    protected $guarded = [];

    protected $searchable = [
        'order_number'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
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
}

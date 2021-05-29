<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperOrder
 */
class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services()
    {
        return $this->belongsTo(Service::class);
    }

    public function invoices()
    {
        return $this->morphedByMany(Invoice::class, 'orderable');
    }

    public function payments()
    {
        return $this->morphedByMany(Payment::class, 'orderable');
    }

    public function scopeFilterBy($query, $column, $arg)
    {
        return $query->where(function ($query) use ($arg, $column) {
            $arg == '' ? $query->orderBy('id', 'desc') : $query->orWhere($column, '=', $arg);
        });
    }

    public function scopeSearchBy($query, $column, $search)
    {
        return $query->where(function ($query) use ($search, $column) {
            $query->orWhere($column, 'like', '%' . $search . '%');
        });
    }
}

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

//    public function invoices()
//    {
//        return $this->belongsTo(Invoice::class, 'order_id');
//    }

    public function invoices()
    {
        return $this->morphedByMany(Invoice::class, 'orderable');
    }

    public function payments()
    {
        return $this->morphedByMany(Payment::class, 'orderable');
    }
}

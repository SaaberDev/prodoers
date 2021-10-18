<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPayment
 */
class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    const PAID = 'paid';
    const FAILED = 'failed';

    public function orders()
    {
        return $this->belongsTo(Order::class);
//        return $this->morphToMany(Order::class, 'orderable');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperInvoice
 */
class Invoice extends Model
{
    use HasFactory;

    protected $guarded = [];

//    public function orders()
//    {
//        return $this->belongsTo(Order::class);
//    }

    public function orders()
    {
        return $this->belongsTo(Order::class);
//        return $this->morphToMany(Order::class, 'orderable');
    }
}

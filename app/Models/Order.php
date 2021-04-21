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

    public function services()
    {
        return $this->belongsTo(Service::class);
    }

    public function invoices()
    {
        return $this->belongsTo(Invoice::class);
    }
}

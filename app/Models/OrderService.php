<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperOrderService
 */
class OrderService extends Model
{
    use HasFactory;

    protected $table = ['order_service'];
}

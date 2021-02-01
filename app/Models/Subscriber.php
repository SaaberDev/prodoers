<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperSubscriber
 */
class Subscriber extends Model
{
    use HasFactory;

    protected $guarded = [];
}

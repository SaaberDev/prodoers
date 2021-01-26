<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPolicy
 */
class Policy extends Model
{
    use HasFactory;

    protected $guarded = [];


}

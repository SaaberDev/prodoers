<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperServiceTag
 */
class ServiceTag extends Model
{
    use HasFactory;

    public $timestamps = false;
}

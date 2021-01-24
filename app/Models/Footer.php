<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperFooter
 */
class Footer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeWhereFooterKey($query, $argument)
    {
        return $query->where('key', '=', $argument);
    }
}

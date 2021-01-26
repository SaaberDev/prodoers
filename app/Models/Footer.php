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

    public function scopeWhereFooterKey($query, $key)
    {
        return $query->where('key', '=', $key);
    }
}

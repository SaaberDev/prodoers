<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperSiteCMS
 */
class SiteCMS extends Model
{
    use HasFactory;

    protected $table = 'site_cms';

    protected $guarded = [];

    public function scopeWhereKey($query, $key)
    {
        return $query->where('key', '=', $key);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperSiteCms
 */
class SiteCms extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeWhereSiteKey($query, $key)
    {
        return $query->where('key', '=', $key);
    }

    public function scopeSearchBy($query, $column, $search)
    {
        return $query->where(function ($query) use ($search, $column) {
            $query->orWhere($column, 'like', '%' . $search . '%');
        });
    }
}

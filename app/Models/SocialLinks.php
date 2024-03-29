<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperSocialLinks
 */
class SocialLinks extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearchBy($query, $column, $search)
    {
        return $query->where(function ($query) use ($search, $column) {
            $query->where($column, 'like', $search . '%');
        });
    }
}

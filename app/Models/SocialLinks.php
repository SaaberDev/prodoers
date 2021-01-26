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


    public function scopeOrderByIdDesc($query)
    {
        return $query->orderBy('id', 'desc');
    }

    public function scopeSearchBy($query, $entity, $search)
    {
        return $query->where(function ($query) use ($search, $entity) {
            $query->where($entity, 'like', $search . '%');
        });
    }
}

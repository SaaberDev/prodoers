<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperTag
 */
class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services()
    {
        return $this->morphedByMany(Service::class, 'taggable');
    }

    public function scopeGetTitle($query)
    {
        return $query->orderBy('title')->get(['title', 'id']);
    }


    public function scopeSearchBy($query, $column, $search)
    {
        return $query->where(function ($query) use ($search, $column) {
            $query->orWhere($column, 'like', '%' . $search . '%');
        });
    }
}

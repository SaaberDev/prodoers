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
        return $this->belongsToMany(Service::class, 'service_tag', 'tag_id', 'service_id');
    }

    public function scopeGetTitle($query)
    {
        return $query->orderByIdDesc()->get(['title', 'id']);
    }

    public function scopeOrderByIdDesc($query)
    {
        return $query->orderBy('id', 'desc')/*->with('serviceCategories')*/;
    }


    public function scopeSearchByTitle($query, $search)
    {
        return $query->where(function ($query) use ($search) {
            $query->orWhere('title', 'like', '%' . $search . '%');
        });
    }
}

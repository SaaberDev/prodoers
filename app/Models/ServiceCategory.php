<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder;

/**
 * @mixin IdeHelperServiceCategory
 */
class ServiceCategory extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function services(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }

    public function scopeGetAllCategories($query)
    {
        return $query->all();
    }

    public function scopeGetSlug($query, $slug){
        return $query->where('slug', $slug);
    }

    public function scopeOrderByIdDesc($query)
    {
        return $query->orderBy('id', 'desc');
    }

    public function scopeFilterByStatus($query, $filterByStatus)
    {
        return $query->where(function ($query) use ($filterByStatus) {
            $filterByStatus == '' ? $query->orderBy('id', 'desc') : $query->orWhere('published_status', '=', $filterByStatus);
        });
    }

    public function scopeSearchByTitle($query, $search)
    {
        return $query->where(function ($query) use ($search) {
                $query->orWhere('title', 'like', '%' . $search . '%');
            });
    }

//    public function getImage($query, $id)
//    {
//        return $query->where('category_banner',  $id)->first();
//    }
    // storage/admin_panel/services_categories/banner/

    public function scopeCategoriesTitleById($query)
    {
        return $query->orderByIdDesc()->get(['title', 'id']);
    }
}

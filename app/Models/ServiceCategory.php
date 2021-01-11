<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function serviceCategoryFaqs()
    {
        return $this->hasMany(ServiceCategoryFaq::class, 'service_category_id');
    }

//    public function categoryFaqs()
//    {
//        return $this->hasMany(ServiceCategoryFaq::class, 'service_category_id');
//    }

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

    public function scopeGetTitle($query)
    {
        return $query->orderByIdDesc()->get(['title', 'id']);
    }

    public function scopeGetAllPublished($query)
    {
        return $query->where('published_status', '=', 1);
//            ->whereHas('services');
    }

    public function scopeGetAllPopular($query)
    {
        return $query->where('popular_status', '=', 1)
            ->getAllPublished()
            ->orderBy('title')
            ->whereHas('services')->with('services', function($query){
                $query->getAllPublished();
            });
    }

//    public function scopeGetMinPrice($query)
//    {
//        return $query->whereHas('services')->with('services', function($query){
//            $query->getAllPublished();
//        });
//    }

}

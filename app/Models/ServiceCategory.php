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
        return $this->hasMany(Service::class, 'service_category_id');
    }

    public function serviceCategoryFaqs()
    {
        return $this->hasMany(ServiceCategoryFaq::class, 'service_category_id');
    }

    public function scopeGetSlug($query, $slug){
        return $query->where('slug', $slug);
    }

    public function scopeGetTitle($query)
    {
        return $query->orderBy('title')->get(['title', 'id']);
    }

    public function scopeFilterBy($query, $column, $arg)
    {
        return $query->where(function ($query) use ($arg, $column) {
            $arg == '' ? $query->orderBy('id', 'desc') : $query->orWhere($column, '=', $arg);
        });
    }

    public function scopeSearchBy($query, $column, $search)
    {
        return $query->where(function ($query) use ($search, $column) {
                $query->where($column, 'like', '%' . $search . '%');
            });
    }

    public function scopeGetAllPublished($query)
    {
        return $query->where('published_status', '=', 1);
    }

    public function scopeNavbarActive($query)
    {
        return $query->where('navbar_status', '=', 1);
    }

    public function scopeGetAllPopular($query)
    {
        return $query->where('popular_status', '=', 1);
    }

    public function scopeWithAndWhereHas($query, $relation, $constraint){
        return $query->whereHas($relation, $constraint)
            ->with([$relation => $constraint]);
    }

}

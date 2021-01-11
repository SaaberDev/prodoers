<?php

namespace App\Models;

use App\Traits\Shareable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperService
 */
class Service extends Model
{
    use HasFactory, Sluggable, Shareable;

    protected $guarded = [];

    /**
     * @return string[][]
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $shareOptions = [
        'columns' => [
            'title' => 'title'
        ],
        'url' => null
    ];

    public function getUrlAttribute()
    {
        return route('guest.service.index', $this->slug);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'service_tag', 'service_id', 'tag_id');
    }

    public function serviceCategories()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }

    public function serviceFeatures()
    {
        return $this->hasMany(ServiceFeature::class, 'service_id');
    }

    public function serviceImages()
    {
        return $this->hasMany(ServiceImage::class, 'service_id');
    }

    public function serviceFaqs()
    {
        return $this->hasMany(ServiceFaq::class, 'service_id');
    }

    public function scopeOrderByIdDesc(Builder $query)
    {
        return $query->orderBy('id', 'desc')/*->with('serviceCategories')*/;
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

    public function scopeGetAllPublished($query)
    {
        return $query->where('published_status', '=', 1);
    }

    public function scopeGetAllPopular($query)
    {
        return $query->where('popular_status', '=', 1);
    }

    public function scopeGetSlug($query, $slug){
        return $query->where('slug', $slug);
    }

    public function scopeHideCurrent($query, $arg)
    {
        $query->where('id', '!=', $arg->id);
    }
}

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

    public function coupons()
    {
        return $this->morphToMany(Coupon::class, 'couponable');
    }

//    public function allDiscounts()
//    {
//        return $this->coupons
//            ->merge($this->serviceCategories->coupons)
//            ->unique();
//    }
//
//    public function getTotalDiscountAttribute()
//    {
//        return $this->allDiscounts()
//            ->reject
//            ->expired()
//            ->map
//            ->apply($this)
//            ->sum();
//    }

    public function getUrlAttribute()
    {
        return route('guest.service.index', $this->slug);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function service_tags()
    {
        return $this->belongsToMany(ServiceTag::class, 'service_service_tag', 'service_id', 'service_tag_id');
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

    public function scopeFilterBy($query, $column, $arg)
    {
        return $query->where(function ($query) use ($arg, $column) {
            $arg == '' ? $query->orderBy('id', 'desc') : $query->orWhere($column, '=', $arg);
        });
    }

    public function scopeSearchBy($query, $column, $search)
    {
        return $query->where(function ($query) use ($search, $column) {
            $query->orWhere($column, 'like', '%' . $search . '%');
        });
    }

    public function scopeWordSearchBy($query, $column, $search)
    {
        return $query->where(function ($query) use ($search, $column) {
            $query->orWhere($column, 'like', $search . '%');
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
        return $query->where('id', '!=', $arg->id);
    }

    public function scopeWhereCategories($query, $arg)
    {
        return $query->where('service_category_id', '=', $arg);
    }
}

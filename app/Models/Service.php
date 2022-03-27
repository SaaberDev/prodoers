<?php

namespace App\Models;

use App\Traits\Searchable;
use App\Traits\Shareable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @mixin IdeHelperService
 */
class Service extends Model implements HasMedia
{
    use HasFactory, Sluggable, Shareable, Searchable, InteractsWithMedia;

    protected $guarded = [];

    /**
     * @return string[][]
     */
    public function sluggable(): array
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

    protected $searchable = [
        'title', 'serviceCategories.title', 'serviceCategories.navbar_status'
    ];

    protected $casts = [
        'price' => 'integer'
    ];

    public function setPriceAttribute($value)
    {
        return $this->attributes['price'] = $value * 100;
    }

    public function getPriceAttribute($value)
    {
        return $value / 100;
    }

    public function coupons()
    {
        return $this->morphToMany(Coupon::class, 'couponable');
    }

    public function getUrlAttribute()
    {
        return route('guest.service.index', $this->slug);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
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


    /**
     * Spatie Media Collection
     */
    public function registerMediaCollections(): void
    {
        // Service Image
        $this->addMediaCollection('service')
            ->acceptsMimeTypes(['image/jpeg', 'image/png'])
        ;

        // Service Thumb
        $this->addMediaCollection('service_thumb')
            ->acceptsMimeTypes(['image/jpeg', 'image/png'])
            ->singleFile()
        ;
    }
}

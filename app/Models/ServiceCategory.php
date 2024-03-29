<?php

namespace App\Models;

use App\Traits\Searchable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @mixin IdeHelperServiceCategory
 */
class ServiceCategory extends Model implements HasMedia
{
    use HasFactory, Sluggable, Searchable, InteractsWithMedia;

    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $searchable = [
        'title'
    ];

    public function coupons()
    {
        return $this->morphToMany(Coupon::class, 'couponable');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'service_category_id');
    }

    public function serviceCategoryFaqs()
    {
        return $this->hasMany(ServiceCategoryFaq::class, 'service_category_id');
    }

    public function serviceCategoryInstructions()
    {
        return $this->hasMany(ServiceCategoryInstruction::class);
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
            $arg == '' ? $query->orderByDesc('id') : $query->orWhere($column, '=', $arg);
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

    /**
     * Spatie Media Collection
     */
    public function registerMediaCollections(): void
    {
        // Category Banner
        $this->addMediaCollection('category_banner')
            ->acceptsMimeTypes(['image/jpeg', 'image/png'])
            ->singleFile()
        ;

        // Category Thumb
        $this->addMediaCollection('category_thumb')
            ->acceptsMimeTypes(['image/jpeg', 'image/png'])
            ->singleFile()
        ;
    }

}

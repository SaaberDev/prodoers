<?php

namespace App\Models;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperService
 */
class Service extends Model
{
    use HasFactory, Sluggable;

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

    /**
     * @return BelongsTo
     */
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
        return $this->hasMany(ServiceImage::class);
    }

    public function scopeOrderByIdDesc(Builder $query)
    {
        return $query->orderBy('id', 'desc')->with('serviceCategories');
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
}

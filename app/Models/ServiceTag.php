<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperServiceTag
 */
class ServiceTag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_service_tag', 'service_tag_id', 'service_id');
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

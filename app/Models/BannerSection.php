<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperBannerSection
 */
class BannerSection extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeWhereSiteKey($query, $key)
    {
        return $query->where('key', 'like', '%'. $key . '%');
    }
}

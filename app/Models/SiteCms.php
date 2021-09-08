<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperSiteCms
 */
class SiteCms extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeWhereSiteKey($query, $key)
    {
        return $query->where('key', '=', $key);
    }

    public function scopeSearchBy($query, $column, $search)
    {
        return $query->where(function ($query) use ($search, $column) {
            $query->orWhere($column, 'like', '%' . $search . '%');
        });
    }


    /**
     * @return array
     */
    public static function allInfos(): array
    {
        return [
            'brand_identities' => BrandIdentity::all(),
            'banner_sections' => BannerSection::all(),
            'service_processes' => ServiceProcess::all(),
            'how_designwala_works' => HowDesignwalaWork::all(),
            'statistics_sections' => StatisticsSection::all(),
            'footer_contents' => FooterContent::all(),
            'social_links' => SocialLinks::all(),
            'other_contents' => OtherContent::all(),
        ];
    }

    /**
     * @return array
     */
    public static function homeInfos(): array
    {
        $data = [];

        $brand_identity = BannerSection::whereSiteKey('banner_home_page')->firstOrFail();

        $data['headline'] = $brand_identity->headline;
        $data['tagline'] = $brand_identity->tagline;
        $data['headline'] = $brand_identity->headline;

        dd($data);
        return [
            'brand_identities' => BrandIdentity::all(),
            'banner_sections' => BannerSection::all(),
            'service_processes' => ServiceProcess::all(),
            'how_designwala_works' => HowDesignwalaWork::all(),
            'statistics_sections' => StatisticsSection::all(),
            'footer_contents' => FooterContent::all(),
            'social_links' => SocialLinks::all(),
            'other_contents' => OtherContent::all(),
        ];
    }
}

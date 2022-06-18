<?php

namespace App\Providers;

use App\Http\View\Composers\ViewComposer;
use App\Models\BannerSection;
use App\Models\BrandIdentity;
use App\Models\CompanyPolicy;
use App\Models\HowDesignwalaWork;
use App\Models\ServiceProcess;
use App\Models\StatisticsSection;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // guest
        View::composer('guest.layouts.app', ViewComposer::class);
        View::composer('guest.index', function ($view) {
            $siteCms = [
                'banner_section' => BannerSection::query()->where('key', '=', 'banner_home_page')->first(),
                'service_processes' => ServiceProcess::query()->select('title', 'image')->get(),
                'how_prodoer_works' => HowDesignwalaWork::query()->select('title', 'image', 'desc')->get(),
                'how_prodoer_works_video' => HowDesignwalaWork::query()->where('key', '=', 'dw_video')->select('video', 'video_thumbnail')->first(),
                'statistics' => StatisticsSection::query()->select('title', 'amount', 'icon')->get(),
            ];

            $view->with('siteCms', $siteCms);
        });

        // super admin
        View::composer('admin_panel.layouts.app', function ($view) {
            // brand identity
            $brand_identity = [
                'logo' => \Storage::disk('public')->url(config('image-location.images.site_cms.brand_logo') . BrandIdentity::query()->findOrFail(1)->logo),
                'favicon' => \Storage::disk('public')->url(config('image-location.images.site_cms.brand_icon') . BrandIdentity::query()->findOrFail(1)->favicon),
            ];

            $view->with('brand_identity', $brand_identity);
        });

        View::composer(['guest.pages.policies.*'], function ($view) {
            // company policy
            $company_policy = [
                'privacy' => CompanyPolicy::query()->find(1)->privacy,
                'cookie' => CompanyPolicy::query()->find(1)->cookie,
                'payment' => CompanyPolicy::query()->find(1)->payment,
                'terms_and_conditions' => CompanyPolicy::query()->find(1)->terms_and_conditions,
            ];

            $view->with('company_policy', $company_policy);
        });
    }
}

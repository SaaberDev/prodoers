<?php

namespace App\Providers;

use App\Http\View\Composers\ViewComposer;
use App\Models\BannerSection;
use App\Models\BrandIdentity;
use App\Models\ServiceProcess;
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
    }
}

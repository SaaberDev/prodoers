<?php

namespace App\Providers;

use App\Repositories\Order\GenerateOrder;
use App\Repositories\Order\GenerateOrderContract;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @param UrlGenerator $url
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
//        if (env('APP_ENV') !== 'local') {
//            $url->forceScheme('https');
//        }
    }
}

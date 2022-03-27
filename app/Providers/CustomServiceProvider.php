<?php

namespace App\Providers;

use App\Services\Coupon\CouponService;
use App\Services\Coupon\CouponServiceContract;
use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CouponServiceContract::class, CouponService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

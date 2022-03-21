<?php

namespace App\Providers;

use App\Services\Coupon\CouponService;
use App\Services\Coupon\CouponServiceInterface;
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
        $this->app->bind(CouponServiceInterface::class, CouponService::class);
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

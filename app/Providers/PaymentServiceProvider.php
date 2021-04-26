<?php

namespace App\Providers;

use App\Services\Order\GenerateOrder;
use App\Services\Order\GenerateOrderContract;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(GenerateOrderContract::class, function (){
            return new GenerateOrder();
        });
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

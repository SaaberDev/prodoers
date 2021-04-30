<?php

namespace App\Providers;

use App\Repositories\Billing\Billing;
use App\Repositories\Billing\BillingInterface;
use App\Repositories\Order\GenerateOrder;
use App\Repositories\Billing\PaymentGateway\Paypal\PaypalOrder;
use Illuminate\Support\Facades\App;
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
        App::singleton(BillingInterface::class, function ($client){
            return new Billing($client->make(PaypalOrder::class), $client->make(GenerateOrder::class));
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

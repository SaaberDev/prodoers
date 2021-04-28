<?php

namespace App\Providers;

use App\Repositories\Order\GenerateOrder;
use App\Repositories\Order\GenerateOrderContract;
use App\Repositories\PaymentGateway\Paypal\Order\PaypalOrder;
use App\Repositories\PaymentGateway\Paypal\Order\PaypalOrderInterface;
use App\Repositories\PaymentGateway\Paypal\PaypalClient;
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
        App::singleton(PaypalOrderInterface::class, function ($client){
            return new PaypalOrder($client->make(PaypalClient::class));
        });
        App::singleton(GenerateOrderContract::class, function (){
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

<?php

namespace App\Providers;

use App\Repositories\Billing\BillingInterface;
use App\Repositories\Billing\PaymentGateway\Paypal\PaypalOrder;
use App\Repositories\Billing\PaymentGateway\SslCommerz\SslCommerz;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $type = request()->input('payment_method');
        if ($type === 'paypal'){
            App::singleton(BillingInterface::class, PaypalOrder::class);
        } elseif ($type === 'visa') {
            App::singleton(BillingInterface::class, SslCommerz::class);
        }
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

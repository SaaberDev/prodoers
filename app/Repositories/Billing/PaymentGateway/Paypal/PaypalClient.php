<?php


    namespace App\Repositories\Billing\PaymentGateway\Paypal;


    use PayPalCheckoutSdk\Core\PayPalHttpClient;
    use PayPalCheckoutSdk\Core\ProductionEnvironment;
    use PayPalCheckoutSdk\Core\SandboxEnvironment;

    class PaypalClient
    {
        /**
         * Checks environment and returns Paypal Httpclient
         * @return PayPalHttpClient
         */
        public static function client(): PayPalHttpClient
        {
            return new PayPalHttpClient(self::environment());
        }

        /**
         * Environment setup for paypal which returns Paypal Environment based on environment MODE "sandbox | live"
         * @return ProductionEnvironment|SandboxEnvironment
         */
        public static function environment()
        {
            $mode = config('services.paypal.mode');
            $sandboxClientId = config('services.paypal.sandbox.client_id');
            $sandboxClientSecret = config('services.paypal.sandbox.client_secret');
            $liveClientId = config('services.paypal.live.client_id');
            $liveClientSecret = config('services.paypal.live.client_secret');
            if ($mode == 'sandbox'){
                return new SandboxEnvironment($sandboxClientId, $sandboxClientSecret);
            }
            return new ProductionEnvironment($liveClientId, $liveClientSecret);
        }
    }

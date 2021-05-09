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
            $mode = config('payment_gateway.mode');
            $sandboxClientId = config('payment_gateway.paypal.sandbox.client_id');
            $sandboxClientSecret = config('payment_gateway.paypal.sandbox.client_secret');
            $liveClientId = config('payment_gateway.paypal.live.client_id');
            $liveClientSecret = config('payment_gateway.paypal.live.client_secret');
            if ($mode == 'sandbox'){
                return new SandboxEnvironment($sandboxClientId, $sandboxClientSecret);
            } elseif ($mode == 'live'){
                return new ProductionEnvironment($liveClientId, $liveClientSecret);
            }
        }
    }

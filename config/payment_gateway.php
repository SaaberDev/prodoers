<?php

    return [
        'mode' => env('PAYMENT_GATEWAY_MODE'),
        'prefix' => [
            'order_number' => 'DW2021' . mt_rand(100000000, 500000000),
            'reference_id' => 'designwala_purchase_' . mt_rand(100000000, 500000000),
            'invoice_id' => '2021' . mt_rand(100000000, 500000000),
        ],

        // Paypal Configuration
        'paypal' => [
            'sandbox' => [
                'client_id' => env('PAYPAL_SANDBOX_CLIENT_ID'),
                'client_secret' => env('PAYPAL_SANDBOX_CLIENT_SECRET'),
            ],
            'live' => [
                'client_id' => env('PAYPAL_LIVE_CLIENT_ID'),
                'client_secret' => env('PAYPAL_LIVE_CLIENT_SECRET'),
            ],
        ],

        // Ssl Commerz Configuration [Sandbox]
        'sslcommerz' => [
            'projectPath' => env('PROJECT_PATH'),
            // For Sandbox, use "https://sandbox.sslcommerz.com"
            // For Live, use "https://securepay.sslcommerz.com"
            'apiDomain' => env("API_DOMAIN_URL"),
            'apiLiveDomain' => env("API_LIVE_DOMAIN_URL"),
            'apiCredentials' => [
                'store_id' => env("STORE_ID"),
                'store_password' => env("STORE_PASSWORD"),

                'store_live_id' => env("STORE_LIVE_ID"),
                'store_live_password' => env("STORE_LIVE_PASSWORD"),
            ],
            'apiUrl' => [
                'make_payment' => "/gwprocess/v4/api.php",
                'transaction_status' => "/validator/api/merchantTransIDvalidationAPI.php",
                'order_validate' => "/validator/api/validationserverAPI.php",
                'refund_payment' => "/validator/api/merchantTransIDvalidationAPI.php",
                'refund_status' => "/validator/api/merchantTransIDvalidationAPI.php",
            ],
            'connect_from_localhost' => env("IS_LOCALHOST"),
            'success_url' => '/success',
            'failed_url' => '/fail',
            'cancel_url' => '/cancel',
            'ipn_url' => '/ipn',
        ],

        // Return urls
        'return_url' => [
            'success_url' => env('APP_URL') . '/test/checkout/success',
            'cancel_url' => env('APP_URL') . '/test/checkout/cancel',
            'failed_url' => '/test/checkout/fail',
            'ipn_url' => '/test/checkout/ipn',
        ],
    ];

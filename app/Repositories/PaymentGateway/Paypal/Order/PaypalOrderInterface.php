<?php

    namespace App\Repositories\PaymentGateway\Paypal\Order;

    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Routing\Redirector;
    use PayPalHttp\HttpResponse;

    interface PaypalOrderInterface
    {
        /**
         * @return HttpResponse
         */
        public function create(): HttpResponse;

        /**
         * @param $response
         * @return Application|RedirectResponse|Redirector
         */
        public function approve($response);

        /**
         * @param $paypal_order_id
         * @return HttpResponse
         */
        public function capture($paypal_order_id): HttpResponse;
    }

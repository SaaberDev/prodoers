<?php

    namespace App\Repositories\Billing;

    interface BillingInterface
    {
        public function makePayment($data);

        public function cancelPayment();

        public function successPayment($order_id);
    }

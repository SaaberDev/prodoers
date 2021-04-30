<?php

    namespace App\Repositories\Billing;

    interface BillingInterface
    {
        public function clearSession();

        public function makePayment();

        public function successPayment();
    }

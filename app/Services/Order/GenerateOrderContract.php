<?php

    namespace App\Services\Order;

    interface GenerateOrderContract
    {
        public function storeOrder();

        public function storePayment($response, $order, $paymentStatus);

        public function storeInvoice($response, $order);
    }

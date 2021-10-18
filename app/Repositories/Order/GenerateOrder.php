<?php


    namespace App\Repositories\Order;


    use App\Models\Order;

    abstract class GenerateOrder
    {
        public function storeOrder($data)
        {
            return Order::create($data);
        }

        public function storePayment($data, $order)
        {
            return $order->payments()->create($data);
        }

        public function storeInvoice($data, $order)
        {
            return $order->invoices()->create($data);
        }
    }

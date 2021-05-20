<?php


    namespace App\Repositories\Order;


    use App\Models\Order;

    abstract class GenerateOrder
    {
        public function storeOrder($data)
        {
            return Order::create([
                'requirements' => $data['requirements'],
                'applied_coupon' => $data['applied_coupon'],
                'order_number' => $data['order_number'],
            ]);
        }

        public function storePayment($data, $order, $paymentStatus)
        {
            return $order->payments()->create([
                'paid_amount' => $data['paid_amount'],
                'discount' => $data['discount'],
                'transaction_id' => $data['transaction_id'],
                'payment_status' => $paymentStatus,
                'payment_method' => $data['payment_method']
            ]);
        }

        public function storeInvoice($data, $order)
        {
            return $order->invoices()->create([
                'invoice_id' => $data['invoice_id'],
            ]);
        }
    }

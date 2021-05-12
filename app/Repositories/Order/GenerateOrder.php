<?php


    namespace App\Repositories\Order;


    use App\Models\Order;

    abstract class GenerateOrder
    {
        public function storeOrder()
        {
            $order_number = Order::count() + 1;
            return Order::create([
                'requirements' => session('item.requirements'),
                'applied_coupon' => session('item.applied_coupon'),
                'order_number' => config('services.paypal.prefix.order_number') . $order_number,
            ]);
        }

        public function storePayment($data, $order, $paymentStatus)
        {
            return $order->payments()->create([
                'paid_amount' => $data['paid_amount'],
                'discount' => session('item.discount'),
                'transaction_id' => $data['transaction_id'],
                'payment_status' => $paymentStatus,
                'payment_method' => session('item.payment_method'),
            ]);
        }

        public function storeInvoice($data, $order)
        {
            return $order->invoices()->create([
                'invoice_id' => $data['invoice_id'],
            ]);
        }
    }

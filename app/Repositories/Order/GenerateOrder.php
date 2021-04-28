<?php


    namespace App\Repositories\Order;


    use App\Models\Order;

    class GenerateOrder implements GenerateOrderContract
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

        public function storePayment($response, $order, $paymentStatus)
        {
            return $order->payments()->create([
                    'paid_amount' => $response->result->purchase_units[0]->payments->captures[0]->amount->value,
                    'discount' => session('item.discount'),
                    'transaction_id' => $response->result->purchase_units[0]->payments->captures[0]->id,
                    'payment_status' => $paymentStatus,
                    'payment_method' => session('item.payment_method'),
                ]);
        }

        public function storeInvoice($response, $order)
        {
            return $order->invoices()->create([
                'invoice_id' => $response->result->purchase_units[0]->invoice_id,
            ]);
        }
    }

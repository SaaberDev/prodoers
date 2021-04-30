<?php


    namespace App\Repositories\Billing;

    use App\Repositories\Order\GenerateOrder;
    use App\Repositories\Billing\PaymentGateway\Paypal\PaypalOrder;

    class Billing implements BillingInterface
    {
        private PaypalOrder $paypalOrder;
        private GenerateOrder $generateOrder;

        public function __construct(PaypalOrder $paypalOrder, GenerateOrder $generateOrder)
        {
            $this->paypalOrder = $paypalOrder;
            $this->generateOrder = $generateOrder;
        }

        public function clearSession()
        {
            session()->forget(['item', 'other']);
            session()->regenerate();
        }

        public function makePayment()
        {
            if (session('item.payment_method') == 'paypal') {
                $response = $this->paypalOrder->create();
                session()->put('other', [
                    'paypal_order_id' => $response->result->id
                ]);
                return $this->paypalOrder->approve($response);
            }
        }

        public function successPayment()
        {
            if (session('item.payment_method') == 'paypal') {
                $paypal_order_id = session('other.paypal_order_id');
                $response = $this->paypalOrder->capture($paypal_order_id);
                $data = [
                    'paid_amount' => $response->result->purchase_units[0]->payments->captures[0]->amount->value,
                    'transaction_id' => $response->result->purchase_units[0]->payments->captures[0]->id,
                    'invoice_id' => $response->result->purchase_units[0]->invoice_id,
                ];

                $order = $this->generateOrder->storeOrder();

                if ($response->result->status == 'COMPLETED') {
                    $payments = $this->generateOrder->storePayment($data, $order, 'paid');

                    if ($payments->payment_status === 'paid') {
                        $this->generateOrder->storeInvoice($data, $order);
                    }
                } else {
                    $this->generateOrder->storePayment($data, $order, 'failed');
                }
            }
        }
    }

<?php


    namespace App\Repositories\Billing;


    use App\Repositories\Order\GenerateOrderContract;
    use App\Repositories\PaymentGateway\Paypal\Order\PaypalOrderInterface;

    class PaymentGateway
    {
        private PaypalOrderInterface $paypalOrder;
        private GenerateOrderContract $generateOrder;

        public function __construct(PaypalOrderInterface $paypalOrder, GenerateOrderContract $generateOrder)
        {
            $this->paypalOrder = $paypalOrder;
            $this->generateOrder = $generateOrder;
        }

        public function cancelPayment()
        {
            session()->forget(['item', 'other']);
            session()->regenerate();
        }

        public function makePaypalPayment()
        {
            $response = $this->paypalOrder->create();
            session()->put('other', [
                'paypal_order_id' => $response->result->id
            ]);
            return $this->paypalOrder->approve($response);
        }

        public function successPaypalPayment()
        {
            if (request('payment_method') == 'paypal') {
                $paypal_order_id = session('other.paypal_order_id');
                $response = $this->paypalOrder->capture($paypal_order_id);
                $order = $this->generateOrder->storeOrder();

                if ($response->result->status == 'COMPLETED') {
                    $payments = $this->generateOrder->storePayment($response, $order, 'paid');

                    if ($payments->payment_status === 'paid') {
                        $this->generateOrder->storeInvoice($response, $order);
                    }
                }
                $this->generateOrder->storePayment($response, $order, 'failed');
            }
        }
    }

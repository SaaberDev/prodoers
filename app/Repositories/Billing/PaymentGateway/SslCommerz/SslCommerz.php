<?php


    namespace App\Repositories\Billing\PaymentGateway\SslCommerz;


    use App\Packages\SslCommerz\SslCommerzNotification;
    use App\Repositories\Billing\BillingInterface;

    class SslCommerz implements BillingInterface
    {
        public function makePayment($data)
        {
            $sslc = new SslCommerzNotification();
//            dd($sslc);
            # initiate(Transaction Data, false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payment gateway here )
            $payment_options = $sslc->initiatePayment($data, 'hosted');
//            dd($payment_options);

            if (!is_array($payment_options)) {
                print_r($payment_options);
                $payment_options = array();
            }
        }

        /**
         * When user cancel the payment this will simply forget order session data and regenerate new session token
         */
        public function cancelPayment()
        {
            session()->forget(['item', 'other']);
            session()->regenerate();
        }

        public function successPayment($order_id = null)
        {
            $tran_id = \request()->input('tran_id');
            $amount = \request()->input('amount');
            $currency = \request()->input('currency');

            $sslc = new SslCommerzNotification();
            return $sslc->orderValidate(\request()->all(), $tran_id, $amount, $currency);
        }
    }

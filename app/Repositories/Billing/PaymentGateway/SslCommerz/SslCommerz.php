<?php


    namespace App\Repositories\Billing\PaymentGateway\SslCommerz;


    use App\Packages\SslCommerz\SslCommerzNotification;
    use App\Repositories\Billing\BillingInterface;

    class SslCommerz implements BillingInterface
    {
        public function makePayment()
        {
            $sessionData = session('sslcommerz');
            $post_data = array();
            $post_data['total_amount'] = $sessionData['total_amount']; # You cant not pay less than 10
            $post_data['currency'] = $sessionData['currency'];
            $post_data['tran_id'] = $sessionData['tran_id']; // tran_id must be unique

//            dd($sessionData);

            # CUSTOMER INFORMATION
            $post_data['cus_name'] = 'Customer Name';
            $post_data['cus_email'] = 'customer@mail.com';
            $post_data['cus_add1'] = 'Customer Address';
            $post_data['cus_add2'] = "";
            $post_data['cus_city'] = "";
            $post_data['cus_state'] = "";
            $post_data['cus_postcode'] = "";
            $post_data['cus_country'] = "Bangladesh";
            $post_data['cus_phone'] = '8801XXXXXXXXX';
            $post_data['cus_fax'] = "";

            # SHIPMENT INFORMATION
            $post_data['ship_name'] = "Store Test";
            $post_data['ship_add1'] = "Dhaka";
            $post_data['ship_add2'] = "Dhaka";
            $post_data['ship_city'] = "Dhaka";
            $post_data['ship_state'] = "Dhaka";
            $post_data['ship_postcode'] = "1000";
            $post_data['ship_phone'] = "";
            $post_data['ship_country'] = "Bangladesh";

            $post_data['shipping_method'] = "NO";
            $post_data['product_name'] = "Computer";
            $post_data['product_category'] = "Goods";
            $post_data['product_profile'] = "physical-goods";

            # OPTIONAL PARAMETERS
            $post_data['value_a'] = "ref001";
            $post_data['value_b'] = "ref002";
            $post_data['value_c'] = "ref003";
            $post_data['value_d'] = "ref004";

            $sslc = new SslCommerzNotification();
//            dd($sslc);
            # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payment gateway here )
            $payment_options = $sslc->makePayment($post_data, 'hosted');
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

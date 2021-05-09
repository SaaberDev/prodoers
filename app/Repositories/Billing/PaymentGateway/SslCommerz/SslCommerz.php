<?php


    namespace App\Repositories\Billing\PaymentGateway\SslCommerz;


    use App\Packages\SslCommerz\SslCommerzNotification;
    use App\Repositories\Billing\BillingInterface;
    use Illuminate\Http\Request;

    class SslCommerz implements BillingInterface
    {
        public function makePayment()
        {
//            $sessionData = session('sslcommerz');
            # Here you have to receive all the order data to initate the payment.
            # Let's say, your oder transaction informations are saving in a table called "orders"
            # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

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

            #Before  going to initiate the payment order status need to insert or update as Pending.
//            $update_product = DB::table('orders')
//                ->where('transaction_id', $post_data['tran_id'])
//                ->updateOrInsert([
//                    'name' => $post_data['cus_name'],
//                    'email' => $post_data['cus_email'],
//                    'phone' => $post_data['cus_phone'],
//                    'amount' => $post_data['total_amount'],
//                    'status' => 'Pending',
//                    'address' => $post_data['cus_add1'],
//                    'transaction_id' => $post_data['tran_id'],
//                    'currency' => $post_data['currency']
//                ]);

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
            #Check order status in order tabel against the transaction id or order id.
//            $order_detials = DB::table('orders')
//                ->where('transaction_id', $tran_id)
//                ->select('transaction_id', 'status', 'currency', 'amount')->first();

//            if ($sslc->status == 'SUCCESS') {
//                $validation = $sslc->orderValidate($sessionData, $sessionData['tran_id'], $sessionData['total_amount'], $sessionData['currency']);
//            dd(\request()->all());
//            $validation = $sslc->orderValidate(\request()->all(), $tran_id, $amount, $currency);
            return $sslc->orderValidate(\request()->all(), $tran_id, $amount, $currency);
//                dd($validation);

//                if ($validation == TRUE) {
//                    /*
//                    That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
//                    in order table as Processing or Complete.
//                    Here you can also sent sms or email for successful transaction to customer
//                    */
//                    // TODO - Place order here
////                    $update_product = DB::table('orders')
////                        ->where('transaction_id', $tran_id)
////                        ->update(['status' => 'Processing']);
//
//                    echo "<br >Transaction is successfully Completed";
//                } else {
//                    /*
//                    That means IPN did not work or IPN URL was not set in your merchant panel and Transation validation failed.
//                    Here you need to update order status as Failed in order table.
//                    */
////                    $update_product = DB::table('orders')
////                        ->where('transaction_id', $tran_id)
////                        ->update(['status' => 'Failed']);
//                    echo "validation Fail";
//                }
//            } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
                /*
                 That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to udate database.
                 */
//                echo "Transaction is successfully Completed";
//            } else {
                #That means something wrong happened. You can redirect customer to your product page.
//                echo "Invalid Transaction";
//            }
        }
    }

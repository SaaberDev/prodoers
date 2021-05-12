<?php


    namespace App\Repositories\Order;


    use DB;
    use Exception;

    class ProcessOrder extends GenerateOrder
    {
//        private GenerateOrder $generateOrder;

//        public function __construct(GenerateOrder $generateOrder)
//        {
//            $this = $generateOrder;
//        }

        public function send()
        {
            // Send payment param to make payment
        }

        public function get($response)
        {
            if (request()->input('payment_method') === 'paypal') {
                $data = [
                    'paid_amount' => $response->result->purchase_units[0]->payments->captures[0]->amount->value,
                    'transaction_id' => $response->result->purchase_units[0]->payments->captures[0]->id,
                    'invoice_id' => $response->result->purchase_units[0]->invoice_id,
                ];

                DB::beginTransaction();
                try {
                    $order = $this->storeOrder();
                    if ($response->result->status == 'COMPLETED') {
                        $this->storePayment($data, $order, 'paid');
                        // Generate Invoice
                        $this->storeInvoice($data, $order);
                        // Send Invoice to user
                        // TODO - Send Invoice
                    } else {
                        $this->storePayment($data, $order, 'failed');
                    }
                    DB::commit();
//                $this->clearSession();
                } catch (Exception $exception) {
                    report($exception);
//                $this->clearSession();
                    DB::rollBack();
//                return redirect()->route('test.index')->with('failed', 'Something went wrong. Contact Designwala.');
                }
            } elseif (request()->input('payment_method') === 'visa') {
                if ($response == true) {
                    /*
                    That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    // TODO - Place order here
//                    $update_product = DB::table('orders')
//                        ->where('transaction_id', $tran_id)
//                        ->update(['status' => 'Processing']);

                    echo "<br >Transaction is successfully Completed";
                } else {
                    /*
                    That means IPN did not work or IPN URL was not set in your merchant panel and Transation validation failed.
                    Here you need to update order status as Failed in order table.
                    */
//                    $update_product = DB::table('orders')
//                        ->where('transaction_id', $tran_id)
//                        ->update(['status' => 'Failed']);
                    echo "validation Fail";
                }
            }
        }

        /**
         * This function will simply clear order session data and regenerate new session token
         */
        public function clearSession()
        {
            session()->forget(['item', 'other']);
            session()->regenerate();
        }
    }

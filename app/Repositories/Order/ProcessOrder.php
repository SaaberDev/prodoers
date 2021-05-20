<?php


    namespace App\Repositories\Order;


    use App\Models\Order;
    use DB;
    use Exception;

    class ProcessOrder extends GenerateOrder
    {
        public function setData($request)
        {
            if (session()->has(['item', 'other'])){
                session()->forget(['item', 'other']);
            }

            $order_number = Order::count() + 1;
            // Send payment param to make payment
            $order = [
                'product_name' => 'Logo Design',
                'product_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti deserunt neque unde?',
                'product_category' => 'Digital Service',
                'product_profile' => 'non-physical-goods',

                'requirements' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti deserunt neque unde? Aperiam asperiores id ipsa laudantium minima nemo repellendus, similique soluta voluptates!',
                'pay_amount' => 50,
                'applied_coupon' => '1234',
                'discount' => 10,
                'payment_method' => $request->input('payment_method'),

                'currency' => 'BDT',
                'tran_id' => uniqid(),
                'reference_id' => config('payment_gateway.prefix.reference_id') . $order_number,
                'invoice_id' => config('payment_gateway.prefix.invoice_id') . $order_number,
                'order_number' => config('payment_gateway.prefix.order_number') . $order_number,

                'cus_name' => 'Customer Name',
                'cus_email' => 'customer@mail.com',
                'cus_add1' => ' ',
                'cus_add2' => '',
                'cus_city' => '',
                'cus_postcode' => '',
                'cus_country' => 'Bangladesh',
                'cus_phone' => ' ',
                'cus_fax' => '',

                'shipping_method' => 'NO',
                'ship_name' => '',
                'ship_add1' => '',
                'ship_add2' => '',
                'ship_city' => '',
                'ship_state' => '',
                'ship_postcode' => '',
                'ship_phone' => '',
                'ship_country' => '',
            ];
            session()->put('item', $order);
        }

        public function getData($response)
        {
            $sessionData = session('item');
            if (request()->input('payment_method') === 'paypal') {
                $data = [
                    'requirements' => $sessionData['requirements'],
                    'applied_coupon' => $sessionData['applied_coupon'],
                    'order_number' => $sessionData['order_number'],
                    'payment_method' => $sessionData['payment_method'],
                    'discount' => $sessionData['discount'],
                    // TODO - List out session data
                    'paid_amount' => $response->result->purchase_units[0]->payments->captures[0]->amount->value,
                    'transaction_id' => $response->result->purchase_units[0]->payments->captures[0]->id,
                    'invoice_id' => $response->result->purchase_units[0]->invoice_id,
                ];
                DB::beginTransaction();
                try {
                    $order = $this->storeOrder($data);
                    if ($response->result->status == 'COMPLETED') {
                        $this->storePayment($data, $order, 'paid');
                        // Generate Invoice
                        $this->storeInvoice($data, $order);
                        // Send Invoice to user
                        // TODO - Send Invoice through mail
                    } else {
                        $this->storePayment($data, $order, 'failed');
                    }
                    DB::commit();
                } catch (Exception $exception) {
                    report($exception);
                    DB::rollBack();
                }
            } elseif (request()->input('payment_method') === 'visa') {
                $info = request()->all();
                $data = [
                    'requirements' => $sessionData['requirements'],
                    'applied_coupon' => $sessionData['applied_coupon'],
                    'order_number' => $sessionData['order_number'],
                    'payment_method' => $sessionData['payment_method'],
                    'discount' => $sessionData['discount'],
                    // TODO - List out session data
                    'paid_amount' => $info['amount'],
                    'transaction_id' => $info['tran_id'],
                    'invoice_id' => $info['value_a'],
                ];
                DB::beginTransaction();
                try {
                    $order = $this->storeOrder($data);
                    if ($response == true) {
                        $this->storePayment($data, $order, 'paid');
                        // Generate Invoice
                        $this->storeInvoice($data, $order);
                        // Send Invoice to user
                        // TODO - Send Invoice through mail
                    } else {
                        $this->storePayment($data, $order, 'failed');
                    }
                    DB::commit();
                } catch (Exception $exception) {
                    report($exception);
                    DB::rollBack();
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

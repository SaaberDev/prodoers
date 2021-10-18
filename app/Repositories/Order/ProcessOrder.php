<?php


    namespace App\Repositories\Order;


    use App\Models\Order;
    use App\Models\Payment;
    use DB;
    use Exception;
    use Throwable;

    class ProcessOrder extends GenerateOrder
    {
        /**
         * @param $request
         * @param $data
         */
        public function setData($request, $data)
        {
            if (session()->has(['item', 'other'])){
                session()->forget(['item', 'other']);
            }

            $order_number = Order::count() + 1;
            // Send payment param to make payment
            $order = [
                'product_name' => $data['title'],
                'product_desc' => $data['short_desc'],
                'product_category' => 'Digital Service',
                'product_profile' => 'non-physical-goods',

                'user_id' => $data['user_id'],
                'service_id' => $data['service_id'],
                'requirements' => $request['requirements'],
                'pay_amount' => $data['pay_amount'],
                'applied_coupon' => $data['applied_coupon'],
                'discount' => $data['discount'],
                'payment_method' => $request['paymentMethod'],
                'currency' => $data['currency'],

                'tran_id' => uniqid(),
                'reference_id' => config('payment_gateway.prefix.reference_id') . $order_number,
                'invoice_id' => config('payment_gateway.prefix.invoice_id') . $order_number,
                'order_number' => config('payment_gateway.prefix.order_number') . $order_number,

                'cus_name' => $data['cus_name'] ?? '',
                'cus_email' => $data['cus_email'] ?? '',
                'cus_add1' => $data['cus_add1'] ?? ' ',
                'cus_add2' => '',
                'cus_city' => '',
                'cus_postcode' => $data['cus_postcode'] ?? '',
                'cus_country' => $data['cus_country'] ?? '',
                'cus_phone' => $data['cus_phone'] ?? ' ',
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

        /**
         * @param $response
         * @throws Throwable
         */
        public function getData($response)
        {
            $sessionData = \Session::get('item');
            if (request()->input('payment_method') === 'paypal') {
                $data = $this->orderData($sessionData);
                $data['paid_amount'] = $response->result->purchase_units[0]->payments->captures[0]->amount->value;
                $data['transaction_id'] = $response->result->purchase_units[0]->payments->captures[0]->id;
                $data['invoice_id'] = $response->result->purchase_units[0]->invoice_id;
                $data['payment_status'] = Payment::PAID;

                DB::beginTransaction();
                try {
                    $order = $this->storeOrder($data);
                    if ($response->result->status == 'COMPLETED') {
                        $this->storePayment($data, $order);
                        // Generate Invoice
                        $this->storeInvoice($data, $order);
                        // Send Invoice to user
                        // TODO - Send Invoice through mail
                    } else {
                        $data['payment_status'] = Payment::FAILED;
                        $this->storePayment($data, $order);
                    }
                    DB::commit();
                } catch (Exception $exception) {
                    report($exception);
                    DB::rollBack();
                }
            } elseif (request()->input('payment_method') === 'visa') {
                $info = request()->all();
                $data = $this->orderData($sessionData);
                $data['paid_amount'] = $info['amount'];
                $data['transaction_id'] = $info['tran_id'];
                $data['invoice_id'] = $info['value_a'];
                $data['payment_status'] = Payment::PAID;

                DB::beginTransaction();
                try {
                    $order = $this->storeOrder($data);
                    if ($response == true) {
                        $this->storePayment($data, $order);
                        // Generate Invoice
                        $this->storeInvoice($data, $order);
                        // Send Invoice to user
                        // TODO - Send Invoice through mail
                    } else {
                        $data['payment_status'] = Payment::FAILED;
                        $this->storePayment($data, $order);
                    }
                    DB::commit();
                } catch (Exception $exception) {
                    report($exception);
                    DB::rollBack();
                }
            }
        }

        private function orderData($sessionData)
        {
            return [
                'user_id' => $sessionData['user_id'],
                'service_id' => $sessionData['service_id'],
                'requirements' => $sessionData['requirements'],
                'applied_coupon' => $sessionData['applied_coupon'],
                'order_number' => $sessionData['order_number'],
                'payment_method' => $sessionData['payment_method'],
                'discount' => $sessionData['discount'],
            ];
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

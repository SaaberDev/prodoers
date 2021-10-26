<?php


    namespace App\Repositories\Order;

    use App\Models\Payment;
    use DB;
    use Exception;
    use Throwable;

    class ProcessOrder extends GenerateOrder
    {
        /**
         * @param $data
         */
        public function setData($data)
        {
            if (session()->has(['item', 'other'])){
                session()->forget(['item', 'other']);
            }

            // Send payment param to make payment
            $order = [
                'product_name' => $data['title'],
                'product_desc' => $data['short_desc'],
                'product_category' => 'Digital Service',
                'product_profile' => 'non-physical-goods',

                'user_id' => $data['user_id'],
                'service_id' => $data['service_id'],
                'requirements' => $data['requirements'],
                'pay_amount' => $data['pay_amount'],
                'applied_coupon' => $data['applied_coupon'],
                'discount' => $data['discount'],
                'payment_method' => $data['payment_method'],
//                'currency' => $data['currency'],

                'tran_id' => uniqid(),
                'reference_id' => uniqid(),
                'invoice_number' => uniqid(),
                'order_number' => uniqid(),

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

                'value_a' => ''
            ];
            session()->put('item', $order);
        }

        /**
         * @param $response
         * @throws Throwable
         */
        public function store($response)
        {
            $data = \Session::get('item');
            if (request()->input('payment_method') === 'paypal') {
                DB::beginTransaction();
                try {
                    $order = $this->storeOrder($data);
                    if ($response->result->status == 'COMPLETED') {
                        $this->storePayment($data, $order, $response);
                        // Generate Invoice
                        $this->storeInvoice($data, $order, $response);
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
                DB::beginTransaction();
                try {
                    $order = $this->storeOrder($data);
                    if ($response == true) {
                        $this->storePayment($data, $order, $response);
                        // Generate Invoice
                        $this->storeInvoice($data, $order, $response);
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

        /**
         * This function will simply clear order session data and regenerate new session token
         */
        public function clearSession()
        {
            session()->forget(['item', 'other']);
            session()->regenerate();
        }
    }

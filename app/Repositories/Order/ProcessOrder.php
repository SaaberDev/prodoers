<?php


    namespace App\Repositories\Order;


    use App\Models\Invoice;
    use App\Models\Order;
    use App\Models\Payment;
    use App\Services\Generator\CodeGenerator;
    use DB;
    use Exception;
    use Throwable;

    class ProcessOrder extends GenerateOrder
    {
        private $codeGenerator;

        public function __construct()
        {
            $this->codeGenerator = new CodeGenerator();
        }

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
                'reference_id' => $this->codeGenerator->reference(Order::class, 'REF-', 'reference_id'),
                'invoice_number' => $this->codeGenerator->reference(Invoice::class, 'INV-', 'invoice_number'),
                'order_number' => $this->codeGenerator->reference(Order::class, 'PUR-', 'order_number'),

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

                'value_a' => $this->codeGenerator->reference(Invoice::class, 'INV-', 'invoice_number')
            ];
            session()->put('item', $order);
        }

        /**
         * @param $response
         * @throws Throwable
         */
        public function store($response)
        {
            $sessionData = \Session::get('item');
            if (request()->input('payment_method') === 'paypal') {
                $data = $this->orderData($sessionData);
                $data['paid_amount'] = $response->result->purchase_units[0]->payments->captures[0]->amount->value;
                $data['transaction_id'] = $response->result->purchase_units[0]->payments->captures[0]->id;
                $data['invoice_number'] = $response->result->purchase_units[0]->invoice_id;
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
                $data = $this->orderData($sessionData);
                $data['paid_amount'] = $response['amount'];
                $data['transaction_id'] = $response['tran_id'];
                $data['invoice_number'] = $response['value_a'];
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
                'order_status' => Order::PENDING,
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

<?php


    namespace App\Repositories\Order;

    use App\Models\Invoice;
    use App\Models\Order;
    use App\Models\Payment;
    use App\Services\Generator\CodeGenerator;
    use Illuminate\Database\Eloquent\Model;

    abstract class GenerateOrder
    {
        private $codeGenerator;

        public function __construct()
        {
            $this->codeGenerator = new CodeGenerator();
        }

        /**
         * @param $data
         * @param null $response
         * @return Order|Model
         */
        public function storeOrder($data, $response = null)
        {
            $orderData['user_id'] = $data['user_id'];
            $orderData['service_id'] = $data['service_id'];
            $orderData['requirements'] = $data['requirements'];
            $orderData['applied_coupon'] = $data['applied_coupon'];
            $orderData['order_number'] = $this->codeGenerator->reference(Order::class, 'PUR-', 'order_number');
            $orderData['reference_id'] = $this->codeGenerator->reference(Order::class, 'REF-', 'reference_id');
            $orderData['discount'] = $data['discount'];
            $orderData['order_status'] = Order::PENDING;
            return Order::create($orderData);
        }

        /**
         * @param $data
         * @param $order
         * @param null $response
         * @return void
         */
        public function storePayment($data, $order, $response = null)
        {
            if (request()->input('payment_method') === 'paypal') {
                $data['paid_amount'] = $response->result->purchase_units[0]->payments->captures[0]->amount->value;
                $data['transaction_id'] = $response->result->purchase_units[0]->payments->captures[0]->id;
                if ($response == true) {
                    $data['payment_status'] = Payment::PAID;
                } else {
                    $data['payment_status'] = Payment::FAILED;
                }
                return $order->payments()->create($data);
            } elseif (request()->input('payment_method') === 'visa') {
                $data['paid_amount'] = $response['amount'];
                $data['transaction_id'] = $response['tran_id'];
                if ($response == true) {
                    $data['payment_status'] = Payment::PAID;
                } else {
                    $data['payment_status'] = Payment::FAILED;
                }
                return $order->payments()->create($data);
            }
        }

        /**
         * @param $data
         * @param $order
         * @param null $response
         * @return void
         */
        public function storeInvoice($data, $order, $response = null)
        {
            if (request()->input('payment_method') === 'paypal') {
                $data['invoice_number'] = $this->codeGenerator->reference(Invoice::class, 'INV-', 'invoice_number');
                return $order->invoices()->create($data);
            } elseif (request()->input('payment_method') === 'visa') {
                $data['invoice_number'] = $this->codeGenerator->reference(Invoice::class, 'INV-', 'invoice_number');
                return $order->invoices()->create($data);
            }
        }
    }

<?php


    namespace App\Repositories\Order;

    use App\Models\Invoice;
    use App\Models\Order;
    use App\Models\Payment;
    use App\Services\Generator\CodeGenerator;
    use Illuminate\Database\Eloquent\Model;

    abstract class GenerateOrder
    {
        protected $codeGenerator;

        public function __construct()
        {
            $this->codeGenerator = new CodeGenerator();
        }

        /**
         * @param $data
         * @return Order|Model
         */
        public function storeOrder($data)
        {
            $orderData['user_id'] = $data['user_id'];
            $orderData['service_id'] = $data['service_id'];
            $orderData['requirements'] = $data['requirements'];
            $orderData['applied_coupon'] = $data['applied_coupon'];
            $orderData['order_number'] = $data['order_number'];
            $orderData['reference_id'] = $data['reference_id'];
            $orderData['discount'] = $data['discount'];
            $orderData['order_status'] = Order::PENDING;
            return Order::create($orderData);
        }

        /**
         * @param $data
         * @param $order
         * @return void
         */
        public function storePayment($data, $order)
        {
            if (request()->input('payment_method') === 'paypal') {
                $paymentData['paid_amount'] = $data['paid_amount'];
                $paymentData['transaction_id'] = $data['transaction_id'];
                $paymentData['payment_method'] = $data['payment_method'];
                $paymentData['payment_status'] = $data['payment_status'];

                return $order->payments()->create($paymentData);
            } elseif (request()->input('payment_method') === 'visa') {
                $paymentData['paid_amount'] = $data['paid_amount'];
                $paymentData['transaction_id'] = $data['transaction_id'];
                $paymentData['payment_method'] = $data['payment_method'];
                $paymentData['payment_status'] = $data['payment_status'];

                return $order->payments()->create($paymentData);
            }
        }

        /**
         * @param $data
         * @param $order
         * @return void
         */
        public function storeInvoice($data, $order)
        {
            if (request()->input('payment_method') === 'paypal') {
                $invoiceData['invoice_number'] = $data['invoice_number'];
                return $order->invoices()->create($invoiceData);
            } elseif (request()->input('payment_method') === 'visa') {
                $invoiceData['invoice_number'] = $data['invoice_number'];
                return $order->invoices()->create($invoiceData);
            }
        }
    }

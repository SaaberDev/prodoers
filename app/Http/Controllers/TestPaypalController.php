<?php

    namespace App\Http\Controllers;

    use App\Repositories\Billing\BillingInterface;
    use App\Repositories\Order\ProcessOrder;
    use Exception;
    use Illuminate\Http\RedirectResponse;
    use Throwable;

    class TestPaypalController extends Controller
    {
        /**
         * @var BillingInterface
         */
        public BillingInterface $billing;
        /**
         * @var ProcessOrder
         */
        public ProcessOrder $processOrder;

        public function __construct(BillingInterface $billing, ProcessOrder $processOrder)
        {
            $this->billing = $billing;
            $this->processOrder = $processOrder;
        }

        /**
         * @return RedirectResponse
         */
        public function checkout()
        {
            try {
                $data = session('item');
                return $this->billing->makePayment($data);
            } catch (Exception $exception) {
                report($exception);
                $this->clearSession();
                return redirect()->back()->with('failed', 'Something went wrong. Contact ProDoers.');
            }
        }

        /**
         * This function will simply clear order session data and regenerate new session token
         */
        public static function clearSession()
        {
            session()->forget(['item', 'other']);
            session()->regenerate();
        }

        /**
         * @return RedirectResponse
         * @throws Throwable
         */
        public function successCheckout()
        {
            try {
                $paypal_order_id = session('other.paypal_order_id');
                $response = $this->billing->successPayment($paypal_order_id);

                $response
                    ? $this->processOrder->getData($response) && $this->clearSession()
                    : $this->clearSession()
                ;
                return redirect()->route('test.index')->with('success', 'Nice it worked!');
            } catch (Exception $exception) {
                report($exception);
                $this->clearSession();
                return redirect()->route('test.index')->with('failed', 'Something went wrong. Contact ProDoers.');
            }
        }

        /**
         * @return RedirectResponse
         */
        public function cancelCheckout()
        {
            $this->billing->cancelPayment();
            return redirect()->route('test.index')->with(['failed' => 'Payment has been cancelled.']);
        }
    }

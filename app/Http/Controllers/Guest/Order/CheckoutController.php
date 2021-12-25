<?php

    namespace App\Http\Controllers\Guest\Order;

    use App\Http\Controllers\Controller;
    use App\Repositories\Billing\BillingInterface;
    use App\Repositories\Billing\PaymentGateway\Paypal\PaypalOrder;
    use App\Repositories\Billing\PaymentGateway\SslCommerz\SslCommerz;
    use App\Repositories\Order\ProcessOrder;
    use Exception;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\RedirectResponse;
    use Throwable;

    class CheckoutController extends Controller
    {
        /**
         * @var BillingInterface
         */
        public $billing;
        /**
         * @var ProcessOrder
         */
        public $processOrder;

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

                if ($response) {
                    $order = $this->processOrder->store($response);
                    $this->clearSession();
                    \Session::put('confirmation', [
                        'status' => 'success',
                        'title' => 'Order Successful',
                        'message' => 'Your order has been successfully placed.',
                        'data' => $order
                    ]);

                    return redirect()->route('guest.order.confirmation');
                }
            } catch (Exception $exception) {
                report($exception);
                $this->clearSession();
                return redirect()
                    ->route('guest.order.confirmation')
                    ->with([
                        'status' => 'failed',
                        'title' => 'Order Failed',
                        'message' => 'Something went wrong. Contact ProDoers.'
                    ]);
            }
        }

        /**
         * @return RedirectResponse
         */
        public function cancelCheckout()
        {
            $this->billing->cancelPayment();
            return redirect()
                ->intended(\URL::previous())
                ->with([
                    'status' => 'cancelled',
                    'title' => 'Order Cancelled',
                    'message' => 'Order has been cancelled.'
                ]);
        }
    }

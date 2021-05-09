<?php

namespace App\Http\Controllers;

use App\Repositories\Billing\BillingInterface;
use App\Repositories\Order\GenerateOrder;
use App\Repositories\Order\ProcessOrder;

class TestPaypalController extends Controller
{
    /**
     * @var \App\Repositories\Billing\BillingInterface
     */
    public BillingInterface $billing;
    /**
     * @var \App\Repositories\Order\ProcessOrder
     */
    public ProcessOrder $processOrder;


    public function __construct(BillingInterface $billing, ProcessOrder $processOrder)
    {
        $this->billing = $billing;
        $this->processOrder = $processOrder;
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function checkout()
    {
        try {
            return $this->billing->makePayment();
        } catch (\Exception $exception) {
            report($exception);
            $this->clearSession();
            return redirect()->back()->with('failed', 'Something went wrong. Contact Designwala.');
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Throwable
     */
    public function successCheckout()
    {
        try {
            $paypal_order_id = session('other.paypal_order_id');
            $response = $this->billing->successPayment($paypal_order_id);
            $this->processOrder->get($response);
//            $this->processOrder->clearSession();
//            $data = [
//                'paid_amount' => $response->result->purchase_units[0]->payments->captures[0]->amount->value,
//                'transaction_id' => $response->result->purchase_units[0]->payments->captures[0]->id,
//                'invoice_id' => $response->result->purchase_units[0]->invoice_id,
//            ];
//
//            \DB::beginTransaction();
//            try {
//                $order = $this->generateOrder->storeOrder();
//                if ($response->result->status == 'COMPLETED') {
//                    $this->generateOrder->storePayment($data, $order, 'paid');
//                    // Generate Invoice
//                    $this->generateOrder->storeInvoice($data, $order);
//                    // Send Invoice to user
//                    // TODO - Send Invoice
//                } else {
//                    $this->generateOrder->storePayment($data, $order, 'failed');
//                }
//                \DB::commit();
//            } catch (\Exception $exception){
//                report($exception);
                $this->clearSession();
//                \DB::rollBack();
                return redirect()->back()->with('success', 'Nice it worked!');
//            }
        } catch (\Exception $exception) {
            report($exception);
            $this->clearSession();
            return redirect()->route('test.index')->with('failed', 'Something went wrong. Contact Designwala.');
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cancelCheckout()
    {
        $this->billing->cancelPayment();
        return redirect()->route('test.index')->with(['failed' => 'Payment has been cancelled.']);
    }
}

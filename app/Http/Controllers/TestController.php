<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\Paypal\PaypalService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private PaypalService $paypalService;

    function __construct(PaypalService $paypalService){
        $this->paypalService = $paypalService;
    }

    public function index()
    {
        return view('blank');
    }

    public function expressCheckout($orderId)
    {
        $response = $this->paypalService->createOrder($orderId);
//        dd($response);
        if($response->statusCode !== 201) {
            abort(500);
        }

        $order = Order::find($orderId);
//        dd($order);
        $order->paypal_order_id = $response->result->id;
        $order->save();

        foreach ($response->result->links as $link) {
            if($link->rel == 'approve') {
                return redirect($link->href);
            }
        }
    }


    public function cancelPayment()
    {
        return redirect()->route('test.index')->with(['payment-cancel' => 'Payment has been cancelled.']);
    }


    public function expressCheckoutSuccess(Request $request, $orderId)
    {
        $order = Order::find($orderId);
        $response = $this->paypalService->captureOrder($order->paypal_order_id);
//        dd($response);

        if ($response->result->status == 'COMPLETED') {
            $order->transaction_id = $response->result->purchase_units[0]->payments->captures[0]->id;
            $order->payment_status = 'paid';
            $order->save();
//            session()->forget(['order', 'coupon']);

//            Mail::to($order->user->email)->send(new OrderPaid($order));
            return redirect()->route('test.index')->with('success', 'Payment successful!');
        }

        return redirect()->route('test.index')->with('failed', 'Payment Unsuccessful! Something went wrong!');
    }
}

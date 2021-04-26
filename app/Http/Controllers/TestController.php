<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\Order\GenerateOrderContract;
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

    public function store(Request $request)
    {
        if (session()->has(['item', 'other'])){
            session()->forget(['item', 'other']);
        }
        $order = [
            'id' => uniqid(Order::count() + 1),
            'requirements' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti deserunt neque unde? Aperiam asperiores id ipsa laudantium minima nemo repellendus, similique soluta voluptates!',
            'pay_amount' => 50000,
            'applied_coupon' => '1234',
            'discount' => 10,
            'payment_method' => 'paypal'
        ];
        session()->put('item', $order);

        $orderId = session('item.id');
        if (request('payment_method') == 'paypal') {
            return redirect()->route('test.payment', $orderId);
        }
        return redirect()->route('test.index');
    }


    public function expressCheckout()
    {
        $response = $this->paypalService->createOrder();
        session()->put('other', [
            'paypal_order_id' => $response->result->id
        ]);
//        dd($response);
        if($response->statusCode !== 201) {
            abort(500);
        }

        foreach ($response->result->links as $link) {
            if($link->rel == 'approve') {
                return redirect($link->href);
            }
        }
    }


    public function cancelPayment(Request $request)
    {
        $request->session()->forget('item');
        return redirect()->route('test.index')->with(['payment-cancel' => 'Payment has been cancelled.']);
    }


    public function expressCheckoutSuccess(GenerateOrderContract $generateOrder)
    {
        $paypal_order_id = session('other.paypal_order_id');
        $response = $this->paypalService->captureOrder($paypal_order_id);
//        dd($response);

//        $order_number = Order::count() + 1;
        $order = $generateOrder->storeOrder();
        if ($response->result->status == 'COMPLETED') {
            $payments = $generateOrder->storePayment($response, $order, 'paid');

            if ($payments->payment_status === 'paid') {
                $invoice = $generateOrder->storeInvoice($response, $order);
            }
            session()->forget(['item', 'other']);
            // Send invoice to users mail
//            Mail::to($order->user->email)->send(new OrderPaid($order));
            return redirect()->route('test.index')->with('success', 'Payment successful! Your order has been placed.');
        } else {
            $payments = $generateOrder->storePayment($response, $order, 'failed');
            session()->forget(['item', 'other']);
            return redirect()->route('test.index')->with('failed', 'Payment Unsuccessful! Something went wrong!');
        }
    }
}

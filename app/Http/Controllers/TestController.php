<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use App\Services\Paypal\PaypalService;
use Illuminate\Database\Eloquent\Model;
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
//        $order = Order::find($orderId);
//        $order->payment_status = 'cancelled';
//        $order->save();
        $request->session()->forget('item');
        return redirect()->route('test.index')->with(['payment-cancel' => 'Payment has been cancelled.']);
    }


    public function expressCheckoutSuccess(Request $request)
    {
//        $order = Order::find($orderId);
        $token = $request->get('token');
        $response = $this->paypalService->captureOrder($token);
//        dd($response);

        $order_number = Order::count() + 1;
        if ($response->result->status == 'COMPLETED') {
            $order = Order::create([
                'requirements' => session('item.0.requirements'),
                'pay_amount' => session('item.0.pay_amount'),
                'applied_coupon' => session('item.0.applied_coupon'),
                'discount' => session('item.0.discount'),
                'order_number' => config('services.paypal.prefix.order_number') . $order_number,
                'payment_status' => 'paid',
            ]);
//            $order->order_number = config('services.paypal.prefix.order_number') . $order_number;
//            $order->payment_status = 'paid';
//            $order->save();

            if ($order->payment_status === 'paid') {
                $order->invoices()->create([
                    'invoice_id' => config('services.paypal.prefix.invoice_id') . $order_number,
                    'transaction_id' => $response->result->purchase_units[0]->payments->captures[0]->id,
                    'paid_amount' => $response->result->purchase_units[0]->payments->captures[0]->id,
                    'discount' => $response->result->purchase_units[0]->payments->captures[0]->id,
                ]);
            }
//            session()->forget(['order', 'coupon']);
//            Mail::to($order->user->email)->send(new OrderPaid($order));
            return redirect()->route('test.index')->with('success', 'Payment successful!');
        } else {
//            $order->delete();
            $request->session()->forget('item');
            return redirect()->route('test.index')->with('failed', 'Payment Unsuccessful! Something went wrong!');
        }
    }
}

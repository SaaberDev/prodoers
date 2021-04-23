<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class TestOrderController extends Controller
{
    public function store(Request $request)
    {
//        $order = new Order();
//        $order->user_id = 1;
//        $order->service_id = 1;
//        $order->requirements = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti deserunt neque unde? Aperiam asperiores id ipsa laudantium minima nemo repellendus, similique soluta voluptates!';
//        // amount & coupon will come from session
//        $order->pay_amount = 24.22;
//        $order->applied_coupon = '1234';
//        $order->discount = 10;
//        // amount & coupon will come from session
//        $order->order_status = 'pending';
//        $order->payment_status = 'pending';

        $order = [
            'id' => uniqid(),
            'requirements' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti deserunt neque unde? Aperiam asperiores id ipsa laudantium minima nemo repellendus, similique soluta voluptates!',
            'pay_amount' => 24.22,
            'applied_coupon' => '1234',
            'discount' => 10,
        ];
        $request->session()->forget('item');
        $request->session()->push('item', $order);


        $paypal = [
            'payment_method' => 'paypal'
        ];
        $paypal = array_merge($order, $paypal);
        $request->session()->forget('item');
        if (request('payment_method') == 'paypal') {
            $request->session()->push('item', $paypal);
//            $order->payment_method = 'paypal';
        }
//        dd(array_merge(session('item')));

//        $order->save();
        $orderId = session('item.0.id');

        if (request('payment_method') == 'paypal') {
            return redirect()->route('test.payment', $orderId);
        }
//        if (request('payment_method') == 'paypal') {
//            return redirect()->route('test.payment', $order->id);
//        }
        // clear session

        return redirect()->route('test.index')->with('success', 'Order has been placed');

    }
}

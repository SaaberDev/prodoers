<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class TestOrderController extends Controller
{
    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = 1;
        $order->service_id = 1;
        $order->requirements = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti deserunt neque unde? Aperiam asperiores id ipsa laudantium minima nemo repellendus, similique soluta voluptates!';
        // amount & coupon will come from session
        $order->pay_amount = 24.22;
        $order->applied_coupon = '1234';
        $order->discount = 10;
        // amount & coupon will come from session
        $order->order_status = 'pending';
        $order->payment_status = 'pending';

        if (request('payment_method') == 'paypal') {
            $order->payment_method = 'paypal';
        }

        $order->save();

        if (request('payment_method') == 'paypal') {
            return redirect()->route('test.payment', $order->id);
        }
        // clear session

        return redirect()->route('test.index')->with('success', 'Order has been placed');

    }
}

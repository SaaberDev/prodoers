<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class TestOrderController extends Controller
{
    public function store(Request $request)
    {
        $order = new Order();
        $order->order_number = uniqid('DW2021-04-');
        $order->requirements = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti deserunt neque unde? Aperiam asperiores id ipsa laudantium minima nemo repellendus, similique soluta voluptates!';
        $order->paid_amount = 24.22;
        $order->coupon_code = '1234';
        $order->order_status = 'pending';

        $order->payment_status = 'paid';

        $order->user_id = 1;

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

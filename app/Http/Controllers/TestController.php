<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('blank');
    }

    public function store(Request $request)
    {
        $rules = [
            'payment_method' => 'required'
        ];
        $request->validate($rules);

        if (session()->has(['item', 'other'])){
            session()->forget(['item', 'other']);
        }

        $order = [
            'requirements' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti deserunt neque unde? Aperiam asperiores id ipsa laudantium minima nemo repellendus, similique soluta voluptates!',
            'pay_amount' => 50,
            'applied_coupon' => '1234',
            'discount' => 10,
            'payment_method' => $request->input('payment_method')
        ];
        session()->put('item', $order);


        $post_data = [
            'total_amount' => 10,
            'currency' => 'BDT',
            'tran_id' => uniqid(),

            'cus_name' => 'Customer Name',
            'cus_email' => 'customer@mail.com',
            'cus_add1' => 'Customer Address',
            'cus_add2' => 'Goods',
            'cus_city' => 'Goods',
            'cus_postcode' => 'Goods',
            'cus_country' => 'Bangladesh',
            'cus_phone' => '8801XXXXXXXXX',
            'cus_fax' => '',

            'ship_name' => 'Store Test',
            'ship_add1' => 'Dhaka',
            'ship_add2' => 'Dhaka',
            'ship_city' => 'Dhaka',
            'ship_state' => 'Dhaka',
            'ship_postcode' => '1000',
            'ship_phone' => '',
            'ship_country' => 'Bangladesh',

            'shipping_method' => 'NO',
            'product_name' => 'Computer',
            'product_category' => 'Goods',
            'product_profile' => 'physical-goods',
        ];
//        \Cookie::make();
        session()->put('sslcommerz', $post_data);

        $payment_method = $request->only('payment_method');
        return redirect()->route('test.payment', $payment_method);

//        \Cache::put('sslcommerz', $post_data);
//        return $this->checkout();
//        return redirect()->route('test.payment');
    }
}

// TODO -- $payMood on each payment Repo, need to pass parameter in success and cancel request

<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Repositories\Billing\BillingInterface;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private BillingInterface $billing;

    public function __construct(BillingInterface $billing)
    {
        $this->billing = $billing;
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
            'pay_amount' => 100,
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

    public function checkout()
    {
        if (session('item.payment_method') == 'paypal') {
            try {
                return $this->billing->makePayment();
            } catch (\Exception $exception) {
                report($exception);
                $this->billing->clearSession();
                return redirect()->back()->with('failed', 'Something went wrong. Contact Designwala.');
            }
        }
    }

    public function successCheckout()
    {
        if (session('item.payment_method') == 'paypal') {
            try {
                $this->billing->successPayment();
                $this->billing->clearSession();
                return redirect()->route('test.index')->with('success',
                    'Payment successful! Your order has been placed.');
            } catch (\Exception $exception) {
                report($exception);
                $this->billing->clearSession();
                return redirect()->route('test.index')->with('failed', 'Something went wrong. Contact Designwala.');
            }
        }
    }

    public function cancelCheckout()
    {
        $this->billing->clearSession();
        return redirect()->route('test.index')->with(['failed' => 'Payment has been cancelled.']);
    }
}

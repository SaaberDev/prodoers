<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Repositories\Billing\PaymentGateway;
use App\Repositories\Order\GenerateOrderContract;
use App\Repositories\PaymentGateway\Paypal\Order\PaypalOrderInterface;
use Illuminate\Http\Request;
use PayPalHttp\HttpException;

class TestController extends Controller
{
    private PaymentGateway $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
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
            'pay_amount' => 300,
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

    public function cancelCheckout()
    {
        $this->paymentGateway->cancelPayment();
        return redirect()->route('test.index')->with(['failed' => 'Payment has been cancelled.']);
    }

    public function checkout()
    {
        try {
            if (session('item.payment_method') == 'paypal') {
                return $this->paymentGateway->makePaypalPayment();
            }
        } catch (\Exception $exception){
            report($exception);
            session()->forget(['item', 'other']);
            session()->regenerate();
            return redirect()->back()->with('failed', 'Something went wrong. Contact Designwala.');
        }
    }

    public function successCheckout()
    {
        try {
            if (session('item.payment_method') == 'paypal') {
                $this->paymentGateway->successPaypalPayment();
                session()->forget(['item', 'other']);
                session()->regenerate();
                return redirect()->route('test.index')->with('success', 'Payment successful! Your order has been placed.');
            }
        } catch (\Exception $exception){
            report($exception);
            session()->forget(['item', 'other']);
            session()->regenerate();
            return redirect()->route('test.index')->with('failed', 'Something went wrong. Contact Designwala.');
        }
    }
}

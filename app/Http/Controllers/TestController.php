<?php

namespace App\Http\Controllers;

use App\Repositories\Order\ProcessOrder;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private ProcessOrder $processOrder;

    public function __construct(ProcessOrder $processOrder)
    {
        $this->processOrder = $processOrder;
    }

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

        $this->processOrder->setData($request);

        $payment_method = $request->only('payment_method');
        return redirect()->route('test.payment', $payment_method);
    }
}


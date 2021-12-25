<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Repositories\Order\ProcessOrder;
use App\Services\Generator\CodeGenerator;
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
        $m = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $k = \Str::limit($m, 120);
        return $k;
    }

    public function store(Request $request)
    {
//        $rules = [
//            'payment_method' => 'required'
//        ];
//        $request->validate($rules);

        $this->processOrder->setData($request);

        $payment_method = $request->only('payment_method');
        return redirect()->route('test.payment', $payment_method);
    }
}


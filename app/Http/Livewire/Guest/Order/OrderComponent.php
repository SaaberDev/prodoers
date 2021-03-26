<?php

namespace App\Http\Livewire\Guest\Order;

use App\Models\Order;
use Livewire\Component;

class OrderComponent extends Component
{
    public $service;

    public function store()
    {
        \DB::beginTransaction();
        try {
            $order = Order::create([

            ]);
//            $order->services()->associate();
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();
        }
    }
    public function render()
    {
        return view('livewire.guest.order.order-component');
    }
}

<?php

namespace App\Http\Livewire\Guest\Order;

use App\Models\Order;
use Livewire\Component;

class OrderComponent extends Component
{
    public $service;
    public $form = [
        'title' => '',
        'desc' => '',
        'coupon' => '',
    ];
    public $paymentMethod = [
        'paypal' => '',
        'visa' => '',
        'bkash' => '',
        'mastercard' => '',
    ];

    protected $rules = [
        'form.title' => 'required',
        'form.desc' => 'nullable|min:250',
        'form.coupon' => 'nullable|same:coupons,title',
        'paymentMethod' => 'required',
    ];

    protected $messages = [
        'form.title.required' => 'Title field is required.',
        'form.desc.min' => 'Description length must be 250 character.',
        'form.coupon.same' => 'Invalid Coupon.',
        'paymentMethod.required' => 'Please choose a payment method.',
    ];

    public function update()
    {
        $this->validate();
    }


    public function store()
    {
        \DB::beginTransaction();
        try {
            $order = Order::create([
                // Store in db ===> to-do!
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

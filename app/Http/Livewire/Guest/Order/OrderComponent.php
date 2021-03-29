<?php

namespace App\Http\Livewire\Guest\Order;

use App\Models\Coupon;
use App\Models\Order;
use Illuminate\Validation\Rule;
use Livewire\Component;

class OrderComponent extends Component
{
    public $service;
    public $item;
    public $form = [
        'title' => '',
        'desc' => '',
        'coupon' => '',
    ];
    public $paymentMethod = [
        'paypal',
        'visa',
        'bkash',
        'mastercard',
    ];

    public function rules()
    {
        $rules[] = [];
        $formRules = [
            'form.title' => 'required',
            'form.desc' => 'nullable|min:250',
            'form.coupon' => 'nullable',
        ];

        foreach ($this->paymentMethod as $item) {
            $this->item = $item;
            $paymentRule = [
                'paymentMethod.' . $this->item => [
                    'required',
                    Rule::in('paypal,visa,bkash,mastercard')
                ],
            ];
        }
        $rules = array_merge($formRules, $paymentRule);
//        dd($rules);
        return $rules;
    }
    // TODO ------- [payment message validation]
    public function messages()
    {
        $messages[] = [];
        $formMessages = [
            'form.title.required' => 'Title field is required.',
            'form.desc.min' => 'Description length must be 250 character.',
        ];
        foreach ($this->paymentMethod as $item) {
            $this->item = $item;
            $paymentMessages = [
                'paymentMethod.'. $this->item .'.required' => 'Please choose a payment method.',
                'paymentMethod.'. $this->item .'.in' => 'Please choose a payment method.',
            ];
        }
        $messages = array_merge($formMessages, $paymentMessages);
//        dd($messages);
        return $messages;
    }

    public function update()
    {
        $this->validate();
    }

    public function store()
    {
        $this->validate();
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

    public function checkCoupon()
    {
        $coupon = Coupon::findByCode($this->form['coupon']);
        if (empty($this->form['coupon'])){
            $this->resetErrorBag();
            $this->addError('form.coupon', 'Required');
        } elseif (!$coupon){
            $this->resetErrorBag();
            $this->addError('form.coupon', 'Invalid Coupon');
        } else {
            if ($coupon->type == 'fixed') {
                session()->put('coupon', [
                    'code' => $coupon->code,
                    'discount' => $coupon->discount($this->service->price)
                ]);
            } elseif ($coupon->type == 'percent') {
                session()->put('coupon', [
                    'code' => $coupon->code,
                    'percent' => $coupon->percent_off,
                    'discount' => $coupon->discount($this->service->price)
                ]);
            } else {
                return 0;
            }
            $this->dispatchBrowserEvent('success_toast', [
                'title' => 'Coupon Applied.',
            ]);
        }
        return redirect()->back();
    }

    public function removeCoupon()
    {
        session()->forget('coupon');
        $this->resetErrorBag();
        $this->form['coupon'] = '';
        $this->dispatchBrowserEvent('success_toast', [
            'title' => 'Coupon has been removed.',
        ]);
    }

    public function render()
    {
        return view('livewire.guest.order.order-component');
    }
}

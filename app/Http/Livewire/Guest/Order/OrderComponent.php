<?php

namespace App\Http\Livewire\Guest\Order;

use App\Models\Coupon;
use App\Repositories\Order\ProcessOrder;
use Livewire\Component;

class OrderComponent extends Component
{
    public $service_thumbnail;

    public $service;
    public $form = [
        'requirements' => '',
        'coupon' => '',
        'paymentMethod' => [
            'paypal',
            'visa',
            'bkash',
            'mastercard',
        ],
    ];

    protected $rules = [
        'form.requirements' => 'required|min:250',
        'form.coupon' => 'nullable',
        'form.paymentMethod' => 'in:paypal,visa,bkash,mastercard',
    ];

    protected $messages = [
        'form.requirements.required' => 'Requirements field is required.',
        'form.requirements.min' => 'Requirements length must be 250 character.',
        'form.paymentMethod.in' => 'Please choose a payment method.',
    ];

    public function store(ProcessOrder $processOrder)
    {
        $this->validate();
        $processOrder->setData($this->form, $this->service);

        $payment_method = 'payment_method=' .$this->form['paymentMethod'];
        return redirect()->route('test.payment', $payment_method);
    }

    public function checkCoupon()
    {
        $model = new Coupon();
        $coupon = $model->findByCodeIfPublished($this->form['coupon'])->first();
        $hasCategoryCoupon = $model->applyCouponTo($this->service->service_category_id, $this->service->id)->first();

        // Check if coupon is empty
        if (empty($this->form['coupon'])) {
            $this->resetErrorBag();
            $this->addError('form.coupon', 'No coupon to apply.');
        } elseif (!$coupon) {
            $this->resetErrorBag();
            $this->addError('form.coupon', 'Invalid Coupon');
        } elseif (!$hasCategoryCoupon) {
            $this->resetErrorBag();
            $this->addError('form.coupon', 'This coupon is not valid for this service.');
        } elseif ($coupon->checkCouponValidity()) {
            $this->resetErrorBag();
            $this->addError('form.coupon', $coupon->checkCouponValidity());
        } else {
            $this->adjustTotalPrice($coupon);
        }

        return redirect()->back();
    }

    function adjustTotalPrice($coupon)
    {
        if ($coupon->coupon_type == 'fixed') {
            session()->put('coupon', [
                'code' => $coupon->coupon_code,
                'discount' => $coupon->discount($this->service)
            ]);
            $this->dispatchBrowserEvent('success_toast', [
                'title' => 'Coupon Applied.',
            ]);
        } elseif ($coupon->coupon_type == 'percentage'){
            session()->put('coupon', [
                'code' => $coupon->coupon_code,
                'percent' => $coupon->percent_off,
                'discount' => $coupon->discount($this->service)
            ]);
            session()->put('order', [
                'grand_total' => (($this->service->price) - (session('coupon.discount')))
            ]);
        } else {
            $this->resetErrorBag();
            $this->addError('form.coupon', 'Opps, something went wrong.');
        }
    }

    public function removeCoupon()
    {
        session()->forget('coupon');
        session()->put('order', [
            'grand_total' => (($this->service->price) + (session('coupon.discount')))
        ]);
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

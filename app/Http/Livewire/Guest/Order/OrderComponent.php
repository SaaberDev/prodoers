<?php

namespace App\Http\Livewire\Guest\Order;

use App\Models\Coupon;
use App\Models\Order;
use App\Repositories\Order\ProcessOrder;
use Illuminate\Http\Request;
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
        'paypal',
        'visa',
        'bkash',
        'mastercard',
    ];

    protected $rules = [
        'form.title' => 'required',
        'form.desc' => 'nullable|min:250',
        'form.coupon' => 'nullable',
        'paymentMethod' => 'in:paypal,visa,bkash,mastercard',
    ];

    protected $messages = [
        'form.title.required' => 'Title field is required.',
        'form.desc.min' => 'Description length must be 250 character.',
        'paymentMethod.in' => 'Please choose a payment method.',
    ];

    public function store(ProcessOrder $processOrder)
    {
        $this->validate();

//        $processOrder->setData(\request());
////        $this->processOrder->setData($request);
////        $payment_method = \request()->only('payment_method');
//        $payment_method = $this->paymentMethod;
////        dd($payment_method);
//        return redirect()->route('test.payment', $payment_method);

//        \DB::beginTransaction();
//
//        try {
//            $order = Order::create([
//                // TODO -- Store in db
//            ]);
////            $order->services()->associate();
//            \DB::commit();
//        } catch (\Exception $e) {
//            \DB::rollBack();
//        }
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

<?php

namespace App\Http\Livewire\Guest\Order;

use App\Models\Coupon;
use App\Models\Order;
use App\Models\Service;
use App\Models\ServiceCategory;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
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
        $model = new Coupon();
        $coupon = $model->findByCodeIfPublished($this->form['coupon'])->first();
        $hasCategoryCoupon = $model->applyCouponTo($this->service->service_category_id, $this->service->id)->first();

        // TODO - Refactor if else ...
        // Check if coupon is empty
        if (empty($this->form['coupon'])) {
            $this->resetErrorBag();
            $this->addError('form.coupon', 'Required');
        } elseif (!$coupon) {
            $this->resetErrorBag();
            $this->addError('form.coupon', 'Invalid Coupon');
        }
        elseif ($coupon->checkCouponValidity()) {
            $this->resetErrorBag();
            $this->addError('form.coupon', $coupon->checkCouponValidity());
        }

        elseif (!$hasCategoryCoupon) {
            $this->resetErrorBag();
            $this->addError('form.coupon', 'This coupon is not valid for this service.');
        }

        else {
            if ($coupon->coupon_type == 'fixed') {
                session()->put('coupon', [
                    'code' => $coupon->coupon_code,
                    'discount' => $coupon->discount($this->service)
                ]);
            } elseif ($coupon->coupon_type == 'percentage') {
                session()->put('coupon', [
                    'code' => $coupon->coupon_code,
                    'percent' => $coupon->percent_off,
                    'discount' => $coupon->discount($this->service)
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

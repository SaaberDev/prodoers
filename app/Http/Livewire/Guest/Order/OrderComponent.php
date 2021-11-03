<?php

    namespace App\Http\Livewire\Guest\Order;

    use App\Models\Coupon;
    use App\Repositories\Order\ProcessOrder;
    use Auth;
    use Livewire\Component;
    use Session;
    use Str;

    class OrderComponent extends Component
    {
        public $service;
        public $currentStep = 1;
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
            'form.requirements' => 'required',
            'form.coupon' => 'nullable',
            'form.paymentMethod' => 'in:paypal,visa,bkash,mastercard',
        ];

        protected $messages = [
            'form.requirements.required' => 'Requirements field is required.',
            'form.requirements.min' => 'Requirements length must be 250 character.',
            'form.paymentMethod.in' => 'Please choose a payment method.',
        ];

        public function render()
        {
            return view('livewire.guest.order.order-component');
        }

        public function store(ProcessOrder $processOrder)
        {
            $this->validate();
            $sessionData = Session::get('order');
            $data = [
                'user_id' => 1,
                'service_id' => $this->service->id,
                'title' => $this->service->title,
                'short_desc' => Str::limit($this->service->short_desc),
                'pay_amount' => $sessionData['grand_total'] ?? null,
                'applied_coupon' => $sessionData['coupon']['code'] ?? null,
                'discount' => $sessionData['coupon']['discount'] ?? null,
//            'currency' => $sessionData['currency'],
                'requirements' => $this->form['requirements'] ?? null,
                'payment_method' => $this->form['paymentMethod'] ?? null,


                // Billing Information
                'cus_name' => Auth::user()->name ?? '',
                'cus_email' => Auth::user()->email ?? '',
                'cus_add1' => Auth::user()->userDetails->address ?? '',
                'cus_postcode' => Auth::user()->userDetails->postal_code ?? '',
                'cus_country' => Auth::user()->userDetails->country ?? '',
                'cus_phone' => Auth::user()->userDetails->phone ?? '',
            ];
            $processOrder->setData($data);

            $payment_method = 'payment_method=' . $this->form['paymentMethod'];
            return redirect()->route('guest.order.checkout', $payment_method);
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
        }

        private function adjustTotalPrice($coupon)
        {
            $sessionData = Session::get('order');
            if ($coupon->coupon_type == 'fixed') {
                $sessionData['coupon'] = [
                    'code' => $coupon->coupon_code,
                    'amount' => $coupon->amount,
                    'discount' => $coupon->discount($this->service)
                ];
                $sessionData['grand_total'] = (($this->service->price) - ($coupon->discount($this->service)));

                session()->put('order', $sessionData);
                $this->dispatchBrowserEvent('success_toast', [
                    'title' => 'Coupon Applied.',
                ]);
            } elseif ($coupon->coupon_type == 'percent_off') {
                $sessionData['coupon'] = [
                    'code' => $coupon->coupon_code,
                    'percent' => $coupon->percent_off,
                    'discount' => $coupon->discount($this->service)
                ];
                $sessionData['grand_total'] = (($this->service->price) - ($coupon->discount($this->service)));

                session()->put('order', $sessionData);
            } else {
                $this->resetErrorBag();
                $this->addError('form.coupon', 'Oops, something went wrong.');
            }
        }

        public function removeCoupon()
        {
            session()->forget('order.coupon');
            session()->put('order', [
                'grand_total' => (($this->service->price) + (session('coupon.discount')))
            ]);
            $this->resetErrorBag();
            $this->form['coupon'] = '';
            $this->dispatchBrowserEvent('success_toast', [
                'title' => 'Coupon has been removed.',
            ]);
        }

        /**
         * For Mobile Version
         */
        public function stepOne()
        {
            $this->validate([
                'form.requirements' => 'required|min:250',
            ]);
            $this->currentStep = 2;
        }

        /**
         * For Mobile Version
         *
         * @param $step
         */
        public function back($step)
        {
            $this->currentStep = $step;
        }
    }

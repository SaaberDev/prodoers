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
            'order_requirement_files' => '',
            'paymentMethod' => [
                'paypal',
                'visa',
                'bkash',
                'mastercard',
            ],
        ];

        protected $rules = [
            'form.requirements' => 'required',
            'form.order_requirement_files' => 'image',
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

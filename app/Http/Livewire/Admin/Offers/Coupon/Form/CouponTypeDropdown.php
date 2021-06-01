<?php

namespace App\Http\Livewire\Admin\Offers\Coupon\Form;

use Livewire\Component;

class CouponTypeDropdown extends Component
{
    public $couponType = '';
    public $discountData;

    public function mount()
    {
        // Get old session data if validation fails
        if (old('coupon_type')) {
            $this->couponType = old('coupon_type');
        }

        // Get old session data based on coupon type if validation fails
        if (old('fixed')) {
            $this->discountData = old('fixed');
        } elseif (old('percent_off')) {
            $this->discountData = old('percent_off');
        }
    }

    public function render()
    {
        return view('livewire.admin.offers.coupon.form.coupon-type-dropdown');
    }
}

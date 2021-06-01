<?php

namespace App\Http\Livewire\Admin\Offers\Coupon\Form;

use App\Models\Service;
use App\Models\ServiceCategory;
use Livewire\Component;

class ApplyCouponToDropdown extends Component
{
    public $dropdown = [
        'all' => [],
        'service_categories' => [],
        'services' => []
    ];

    public $applyTo = '';
    public $selected = [];

//    protected $rules = [
//        'applyTo' => 'required',
////        'dropdown.service_categories' => 'required',
////        'dropdown.services' => 'required',
////        'dropdown' => 'array',
////        'dropdown.*' => 'required|integer',
//    ];

    public function mount()
    {
        if (old('apply_to')) {
            $this->applyTo = old('apply_to');
        }

        if (old('apply_to') == 'services') {
            $this->dropdown['services'] = Service::orderByDesc('id')->get(['title', 'id']);
        } elseif (old('apply_to') == 'categories') {
            $this->dropdown['service_categories'] = ServiceCategory::orderByDesc('id')->get(['title', 'id']);
        }

        if (old('services')) {
            $this->selected = old('services');
        } elseif (old('categories')) {
            $this->selected = old('categories');
        }
    }

    public function updatedApplyTo()
    {
        if ($this->applyTo == 'all') {
            $this->dropdown['services'] = [];
            $this->dropdown['service_categories'] = [];
        } elseif ($this->applyTo == 'services') {
            $this->dropdown['service_categories'] = [];
            $this->dropdown['services'] = Service::orderByDesc('id')->get(['title', 'id']);
        } elseif ($this->applyTo == 'categories') {
            $this->dropdown['services'] = [];
            $this->dropdown['service_categories'] = ServiceCategory::orderByDesc('id')->get(['title', 'id']);
        }
    }

    public function render()
    {
        return view('livewire.admin.offers.coupon.form.apply-coupon-to-dropdown');
    }
}

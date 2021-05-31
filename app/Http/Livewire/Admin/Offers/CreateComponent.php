<?php

namespace App\Http\Livewire\Admin\Offers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Livewire\Component;

class CreateComponent extends Component
{
    public $dropdown = [];
    public $service_categories = false;
    public $services = false;

    public $applyTo = '';

    protected $rules = [
//        'services' => 'array',
//        'services.*' => 'required|integer',
//        'service_categories' => 'array',
//        'service_categories.*' => 'required|integer',
        'dropdown' => 'array',
        'dropdown.*' => 'required|integer',
    ];

    public function updatedApplyTo()
    {
        if ($this->applyTo == 'all') {
            $this->applyTo = '';
            $this->service_categories = false;
            $this->services = false;
        } elseif ($this->applyTo == 'categories') {
            $this->services = false;
            $this->service_categories = true;
            $this->service_categories = ServiceCategory::orderByDesc('id')->get(['title', 'id']);
        } elseif ($this->applyTo == 'services') {
            $this->service_categories = false;
            $this->services = true;
            $this->services = Service::orderBy('id', 'desc')->get(['title', 'id']);
        }
    }

    public function render()
    {
        return view('livewire.admin.offers.create-component');
    }
}

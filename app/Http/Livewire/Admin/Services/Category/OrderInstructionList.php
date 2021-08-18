<?php

namespace App\Http\Livewire\Admin\Services\Category;

use Livewire\Component;

class OrderInstructionList extends Component
{
    public $service_category;

    protected $listeners = ['$refresh'];

    public function render()
    {
        return view('livewire.admin.services.category.order-instruction-list');
    }
}

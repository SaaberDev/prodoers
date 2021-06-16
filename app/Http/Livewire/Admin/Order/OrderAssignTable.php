<?php

namespace App\Http\Livewire\Admin\Order;

use Livewire\Component;

class OrderAssignTable extends Component
{
    public $designwalas;
    public $order;

    public function render()
    {
        return view('livewire.admin.order.order-assign-table');
    }
}

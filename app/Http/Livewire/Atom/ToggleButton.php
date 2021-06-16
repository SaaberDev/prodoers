<?php

namespace App\Http\Livewire\Atom;

use Livewire\Component;

class ToggleButton extends Component
{
    public $order;
    public $designwala;

    public $status;

    public function mount()
    {
        foreach ($this->designwala->assignOrders as $item) {
            if ($item->pivot->status == 'assigned' && $this->order->id == $item->pivot->order_id) {
                $this->status = 'assigned';
            } elseif ($item->pivot->status == 'cancelled' && $this->order->id == $item->pivot->order_id) {
                $this->status = 'cancelled';
            }
        }
        return $this->status;
    }

    public function render()
    {
        return view('livewire.atom.toggle-button');
    }

    public function assign()
    {
        if ($this->status == 'cancelled') {
            $this->designwala->assignOrders()->detach($this->order->id);
        }
        $this->designwala->assignOrders()->attach($this->order->id, [
            'status' => 'assigned'
        ]);
        $this->status = 'assigned';
    }

}

<?php

namespace App\Http\Livewire\Admin\Offers\Coupon\Form;

use Livewire\Component;

class SubmitButton extends Component
{
    public function check()
    {
        $this->emit('check');
    }

    public function render()
    {
        return <<<'blade'
            <div class="col-md-12 py-4 ">
                <div class="text-right">
                    <button type="submit" wire:click.prevent="check" class="btn shadow bgOne rounded text-white px-4"> Submit</button>
                </div>
            </div>
        blade;
    }
}

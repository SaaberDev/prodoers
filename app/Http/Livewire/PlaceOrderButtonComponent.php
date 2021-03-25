<?php

namespace App\Http\Livewire;

use Illuminate\Session\SessionManager;
use Livewire\Component;

class PlaceOrderButtonComponent extends Component
{
    public $services;
//    public function mount(SessionManager $session)
//    {
//        $session->put('url.intended', route('guest.order.index', $this->services->slug));
//    }

    public function redirectTo(SessionManager $session, $services)
    {
        if (\Auth::guest()){
            $session->put('url.intended', route('guest.order.index',  $this->services->slug));
        }
        if (\Auth::check() && \Auth::user()->hasRole('user')){
            return redirect()->route('guest.order.index', $services->slug);
        }
    }

    public function render()
    {
        return <<<'blade'
            <div>
                <button rel="modal:open" id="place_order" wire:click.prevent="redirectTo($services)" class="btn bgOne text-white btn-lg btn-block rounded-0">Place Order</button>
            </div>
        blade;
    }
}

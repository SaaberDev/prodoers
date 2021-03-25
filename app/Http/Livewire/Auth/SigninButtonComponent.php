<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class SigninButtonComponent extends Component
{
    public $currentUrl;
    public $slice;
    public $implode;
    public $routeMatch;

    public function mount()
    {
        $this->currentUrl = explode('/', url()->current());
        $this->slice = array_slice($this->currentUrl, 0, -1);
        $this->implode = implode('/', $this->slice);
        $this->routeMatch = \Str::is('https://designwala.test/services', $this->implode);
    }

    public function forgetSession()
    {
        if ($this->routeMatch === false){
            request()->session()->forget('url.intended');
        }
    }

    public function render()
    {
        return <<<'blade'
            <div>
                <a type="button" id="logged_in" wire:click.prevent="forgetSession" class="btn text-white" href="#sign_in">Sign In</a>
            </div>
        blade;
    }
}

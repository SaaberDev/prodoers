<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class SigninButtonComponent extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <a type="button" id="logged_in" class="btn text-white" href="#sign_in">Sign In</a>
            </div>
        blade;
    }
}

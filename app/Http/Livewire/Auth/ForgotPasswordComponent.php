<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Component;

class ForgotPasswordComponent extends Component
{
    public $form = [
        'email' => '',
    ];

    protected $listeners = ['refreshErrors'];

    protected $rules = [
        'form.email' => 'required|string|email:rfc,dns|exists:users,email',
    ];

    protected $messages = [
        'form.email.required' => 'Email field is required.',
        'form.email.email' => 'Invalid email address.',
        'form.email.exists' => 'This email do not match our records.',
    ];

    public function update()
    {
        $this->validate();
    }

    public function store()
    {
        $this->validate();
        $status = Password::sendResetLink(
            ['email' => $this->form['email']]
        );
        $this->reset();
        return $status == Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withInput(['email' => $this->form['email']])
                ->withErrors(['email' => __($status)]);
    }

    public function refreshErrors()
    {
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.auth.forgot-password-component');
    }
}

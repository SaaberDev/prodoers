<?php

namespace App\Http\Livewire\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class LoginComponent extends Component
{
    public $form = [
        'email' => '',
        'password' => '',
    ];
//    public $remember;

    protected $rules = [
//        'form.email' => 'required|string',
        'form.email' => 'required|string|email:rfc,dns|exists:users,email',
        'form.password' => 'required|string',
    ];

    protected $messages = [
        'form.email.required' => 'Email field is required.',
        'form.email.email' => 'Invalid email address.',
        'form.email.exists' => 'This email do not match our records.',
        'form.password.required' => 'Password field is required.',
    ];

    public function updated()
    {
        $this->validate();
    }

    public function store()
    {
        $this->validate();
        if (!Auth::attempt($this->form)){
            RateLimiter::hit($this->throttleKey());
            throw ValidationException::withMessages([
                'form.password' => __('auth.password'),
            ]);
        }
        RateLimiter::clear($this->throttleKey());
        return redirect()->intended(RouteServiceProvider::DASHBOARD);
    }


    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     *
     * @throws ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 2)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'form.email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        return Str::lower($this->form['email']) . '|' . request()->ip();
    }

    public function render()
    {
        return view('livewire.auth.login-component');
    }

}

<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterComponent extends Component
{
    public $form = [
        'email' => '',
        'password' => '',
        'confirm_password' => '',
    ];

    protected $listeners = [
        'refreshSignup' => '$refresh',
    ];

    protected $rules = [
//        'form.name' => 'required|string|max:255',
        'form.email' => 'required|string|email|unique:users,email',
        'form.password' => [
            'required', 'string', 'min:4',
//            'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
        ],
        'form.confirm_password' => 'required|same:form.password',
    ];

    protected $messages = [
        'form.email.required' => 'Email field is required.',
        'form.email.email' => 'Invalid email address.',
        'form.email.unique' => 'This email already exists.',
        'form.password.required' => 'Password field is required.',
        'form.password.min' => 'Password must be minimum 8 characters.',
        'form.password.regex' => 'Password must contain at least one uppercase, lowercase letter, a number and a symbol.',
        'form.confirm_password.same' => 'Password confirmation does not match.',
        'form.confirm_password.required' => 'Password Confirmation field is required.',
    ];

    public function update()
    {
        $this->validate();
    }

    public function store()
    {
        $this->validate();
        $user = User::create([
            'name' => head(explode('@', strtolower($this->form['email']))),
            'email' => $this->form['email'],
            'username' => head(explode('@', strtolower($this->form['email']))),
            'password' => Hash::make($this->form['password']),
            'remember_token' => \Str::random(64)
        ]);
        $user->assignRole('user');
        event(new Registered($user));

        session()->flash('message', "We've sent you a verification link to your email address. Please verify within 48 hours.");
        $this->reset();

        /*
         * to-do: welcome mail, reset pass, confirmation
         * */
//        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function refreshSignin()
    {
        $this->resetValidation();
        $this->emitUp('refreshSignin');
    }

    public function render()
    {
        return view('livewire.auth.register-component');
    }
}

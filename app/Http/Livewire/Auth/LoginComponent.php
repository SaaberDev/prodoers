<?php

    namespace App\Http\Livewire\Auth;

    use App\Models\Service;
    use App\Providers\RouteServiceProvider;
    use Cache;
    use Illuminate\Auth\Events\Lockout;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\RateLimiter;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Str;
    use Illuminate\Validation\ValidationException;
    use Livewire\Component;
    use Session;
    use function request;

    class LoginComponent extends Component
    {
//    public $currentUrl;
        public $form = [
            'email' => '',
            'password' => '',
        ];
        public $remember;

        protected $listeners = ['refreshErrors', 'resetSession'];

        protected $rules = [
            'form.email' => 'required|string|email:rfc,dns|exists:users,email',
            'form.password' => 'required|string',
        ];
        protected $messages = [
            'form.email.required' => 'Email field is required.',
            'form.email.email' => 'Invalid email address.',
            'form.email.exists' => 'This email do not match our records.',
            'form.password.required' => 'Password field is required.',
        ];

        public function refreshErrors()
        {
            $this->resetValidation();
            $this->reset('form', 'remember');
        }

        public function resetSession()
        {
            Session::forget('auth_modal');
            Cache::clear();
        }

//    public function mount()
//    {
//        $this->currentUrl = url()->current();
//    }

        /**
         * @return RedirectResponse
         */
        public function store()
        {
            $this->validate();

            $this->authenticate();
            request()->session()->regenerate();

            return redirect()->route('login');
        }

        /**
         * authenticate user
         */
        public function authenticate()
        {
            $this->ensureIsNotRateLimited();

            if (!Auth::attempt($this->form, $this->remember)) {
                RateLimiter::hit($this->throttleKey());

                throw ValidationException::withMessages([
                    'form.password' => __('auth.password'),
                ]);
            }

            RateLimiter::clear($this->throttleKey());
        }

        /**
         * Check rate limit
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

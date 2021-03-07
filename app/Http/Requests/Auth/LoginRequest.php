<?php

    namespace App\Http\Requests\Auth;

    use Illuminate\Auth\Events\Lockout;
    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\RateLimiter;
    use Illuminate\Support\Str;
    use Illuminate\Validation\ValidationException;

    class LoginRequest extends FormRequest
    {
        /**
         * Determine if the user is authorized to make this request.
         *
         * @return bool
         */
        public function authorize()
        {
            return true;
        }

        /**
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
        public function rules()
        {
            return [
                'email' => 'required|string|email:rfc,dns|exists:users,email',
//                'password' => 'required|string|min:6',
                'password' => 'required|string',
            ];
        }

        public function messages()
        {
            return [
                'email.required' => __('auth.email.required'),
                'email.email' => __('auth.email.email'),
                'email.exists' => __('auth.email.exists'),
                'password.required' => __('auth.password.required'),
//                'password.min' => __('auth.password.min'),
            ];
        }

        /**
         * Attempt to authenticate the request's credentials.
         *
         * @return void
         *
         * @throws ValidationException
         */
        public function authenticate()
        {
            $this->ensureIsNotRateLimited();

            if (!Auth::attempt($this->only('email', 'password'),
                $this->filled('remember'))) {
                RateLimiter::hit($this->throttleKey());

                throw ValidationException::withMessages([
                    'password' => __('auth.password'),
                ]);
            }

            RateLimiter::clear($this->throttleKey());
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

            event(new Lockout($this));

            $seconds = RateLimiter::availableIn($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.throttle', [
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
            return Str::lower($this->input('email')) . '|' . $this->ip();
        }
    }

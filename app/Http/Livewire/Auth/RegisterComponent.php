<?php

    namespace App\Http\Livewire\Auth;

    use App\Models\User;
    use DB;
    use Exception;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Support\Facades\Hash;
    use Livewire\Component;
    use Session;
    use Str;
    use Throwable;

    class RegisterComponent extends Component
    {
        public $form = [
            'email' => '',
            'password' => '',
            'confirm_password' => '',
        ];

        protected $listeners = ['refreshErrors'];
        protected $rules = [
//        'form.name' => 'required|string|max:255',
            'form.email' => 'required|string|email|unique:users,email',
            'form.password' => [
                'required',
                'string',
                'min:4',
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

        public function refreshErrors()
        {
            $this->resetValidation();
            $this->reset('form');
        }

        /**
         * @throws Throwable
         */
        public function store()
        {
            $this->validate();
            DB::beginTransaction();
            try {
                $user = User::create([
                    'name' => head(explode('@', strtolower($this->form['email']))),
                    'email' => $this->form['email'],
                    'designation' => 'Client',
                    'username' => head(explode('@', strtolower($this->form['email']))),
                    'password' => Hash::make($this->form['password']),
                    'remember_token' => Str::random(64)
                ]);
                $user->assignRole('user');
                event(new Registered($user));
                DB::commit();
                Session::flash('message', "We've sent you a verification link to your email address. Please verify within 48 hours.");
            } catch (Exception $exception) {
                DB::rollBack();
                report($exception->getMessage());
                session()->flash('error', $exception->getMessage());
            }
            $this->reset();
        }

        public function render()
        {
            return view('livewire.auth.register-component');
        }
    }

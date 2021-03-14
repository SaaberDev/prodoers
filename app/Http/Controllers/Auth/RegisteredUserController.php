<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Auth\RegistrationRequest;
    use App\Models\User;
    use App\Providers\RouteServiceProvider;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Validation\ValidationException;
    use Illuminate\View\View;

    class RegisteredUserController extends Controller
    {
        /**
         * Display the registration view.
         *
         * @return Application|Factory|\Illuminate\Contracts\View\View|View
         */
        public function create()
        {
            return view('auth.register');
        }

        /**
         * Handle an incoming registration request.
         *
         * @param RegistrationRequest $request
         * @return RedirectResponse
         *
         */
        public function store(RegistrationRequest $request)
        {
            $user = User::create([
                'name' => $request->input('name'),
                'username' => last(explode(' ', strtolower($request->input('name')))),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);
            $user->assignRole('user');

            event(new Registered($user));

            return redirect(RouteServiceProvider::HOME);
        }
    }

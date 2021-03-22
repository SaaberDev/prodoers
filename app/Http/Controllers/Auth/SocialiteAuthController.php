<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Models\SocialiteAuth;
    use App\Models\User;
    use App\Providers\RouteServiceProvider;
    use Illuminate\Http\Response;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Laravel\Socialite\Facades\Socialite;
    use Symfony\Component\HttpFoundation\RedirectResponse;

    class SocialiteAuthController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @param $provider
         * @return RedirectResponse
         */
        public function index($provider)
        {
            return Socialite::driver($provider)->redirect();
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param $provider
         * @return \Illuminate\Http\RedirectResponse
         */
        public function store($provider)
        {
            $providerAccount = Socialite::driver($provider)->user();
            $socialUser = SocialiteAuth::where('provider_id', '=', $providerAccount->getId())->first();
            $getUser = User::where('email', '=', $providerAccount->getEmail())->first();
            if ($getUser){
                $getUser->socialProviders()->create([
                    'provider_id' => $providerAccount->getId(),
                    'provider' => $provider,
                ]);
                \Auth::login($getUser, true);
//                return redirect()->intended(RouteServiceProvider::HOME);
                return redirect()->intended(RouteServiceProvider::HOME);
            }
            if (!$socialUser){
                $users = User::create([
                    'name' => $providerAccount->getName(),
                    'username' => last(explode(' ', strtolower($providerAccount->getName()))),
                    'email' => $providerAccount->getEmail(),
                    'password' => Hash::make($providerAccount->getEmail()),
                    'email_verified_at' => now(),
                ]);

                $users->socialProviders()->create([
                    'provider_id' => $providerAccount->getId(),
                    'provider' => $provider,
                ]);
                $users->assignRole('user');
                \Auth::login($users, true);
                return redirect()->intended(RouteServiceProvider::HOME);

            } else {
                \Auth::login($getUser, true);
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param int $id
         * @return Response
         */
        public function destroy($id)
        {
            //
        }
    }

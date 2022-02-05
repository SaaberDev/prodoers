<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Auth\LoginRequest;
    use App\Providers\RouteServiceProvider;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Validation\ValidationException;
    use Session;

    class AuthenticatedSessionController extends Controller
    {
        /**
         * Display the login view.
         *
         * @return RedirectResponse
         */
        public function create()
        {
            if (!Session::has('auth_modal')) {
                Session::put('auth_modal', Session::get('site_custom_url.current_service') ?? 'login');
            }

            if (Session::has('site_custom_url')) {
                if (Session::has('site_custom_url.current_auth_url')) {
                    return redirect(Session::get('site_custom_url.current_auth_url'));
                } else {
                    if (Session::has('site_custom_url.current_service')) {
                        return redirect(Session::get('site_custom_url.current_service'));
                    } else {
                        Session::put('site_custom_url.current_auth_url', url()->previous());
                        return back();
                    }
                }
            } else {
                if (Session::has('auth_modal') == 'login') {
                    if (!Session::has('url.intended')) {
                        Session::put('site_custom_url.current_auth_url', url()->previous());
                    }
                    return Session::has('url.intended')
                        ? redirect(RouteServiceProvider::HOME)
                        : back();
                }
                return redirect(RouteServiceProvider::HOME);
            }
        }

        /**
         * Handle an incoming authentication request.
         *
         * @param LoginRequest $request
         * @return RedirectResponse
         * @throws ValidationException
         */
        public function store(LoginRequest $request)
        {
            $request->authenticate();
            $request->session()->regenerate();

            return redirect()->route('login');
        }

        /**
         * Destroy an authenticated session.
         *
         * @param Request $request
         * @return RedirectResponse
         */
        public function destroy(Request $request)
        {
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/');
        }

        /**
         * @param Request $request
         * @return \Illuminate\Http\JsonResponse
         */
        public function detectCurrentAuthUrl(Request $request)
        {
            $status = 'failed';
            $action = $request->get('action') ?? 'No Action Found';
            if ($action === 'sign_in') {
                $status = 'success';
                Session::put('site_custom_url.current_auth_url', url()->previous());
            }
            return response()->json([
                'status' => $status,
                'action' => $action
            ]);
        }
    }

<?php

    namespace App\Http\Middleware;

    use App\Providers\RouteServiceProvider;
    use Closure;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;

    class RedirectIfAuthenticated
    {
        /**
         * Handle an incoming request.
         * User won't be able to see those requests which is under this middleware.
         * (i.e. User do not need to see 'login page' again if they are authenticated).
         *
         * @param Request $request
         * @param Closure $next
         * @param string|null ...$guards
         * @return mixed
         */
        public function handle(Request $request, Closure $next, ...$guards)
        {
            $guards = empty($guards) ? [null] : $guards;

            foreach ($guards as $guard) {
                // Admin dashboard redirect
                if (Auth::guard($guard)->check() && Auth::user()->hasAnyRole(['super_admin', 'admin'])) {
                    return redirect()->intended(RouteServiceProvider::DASHBOARD);
                }
                // Designwala dashboard redirect
                // ....

                // User redirect
                if (Auth::guard($guard)->check() && Auth::user()->hasRole('user')) {
                    if (\Session::has('site_custom_url.current_auth_url')) {
                        return redirect()->intended(session('site_custom_url.current_auth_url'));
                    } else {
                        if (\Session::has('auth_modal')) {
                            return redirect()->intended(session('site_custom_url.intended_order_page'));
                        } else {
                            return redirect()->intended(RouteServiceProvider::HOME);
                        }
                    }
                }
            }

            return $next($request);
        }
    }

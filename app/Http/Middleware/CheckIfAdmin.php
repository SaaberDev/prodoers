<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @param mixed ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $notification = [
            'message' => 'You need Administrative Permission.',
            'alert-type' => 'warning',
        ];

        $user = \Auth::user();
        foreach ($roles as $role){
            if(is_null($user)){
                return redirect()->route('login');
            }
            elseif ($user->hasRole($role)){
                return $next($request);
            }
        }
        return redirect()->route('login')->with($notification);
    }
}

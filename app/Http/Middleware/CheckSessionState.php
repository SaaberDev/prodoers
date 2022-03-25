<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CheckSessionState
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
//        if (!$request->routeIs('guest.order.index')) {
//            \Session::forget('order');
//        } elseif (!$request->routeIs('guest.order.checkCoupon')) {
//            \Session::forget('order');
//        } elseif (!$request->routeIs('guest.order.removeCoupon')) {
//            \Session::forget('order');
//        }
        return $next($request);
    }
}

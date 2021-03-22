<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() ) {
                //Super Admin
                if (Auth::user()->role == 'Super Admin') {
                    return redirect()->intended(RouteServiceProvider::SuperAdmin);
                }
                // Admin
                if (Auth::user()->role == 'Admin') {
                    return redirect()->intended(RouteServiceProvider::Admin);
                }
                // Employee
                if (Auth::user()->role == 'Employee') {
                    return redirect()->intended(RouteServiceProvider::Employee);
                }

                //Customer
                if (Auth::user()->role == 'Customer') {
                    return redirect()->intended(RouteServiceProvider::Customer);
                }
            }
        }

        return $next($request);
    }
}

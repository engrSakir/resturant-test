<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Super Admin
        if (Auth::user()->hasRole('Super Admin')) {
            return redirect()->intended(RouteServiceProvider::SuperAdmin);
        }
        // Admin
        if (Auth::user()->hasRole('Admin')) {
            return redirect()->intended(RouteServiceProvider::Admin);
        }
        // Employee
        if (Auth::user()->hasRole('Employee')) {
            return redirect()->intended(RouteServiceProvider::Employee);
        }

        //Customer
        if (Auth::user()->hasRole('Waiter')) {
            return redirect()->intended(RouteServiceProvider::Waiter);
        }
        //Unknown type
        else {
            session()->flash('message', 'Non-permitted role.');
            session()->flash('type', 'danger');
            Auth::logout();
            return redirect('/login');
        }

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

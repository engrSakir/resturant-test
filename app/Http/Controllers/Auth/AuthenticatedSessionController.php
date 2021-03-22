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

    //for phone
    public function username()
    {
        return 'phone';
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
//        if ($this->guard()->validate($this->credentials($request))) {
//            if (Auth::attempt(['phone' => $request->phone, 'password' => $request->password, 'is_active' => 1])) {
//                session()->flash('message', 'Login success.');
//                session()->flash('type', 'success');
//                //Super Admin
//                if (Auth::user()->role == 'Super Admin') {
//                    return redirect(route('dashboard.index'));
//                }
//                // Admin
//                if (Auth::user()->role == 'Admin') {
//                    return redirect(route('dashboard.index'));
//                }
//                // Employee
//                if (Auth::user()->role == 'Employee') {
//                    return redirect(route('dashboard.index'));
//                }
//
//                //Customer
//                if (Auth::user()->role == 'Customer') {
//                    return redirect(route('home.index'));
//                }
//                //Unknown type
//                else {
//                    session()->flash('message', 'Non-permitted role.');
//                    session()->flash('type', 'danger');
//                    Auth::logout();
//                    return redirect('/login');
//                }
//            } else {
//                $this->incrementLoginAttempts($request);
//                session()->flash('message', ' This account is disabled. Please, contact  us ...');
//                session()->flash('type', 'warning');
//                return redirect()->back();
//            }
//        } else {
//            $this->incrementLoginAttempts($request);
//            session()->flash('message', 'Credentials do not match our database.');
//            session()->flash('type', 'warning');
//            return redirect()->back();
//        }



//        $request->authenticate();
//
//        $request->session()->regenerate();


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


@extends('layouts.frontend.app')
@push('title')
    Login
@endpush
@section('content')
    <div class="main-content bg-color">
        <div class="container">
            <div class="user-account text-center" style="">
                <div class="account-content">
                    <div class="logo">
                        <a href="{{ route('frontend.index') }}"><img height="56px;" width="109px;" class="img-fluid" src="{{ asset(get_static_option('frontend_logo') ?? get_static_option('no_image')) }}" alt="Logo"></a>
                    </div>
                    <h1>Login</h1>
                    <form method="POST" action="{{ route('login') }}" class="tr-form">
                        @csrf
                        <div class="form-group">
                            <input name="phone" value="{{ old('phone') }}" type="text" class="form-control" placeholder="Phone" required="required">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="Password" required="required">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Sign In">
                        <div class="forgot-password">
                            <a href="{{ route('password.request') }}">Forgot Password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('foot')

@endpush

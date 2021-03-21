
@extends('layouts.frontend.app')
@push('title')
    Register
@endpush
@section('content')
    <div class="main-content bg-color">
        <div class="container">
            <div class="user-account text-center" style="background-image: url(images/bg/account-bg.html);">
                <div class="account-content">
                    <div class="logo">
                        <a href="{{ route('frontend.index') }}"><img height="56px;" width="109px;" class="img-fluid" src="{{ asset(get_static_option('frontend_logo') ?? get_static_option('no_image')) }}" alt="Logo"></a>
                    </div>
                    <h1>Create Account</h1>
                    <form method="POST" action="{{ route('register') }}" class="tr-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required="required">
                        </div>
                        <div class="form-group">
                            <input  type="password" name="password"  class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <input  type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required="required">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Register">
                        <div class="already-acount">
                            <a href="{{ route('login') }}">Already have an acount?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('foot')

@endpush

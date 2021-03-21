
@extends('layouts.frontend.app')
@push('title')
    Forgot Password
@endpush
@section('content')
    <div class="main-content bg-color">
        <div class="container">
            <div class="user-account text-center" style="">
                <div class="account-content">
                    <div class="logo">
                        <a href="{{ route('frontend.index') }}"><img height="56px;" width="109px;" class="img-fluid" src="{{ asset(get_static_option('frontend_logo') ?? get_static_option('no_image')) }}" alt="Logo"></a>
                    </div>
                    <h1>Forgot Password</h1>
                    <form  method="POST" action="{{ route('password.email') }}" class="tr-form">
                        @csrf
                        <div class="form-group">
                            <input name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="Email" required="required">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Email Password Reset Link">
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

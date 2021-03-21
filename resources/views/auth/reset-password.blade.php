
@extends('layouts.frontend.app')
@push('title')
    Reset Password
@endpush
@section('content')
    <div class="main-content bg-color">
        <div class="container">
            <div class="user-account text-center" style="">
                <div class="account-content">
                    <div class="logo">
                        <a href="{{ route('frontend.index') }}"><img height="56px;" width="109px;" class="img-fluid" src="{{ asset(get_static_option('frontend_logo') ?? get_static_option('no_image')) }}" alt="Logo"></a>
                    </div>
                    <h1>Reset Password</h1>
                    <form   method="POST" action="{{ route('password.update') }}" class="tr-form">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="form-group">
                            <input name="email"  value="{{ old('email', $request->email) }}" type="email" class="form-control" placeholder="Email" required="required">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <input name="password_confirmation" id="password_confirmation"  type="password" class="form-control" placeholder="Confirm Password" required="required">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Reset Password">
                        <div class="forgot-password">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('foot')

@endpush

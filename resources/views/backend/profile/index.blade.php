@push('title')
    Profile
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Profile</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
{{--                <div class="widgetbar">--}}
{{--                    <button class="btn btn-primary">Add Widget</button>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-12">
                <!-- My Profile Start -->
                <div class="tab-pane" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Profile</h5>
                        </div>
                        <div class="card-body">
                            <div class="profilebox pt-4 text-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img height="112px;" width="100px;" src="{{ asset(auth()->user()->avatar ?? 'assets/backend/images/users/profile.svg') }}" class="img-fluid" alt="profile">
                                        <div class="profilename">
                                            <h5>{{ auth()->user()->name }}</h5>
                                            <p>{{ auth()->user()->email }}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Change Password</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('profilePasswordUpdate') }}" method="POST" >
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="old_password">Old Password</label>
                                        <input type="password" name="old_password" value="{{ old('old_password') }}" class="form-control" id="old_password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <input type="password" value="{{ old('password') }}" name="password" class="form-control" id="password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password_confirmation">Confirmed Password</label>
                                        <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" id="password_confirmation">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary-rgba font-16"><i class="feather icon-save mr-2"></i>Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- My Profile End -->
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End Contentbar -->
@endsection
@push('script')

@endpush

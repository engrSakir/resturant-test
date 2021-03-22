@push('title')
    User create
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">User create</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User create</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <a href="{{ route('user.index') }}" class="btn btn-primary">Back to list</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <div class="card m-b-30 col-12 ">
                <div class="card-header bg-danger">
                    <h5 class="card-title text-white">User create</h5>
                </div>
                <div class="card-body">
                    <form class="row justify-content-center" method="POST" action="{{ route('user.store') }}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-10">
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('name') }}" name="name" type="text" class="form-control"
                                           id="title" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('phone') }}" name="phone" type="text" class="form-control"
                                           id="title" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('email') }}" name="email" type="email" class="form-control"
                                           id="title" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('password') }}" name="password" type="text" class="form-control" id="title" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-4 col-form-label">Status</label>
                                <div class="col-sm-8">
                                    <select name="status" class="select2-single form-control">
                                        <option @if (old('status') == true) selected @endif value="1">Active </option>
                                        <option @if (old('status') == false) selected @endif value="0">Inactive </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="role" class="col-sm-4 col-form-label">Role</label>
                                <div class="col-sm-8">

                                    @foreach($roles as $role)
                                    <label for="role-{{ $role->id }}" class="col-sm-4 col-form-label">{{ $role->name }}</label>
                                        <input name="roles[]" id="role-{{ $role->id }}" type="checkbox" value="{{ $role->name }}">
                                    @endforeach
                                    </div>

                            </div>
                            <div class="form-group row">
                                <label for="branch" class="col-sm-4 col-form-label">Branch</label>
                                <div class="col-sm-8">
                                    <select name="branch" class="select2-single form-control">
                                        @foreach($branches as $branch)
                                            <option @if (old('branch') == $branch->id) selected @endif value="{{ $branch->id }}">{{ $branch->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-sm-4 col-form-label">Avatar</label>
                                <div class="col-sm-8">
                                    <input name="image" type="file" accept="image/*" class="form-control-lg" id="image">
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button id="submit-btn" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End Contentbar -->
@endsection
@push('note')

@endpush

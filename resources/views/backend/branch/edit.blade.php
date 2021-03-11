@push('title')
    Theta - Home
@endpush
@extends('layouts.backend.branch')
@push('style')

@endpush
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">

    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <div class="card m-b-30 col-12 ">
                <div class="card-header bg-danger">
                    <h5 class="card-title">Branch edit</h5>
                </div>
                <div class="card-body">
                    <form class="row" method="post" action="{{ route('branch.update', $branch) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8">
                                    <input value="{{ $branch->name }}" name="name" type="text" class="form-control-lg"
                                        id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input value="{{ $branch->email }}" name="email" type="email" class="form-control-lg"
                                        id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8">
                                    <input value="{{ $branch->phone }}" name="phone" type="text" class="form-control-lg"
                                        id="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-4 col-form-label">Address</label>
                                <div class="col-sm-8">
                                    <input value="{{ $branch->address }}" name="address" type="text" class="form-control-lg"
                                        id="address" placeholder="Address">
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="opening_time" class="col-sm-4 col-form-label">Opening time</label>
                                <div class="col-sm-8">
                                    <input value="{{ $branch->opening_time }}" name="opening_time" type="text"
                                        class="form-control-lg" id="opening_time" placeholder="Opening time">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="serial" class="col-sm-4 col-form-label">Serial</label>
                                <div class="col-sm-8">
                                    <input value="{{ $branch->serial }}" name="serial" type="number" class="form-control-lg"
                                        id="serial" placeholder="Serial">
                                </div>
                            </div>
                            <div class="form-group row">
                                <img class="rounded-circle" width="70px;" height="70px;" src="{{ asset($branch->image ?? get_static_option('no_image')) }}" alt="">
                                <label for="image" class="col-sm-4 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <input name="image" type="file" accept="image/*" class="form-control-lg" id="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <img class="rounded-circle" width="70px;" height="70px;" src="{{ asset($branch->logo ?? get_static_option('no_image')) }}" alt="">
                                <label for="logo" class="col-sm-4 col-form-label">logo</label>
                                <div class="col-sm-8">
                                    <input name="logo" type="file" accept="image/*" class="form-control-lg" id="logo">
                                </div>
                            </div>

                        </div>
                        <div class="col-12 text-center">
                            <button id="submit-btn" class="btn btn-primary">Update</button>
                            <a href="{{ route('branch.index') }}" class="btn btn-warning  float-right mr-5">Back</a>

                        </div>
                    </form>
                 <div class="row mt-5 text-center justify-content-center">
                    <button class="text-white btn btn-danger col-10" onclick="delete_function(this)" value="{{ route('branch.destroy', $branch) }}">Delete</button>
                 </div>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End Contentbar -->
@endsection
@push('script')
    <script>

    </script>



@endpush

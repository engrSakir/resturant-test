@push('title')
    Special product edit
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Special product edit</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Special product edit</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <a href="{{ route('specialProduct.index') }}" class="btn btn-primary">Back to list</a>
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
                    <h5 class="card-title">Special product edit</h5>
                </div>
                <div class="card-body">
                    <form class="row justify-content-center" method="POST" action="{{ route('specialProduct.update', $specialProduct) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="col-lg-8">
                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label">Title</label>
                                <div class="col-sm-8">
                                    <input value="{{ $specialProduct->title }}" name="title" type="text" class="form-control"
                                        id="title" placeholder="Title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-4 col-form-label">Description</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="description" id="description" cols="30"
                                        rows="4">{{ $specialProduct->description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-4 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="image" id="image">
                                        @foreach (get_global_images() as $image)
                                            <option style="background-image:url({{ asset($image->image) }});">
                                                {{ $loop->iteration }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" id="submit-btn" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End Contentbar -->
@endsection
@push('script')

@endpush

@push('note')

@endpush

@push('title')
    Promotion edit
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Promotion edit</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Promotion edit</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <a href="{{ route('websitePromotion.index') }}" class="btn btn-primary">Back to list</a>
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
                    <h5 class="card-title">Promotion edit</h5>
                </div>
                <div class="card-body">
                    <form class="row justify-content-center" method="POST"
                        action="{{ route('websitePromotion.update', $websitePromotion) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="col-lg-8">
                            <div class="form-group row">
                                <label for="highlight" class="col-sm-4 col-form-label">Highlight</label>
                                <div class="col-sm-8">
                                    <input value="{{ $websitePromotion->highlight }}" name="highlight" type="text"
                                        class="form-control" id="highlight" placeholder="Highlight">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label">Title</label>
                                <div class="col-sm-8">
                                    <input value="{{ $websitePromotion->title }}" name="title" type="text"
                                        class="form-control" id="title" placeholder="Title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-4 col-form-label">Description</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="description" id="description" cols="30"
                                        rows="4">{{ $websitePromotion->description }}</textarea>
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

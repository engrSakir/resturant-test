@push('title')
   Banner
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Banner</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Banner</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">

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
                    <h5 class="card-title">Banner</h5>
                </div>
                <div class="card-body">
                    <form class="row" method="POST" action="{{  route('websiteBannerUpdate') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="banner_highlight" class="col-sm-4 col-form-label">Highlight</label>
                                <div class="col-sm-8">
                                    <input class="form-control banner_highlight" name="banner_highlight" id="banner_highlight" value="{{ get_static_option('banner_highlight') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="banner_title" class="col-sm-4 col-form-label">Title</label>
                                <div class="col-sm-8">
                                    <input class="form-control banner_title" name="banner_title" id="banner_title" value="{{ get_static_option('banner_title') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="banner_description" class="col-sm-4 col-form-label">Description</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control-lg banner_description" name="banner_description" id="banner_description" cols="30" rows="10">{{ get_static_option('banner_description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="banner_link" class="col-sm-4 col-form-label">Banner link</label>
                            <div class="col-sm-8">
                                <input class="form-control " name="banner_link" id="banner_link" value="{{ get_static_option('banner_link') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <img class="rounded-circle" height="70px;" width="70px;" src="{{ asset(get_static_option('banner_image') ?? get_static_option('no_image')) }}" alt="">
                                <label for="banner_image" class="col-sm-4 col-form-label">Banner image</label>
                                <div class="col-sm-8">
                                    <input name="banner_image" type="file" accept="image/*" class="form-control-lg" id="banner_image">
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

@push('title')
   Seo static option
@endpush
@extends('layouts.backend.app')
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
                    <h5 class="card-title">Seo create</h5>
                </div>
                <div class="card-body">
                    <form class="row" method="POST" action="{{  route('generalStaticUpdate') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="meta_description" class="col-sm-4 col-form-label">Meta description</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control-lg meta_description" name="meta_description" id="meta_description" cols="30" rows="10">{{ get_static_option('meta_description') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="meta_keywords" class="col-sm-4 col-form-label">Meta keywords</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control-lg meta_keywords" name="meta_keywords" id="meta_keywords" cols="30" rows="10">{{ get_static_option('meta_keywords') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="website_meta_description" class="col-sm-4 col-form-label">Website meta description</label>
                                <div class="col-sm-8">
                                    <input class="form-control website_meta_description" name="website_meta_description" id="website_meta_description" value="{{ get_static_option('website_meta_description') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <img class="rounded-circle" height="70px;" width="70px;" src="{{ asset(get_static_option('fav_icon') ?? get_static_option('no_image')) }}" alt="">
                                <label for="fav_icon" class="col-sm-4 col-form-label">Fav icon</label>
                                <div class="col-sm-8">
                                    <input name="fav_icon" type="file" accept="image/*" class="form-control-lg" id="fav_icon">
                                </div>
                            </div>
                            <div class="form-group row">
                                <img class="rounded-circle" height="70px;" width="70px;" src="{{ asset(get_static_option('frontend_logo') ?? get_static_option('no_image')) }}" alt="">
                                <label for="frontend_logo" class="col-sm-4 col-form-label">Frontend logo</label>
                                <div class="col-sm-8">
                                    <input name="frontend_logo" type="file" accept="image/*" class="form-control-lg" id="frontend_logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <img class="rounded-circle" height="70px;" width="70px;" src="{{ asset(get_static_option('backend_logo') ?? get_static_option('no_image')) }}" alt="">
                                <label for="backend_logo" class="col-sm-4 col-form-label">Backend logo</label>
                                <div class="col-sm-8">
                                    <input name="backend_logo" type="file" accept="image/*" class="form-control-lg" id="backend_logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <img class="rounded-circle" height="70px;" width="70px;" src="{{ asset(get_static_option('website_meta_image') ?? get_static_option('no_image')) }}" alt="">
                                <label for="website_meta_image" class="col-sm-4 col-form-label">Website meta image</label>
                                <div class="col-sm-8">
                                    <input name="website_meta_image" type="file" accept="image/*" class="form-control-lg" id="website_meta_image">
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

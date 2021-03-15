@push('title')
   Social link
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
                    <h5 class="card-title">Social link</h5>
                </div>
                <div class="card-body">
                    <form class="row" method="POST" action="{{  route('sociallinkStaticOptionUpdate') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="company_facebook_link" class="col-sm-4 col-form-label">Company facebook link</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('company_facebook_link') }}" name="company_facebook_link" type="text"
                                        class="form-control" id="company_facebook_link" placeholder="Company facebook link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_twitter_link" class="col-sm-4 col-form-label">Company twitter link</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('company_twitter_link') }}" name="company_twitter_link" type="text"
                                        class="form-control" id="company_twitter_link" placeholder="Company twitter link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_youtube_link" class="col-sm-4 col-form-label">Company youtube link</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('company_youtube_link') }}" name="company_youtube_link" type="text"
                                        class="form-control" id="company_youtube_link" placeholder="Company youtube link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Company instagram link" class="col-sm-4 col-form-label">company_instagram_link</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('company_instagram_link') }}" name="company_instagram_link" type="text"
                                        class="form-control" id="company_instagram_link" placeholder="Company instagram link">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

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

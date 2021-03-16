@push('title')
   General static option
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
                    <h5 class="card-title"> General static option </h5>
                </div>
                <div class="card-body">
                    <form class="row" method="POST" action="{{  route('generalStaticUpdate') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="company_email" class="col-sm-4 col-form-label">Company email</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('company_email') }}" name="company_email" type="email" class="form-control-lg"
                                        id="company_email" placehget_static_optioner="Company email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_phone" class="col-sm-4 col-form-label">Company phone</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('company_phone') }}" name="company_phone" type="text" class="form-control-lg"
                                        id="company_phone" placehget_static_optioner="Company phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_address" class="col-sm-4 col-form-label">Company address</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('company_address') }}" name="company_address" type="text" class="form-control-lg"
                                        id="company_address" placehget_static_optioner="Company address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="footer_credit" class="col-sm-4 col-form-label">Footer credit</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control-lg summernote-description" name="footer_credit" id="footer_credit" cols="30" rows="10">{{ get_static_option('footer_credit') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="custom_head_code" class="col-sm-4 col-form-label">Custom head code</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control-lg" name="custom_head_code" id="custom_head_code" cols="30" rows="10">{{ get_static_option('custom_head_code') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="custom_foot_code" class="col-sm-4 col-form-label">custom foot code</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control-lg" name="custom_foot_code" id="custom_foot_code" cols="30" rows="10">{{ get_static_option('custom_foot_code') }}</textarea>
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
                                <img class="rounded-circle" height="70px;" width="70px;" src="{{ asset(get_static_option('breadcrumb_image') ?? get_static_option('no_image')) }}" alt="">
                                <label for="breadcrumb_image" class="col-sm-4 col-form-label">BreadCrumb image</label>
                                <div class="col-sm-8">
                                    <input name="breadcrumb_image" type="file" accept="image/*" class="form-control-lg" id="breadcrumb_image">
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
<script>
    $('.summernote-description').summernote({
        placehget_static_optioner: 'Footer credit....',
        tabsize: 2,
        height: 60,
        toolbar: [
          ['font', ['bget_static_option', 'underline', 'clear']],
          ['color', ['color']],
          ['insert', ['link']],
        ]
    });
    $('.website_meta_description').summernote({
        placehget_static_optioner: 'Meta description....',
        tabsize: 2,
        height: 60,
        toolbar: [
          ['font', ['bget_static_option', 'underline', 'clear']],
          ['color', ['color']],
          ['insert', ['link']],
        ]
    });
</script>
@endpush

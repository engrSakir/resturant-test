@push('title')
   Special product
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
                    <h5 class="card-title">Special product</h5>
                </div>
                <div class="card-body">
                    <form class="row justify-content-center" method="POST" action="{{  route('specialProductStaticOptionUpdate') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-8">
                            <div class="form-group row">
                                <label for="special_product_highlight" class="col-sm-4 col-form-label">Highlight</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('special_product_highlight') }}" name="special_product_highlight" type="text"
                                        class="form-control" id="special_product_highlight" placeholder="Highlight">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="special_product_title" class="col-sm-4 col-form-label">Title</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('special_product_title') }}" name="special_product_title" type="text"
                                        class="form-control" id="special_product_title" placeholder="Title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Product_highlight" class="col-sm-4 col-form-label">Product highlight</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('product_highlight') }}" name="product_highlight" type="text"
                                        class="form-control" id="product_highlight" placeholder="Product highlight">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Product_title" class="col-sm-4 col-form-label">Product title</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('product_title') }}" name="product_title" type="text"
                                        class="form-control" id="product_title" placeholder="Product title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <img class="rounded-circle" height="70px;" width="70px;" src="{{ asset(get_static_option('special_product_image') ?? get_static_option('no_image')) }}" alt="">
                                <label for="special_product_image" class="col-sm-4 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <input name="special_product_image" type="file" accept="image/*" class="form-control-lg" id="special_product_image">
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

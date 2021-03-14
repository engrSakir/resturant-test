@push('title')
    Pos
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('content')
<!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Pos</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pos</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    {{--  <a href="{{ route('productCategory.index') }}" class="btn btn-primary">Back to list</a>  --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-5 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Category</h5>
                </div>
                <div class="card-body">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @foreach ($product_categories as $product_category)
                            <a class="nav-link mb-2 @if($loop->first) active @endif" id="v-pills-product-tab-{{ $product_category->id }}" data-toggle="pill" href="#v-pills-product-{{ $product_category->id }}" role="tab" aria-controls="v-pills-product" aria-selected="true"><i class="feather icon-grid mr-2"></i>{{ $product_category->name }}</a>
                        @endforeach
                        <a class="nav-link" id="v-pills-logout-tab" data-toggle="pill" href="#v-pills-logout" role="tab" aria-controls="v-pills-logout" aria-selected="false"><i class="feather icon-log-out mr-2"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-7 col-xl-9">
            <div class="tab-content" id="v-pills-tabContent">
                @foreach($product_categories as $product_category)
                <!-- Product Start -->
                <div class="tab-pane fade show  @if($loop->first) active @endif" id="v-pills-product-{{ $product_category->id }}" role="tabpanel" aria-labelledby="v-pills-product-tab-{{ $product_category->id }}">
                    <div class="row">
                        <!-- Start col -->
                        @foreach ($product_category->products as $product)
                        <div class="col-md-6 col-lg-6 col-xl-3 text-center">
                            <div class="card text-center">
                                <img class="card-img-top" src="{{ asset($product->image ?? 'assets/backend/images/ui-cards/ui-cards-1.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title font-18">{{ $product->name }}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End col -->
                    </div>
                </div>
                <!-- Product End -->
                @endforeach

                <div class="tab-pane fade" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-logout-tab">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Logout</h5>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-xl-4">
                                    <div class="logout-content text-center my-5">
                                        <img src="assets/backend/images/ecommerce/logout.svg" class="img-fluid mb-5" alt="logout">
                                        <h2 class="text-success">Logout ?</h2>
                                        <p class="my-4">Are you sure to want to Log out? You will miss your instant checkout deal.</p>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-danger font-16"><i class="feather icon-check mr-2"></i>Yes, I am sure</button>
                                            <button type="button" class="btn btn-success-rgba font-16"><i class="feather icon-x mr-2"></i>Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- My Logout End -->
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@push('script')

@endpush

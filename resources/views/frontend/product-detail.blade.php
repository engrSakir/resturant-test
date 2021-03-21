@extends('layouts.frontend.app')
@push('title')
    {{ $products->first()->name }}
@endpush
@section('content')
    <div class="tr-breadcrumb text-center bg-image" style="background-image: url({{ asset( get_static_option('breadcrumb_image') ?? 'assets/frontend/images/bg/breadcrumb-bg.jpg') }});">
        <div class="container">
            <div class="page-title">
                <h1>{{ get_static_option('blog_highlight') }}</h1>
                <h2> {{ $products->first()->name }}</h2>

            </div>
        </div>
    </div>
    <div class="main-content bg-color">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Choose your branch</h1>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-4">
                                <div class="product">
                                    <a href="{{ route('frontend.productCheckout',\Illuminate\Support\Facades\Crypt::encrypt($product->id)) }}" >
                                            <span class="product-image">
                                                <img src="{{ asset('assets/frontend/images/product/list1.png') }}" alt="Image" class="img-fluid">
                                            </span>
                                        <span class="product-title">{{ $product->name }}</span>
                                        <br>
                                        <span class="price">{{ $product->productCategory->branch->name }}</span>
                                    </a>
                                    <div class="product-icon">
                                        <ul class="global-list">
                                            <li></li>
                                            <li ><a href="{{ route('frontend.productCheckout',\Illuminate\Support\Facades\Crypt::encrypt($product->id)) }}" ><span class="icon icon-shopping-cart"></span></a></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('foot')

@endpush

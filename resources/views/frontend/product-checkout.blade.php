@extends('layouts.frontend.app')
@push('title')
    {{ $product->name }}
@endpush
@section('content')
    <div class="tr-breadcrumb text-center bg-image" style="background-image: url({{ asset( get_static_option('breadcrumb_image') ?? 'assets/frontend/images/bg/breadcrumb-bg.jpg') }});">
        <div class="container">
            <div class="page-title">
                <h1>{{ get_static_option('blog_highlight') }}</h1>
                <h2> {{ $product->name }}</h2>

            </div>
        </div>
    </div>
    <div class="main-content bg-color">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="details-content">
                        <div class="product-details section-bg-white">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div id="details-slider" class="details-slider carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item item active">
                                                <img class="img-fluid" src="{{ asset( $product->image ?? get_static_option('no_image') ) }}" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-details-info">
                                        <span class="product-title"> {{ $product->name }}</span>
                                        @if(!$product->variationCategories)
                                        <span class="price"> ৳  {{ $product->price }}</span>
                                        @endif
                                        <div class="mt-4">
                                           {!! get_static_option('product_checkout_description') !!}
                                        </div>
                                        <div class="quantity-price">
                                            <span>Quantity</span>
                                            <div class="quantity" data-trigger="spinner">
                                                <a href="#" data-spin="down"><i class="fa fa-minus"></i></a>
                                                <input type="text" name="quantity" value="1" title="quantity"
                                                       class="input-text">
                                                <a href="#" data-spin="up"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                        @if($product->variationCategories->count() > 0)
                                        <div class="quantity-price">
                                            <span>Variation</span>
                                            <div class="quantity" data-trigger="spinner">
                                                <select id="variation" class="form-control form-control-lg">
                                                    <option disabled selected>{{ __('Variation') }}</option>
                                                    @foreach($product->variationCategories as $variationCategory)
                                                        @if($variationCategory->variations->count() > 0)
                                                        <optgroup label="{{ $variationCategory->name }}">
                                                            @foreach($variationCategory->variations as $variation)
                                                                <option value="{{ $variation->id }}">{{$variation->name }} &nbsp; Price: {{$variation->price }} </option>
                                                            @endforeach
                                                        </optgroup>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="add-to-cart">
                                            <a class="btn btn-primary" href="shopping-cart.html">Add to Cart</a>
                                            <span><a href="#"><i class="fa fa-heart-o"
                                                                 aria-hidden="true"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('foot')

@endpush

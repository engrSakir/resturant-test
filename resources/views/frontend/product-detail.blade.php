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
                    <div class="details-content">
                        <div class="product-details section-bg-white">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div id="details-slider" class="details-slider carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item item active">
                                                <img class="img-fluid" src="{{ asset( $products->first()->image ?? get_static_option('no_image') ) }}" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-details-info">
                                        <span class="product-title"> {{ $products->first()->name }}</span>
                                        <span class="price"> ৳  {{ $products->first()->price }}</span>
                                        <p>100% Organic Food from Farm Tomoko</p>
                                        <ul class="global-list">
                                            <li>Food from Farm Hong Quat Packging</li>
                                            <li>100% Organic Food</li>
                                            <li>100% Fresh Not Chemicals</li>
                                        </ul>
                                        <div class="quantity-price">
                                            <span>Quality</span>
                                            <div class="quantity" data-trigger="spinner">
                                                <a href="#" data-spin="down"><i class="fa fa-minus"></i></a>
                                                <input type="text" name="quantity" value="1" title="quantity"
                                                       class="input-text">
                                                <a href="#" data-spin="up"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <a class="btn btn-primary" href="shopping-cart.html">Add to Cart</a>
                                            <span><a href="#"><i class="fa fa-heart-o"
                                                                 aria-hidden="true"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-description section-bg-white">
                            <ul class="nav nav-tabs description-tabs" role="tablist">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#payment" aria-controls="payment" role="tab" data-toggle="tab" aria-expanded="true">Payment</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#delivery" aria-controls="delivery" role="tab" data-toggle="tab"
                                                                            aria-expanded="true">Delivery</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="payment">
                                    <div class="payment">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis.</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="delivery">
                                    <div class="delivery">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tr-products popup-one related-products">
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
        </div>
    </div>
@endsection
@push('foot')

@endpush

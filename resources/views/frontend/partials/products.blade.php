<div class="tr-products popup-one section-padding">
    <div class="container">
        <div class="section-title">
            <h1>{{ get_static_option('product_highlight') }}</h1>
            <h2>{{ get_static_option('product_title') }}</h2>
        </div>
        <div class="product-slider">
            <div class="products">
                <div class="row">
                    @foreach ($products->groupBy('name') as $product1)
                        @foreach ($product1 as $product)
                            @if ($loop->first)
                                <div class="col-md-6 col-lg-3">
                                    <div class="product">
                                        <a href="shop-details.html">
                                            <span class="product-image">
                                                <img src="{{ asset($product->image ?? get_static_option('no_image')) }}"
                                                    alt="Image" class="img-fluid">
                                            </span>
                                            <span class="product-title">{{ $product->name }}</span>
                                        </a>
                                        <div class="product-icon text-center">
                                            <ul class="global-list">
                                                <li></li>
                                                <li><a href="#"><span class="icon icon-shopping-cart"></span></a></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tr-farmfood farmfood-one bg-image" style="background-image: url(images/bg/farmfood.jpg);">
    <div class="container">
        <div class="section-title">
            <h1>Hot deal of the day</h1>
            <h2>We are organic <strong>farmfood</strong></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="farmfood farmfood-left text-right">
                    <ul class="global-list">
                        @foreach ($special_products as $special_product)
                            @if ($loop->even)
                                <li class="media">
                                    <div class="food-info media-body">
                                        <h3>{{ $special_product->title }}</h3>
                                        <p>{{ $special_product->description }}</p>
                                    </div>
                                    <div class="icon ml-4">
                                        {{-- <span class="icon icon-steak"></span> --}}
                                        <img src="{{ asset('uploads/images/food.png') }}" alt="">
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4 order-md-4">
                <div class="farmfood farmfood-right">
                    <ul class="global-list">
                        @foreach ($special_products as $special_product)
                            @if ($loop->odd){
                                <li class="media">
                                    <div class="icon ml-4">
                                        {{-- <span class="icon icon-steak"></span> --}}
                                        <img src="{{ asset('uploads/images/food.png') }}" alt="">
                                    </div>
                                    <div class="food-info media-body">
                                        <h3>{{ $special_product->title }}</h3>
                                        <p>{{ $special_product->description }}</p>
                                    </div>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-md-4 pull-md-4">
                <div class="farmfood-image text-center">
                    <img src="{{ asset('assets/frontend/images/others/farmfood.png') }}" alt="Icon" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

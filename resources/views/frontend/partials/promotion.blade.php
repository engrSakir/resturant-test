<div class="tr-promotion">
    <div class="container">
        <div class="row">
            @foreach ($promotions as $promotion)
                <div class="col-md-4 mb-5">
                    <div class="promotion" style="background-image: url({{ asset($promotion->image ?? 'uploads/images/food.png') }});">
                        <div class="promotion-info">
                            <h1>{{ $promotion->highlight }} <span>{{ $promotion->title }} </span></h1>
                            <p>{{ $promotion->description }} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

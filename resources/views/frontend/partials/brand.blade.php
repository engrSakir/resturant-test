<div class="tr-brand">
    <div class="container">
        <div class="brand-slider">
            @foreach ($partners as $partner)
                <div class="brand">
                    <img width="180px;" height="80px;" src="{{ asset($partner->image ?? get_static_option('no_image')) }}" alt="Image"
                        class="img-fluid">
                </div>
            @endforeach
        </div>
    </div>
</div>

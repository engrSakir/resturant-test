<div id="home-carousel" class="carousel slide home-slider tr-banner" data-ride="carousel"
    style="background-image: url({{ asset(get_static_option('banner_image') ?? 'images/bg/slider1.jpg') }});">
    <div class="carousel-inner text-center" role="listbox">
        <div class="carousel-item item active">
            <div class="item-middle">
                <div class="middle-content">
                    <div class="container">
                        <div class="banner-info">
                            <h1 data-animation="animated fadeInDown">{{ get_static_option('banner_highlight') }}</h1>
                            <h2 data-animation="animated fadeInDown">{{ get_static_option('banner_title') }}</h2>
                            <p data-animation="animated fadeInDown">{{ get_static_option('banner_description') }}
                            </p>
                            <a href="#" data-animation="animated fadeInDown" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

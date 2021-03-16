<div class="tr-cta section-padding section-bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="cta-image">
                    <img src="{{ asset(get_static_option('offer_image') ?? get_static_option('no_image') ) }}" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="cta-info">
                    <h1>{{ get_static_option('offer_highlight') }}</h1>
                    <h2>{{ get_static_option('offer_percentage') }}</h2>
                    <h3>{{ get_static_option('offer_description') }}</h3>
                    <ul class="countdown global-list">
                        <li>
                            <span class="days">00</span>
                            <p>days</p>
                        </li>
                        <li>
                            <span class="hours">00</span>
                            <p>hours</p>
                        </li>
                        <li>
                            <span class="minutes">00</span>
                            <p>minutes</p>
                        </li>
                        <li>
                            <span class="seconds">00</span>
                            <p>seconds</p>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary"><span><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                        </span>Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

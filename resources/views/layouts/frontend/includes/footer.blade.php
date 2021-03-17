<div class="tr-footer section-bg-white">
    <div class="footer-top section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{ route('frontend.index') }}"><img   width="109px;" height="56px;"
                                src="{{ asset( get_static_option('frontend_logo') ?? get_static_option('no_image')) }}"  alt="Logo" class="img-fluid"></a>
                        </div>
                        <p>  {{ get_static_option('footer_credit') }}</p>
                        <div class="footer-social">
                            <ul class="global-list">
                                <li><a target="_blank" href="{{ get_static_option('company_facebook_link') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="{{ get_static_option('company_twitter_link') }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="{{ get_static_option('company_youtube_link') }}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a  target="_blank" href="{{ get_static_option('company_instagram_link') }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h3>Quick Link</h3>
                        <ul class="global-list">
                            <li><a href="{{ route('frontend.index') }}">Home</a></li>
                            <li><a href="{{ route('frontend.images') }}">Gallery</a></li>
                            <li><a href="{{ route('frontend.blogs') }}">Blogs</a></li>
                            <li><a href="{{ route('frontend.contactUs') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-lg-3">
                    <div class="footer-widget">
                        <h3>About</h3>
                        <ul class="global-list">
                            @foreach(custom_pages()->where('status', true) as $page)
                                <li><a href="{{ route('frontend.customPage', $page->slug) }}">{{ $page->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="footer-widget">
                        <h3>{{ get_static_option('subscribe_title') }}</h3>
                        <p>{{ get_static_option('subscribe_description') }}</p>
                        <form>
                            <div class="form-group">
                                <input id="subscribe-email" type="email" class="form-control" required="required"
                                    placeholder="Enter Your Email Address">
                            </div>
                            <div class="form-group">
                                <input type="button" class="btn btn-primary subscribe-now-btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom clearfix">
        <div class="container">
            <div class="float-right">
                <div class="float-left">
                    <ul class="payment-card global-list">
                        <li><img src="{{ asset('assets/frontend/images/others/card1.png') }}" alt="Payment Card" class="img-fluid"></li>
                        <li><img src="{{ asset('assets/frontend/images/others/card2.png') }}" alt="Payment Card" class="img-fluid"></li>
                        <li><img src="{{ asset('assets/frontend/images/others/card3.png') }}" alt="Payment Card" class="img-fluid"></li>
                        <li><img src="{{ asset('assets/frontend/images/others/card4.png') }}" alt="Payment Card" class="img-fluid"></li>
                    </ul>
                </div>
            </div>
            <div class="float-left">
                <span>Copyright &copy; {{ date('Y') }} <a href="{{ route('frontend.index') }}"> {{ config('app.name') }} </a> - All Rights Reserved.</span>
            </div>
        </div>
    </div>
</div>

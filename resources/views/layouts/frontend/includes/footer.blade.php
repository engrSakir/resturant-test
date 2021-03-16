<div class="tr-footer section-bg-white">
    <div class="footer-top section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index-2.html"><img   width="109px;" height="56px;"
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
                            <li><a href="{{ route('frontend.contactUs') }}">Contact us</a></li>
                            <li><a href="#">Consultant</a></li>
                            <li><a href="#">Help & FAQs</a></li>
                            <li><a href="#">Locations & Store</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-lg-3">
                    <div class="footer-widget">
                        <h3>Product</h3>
                        <ul class="global-list">
                            <li><a href="#">Vegetable</a></li>
                            <li><a href="#">Organic Juice</a></li>
                            <li><a href="#">Fruit</a></li>
                            <li><a href="#">Harbal Drug</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">


                    <div class="footer-widget">
                        <h3>Get Newsletter</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        <form method="post" action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" required="required"
                                    placeholder="Enter Your Email Address">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary">
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

<div class="tr-topbar">
    <div class="container">
        <div class="topbar-content">
            <div class="float-left">
                <span>
                    <span class="icon icon-phone-call"></span>
                    Call us
                    <a href="tel:{{ get_static_option('company_phone') }}"><span class="number">{{ get_static_option('company_phone') }}</span></a>
                </span>
            </div>
            <div class="float-right">
                <div class="user-option">
                    <span class="icon icon-avatar"></span>
                    <a href="{{ route('login') }}">Login</a>
                {{--  / <a href="{{ route('register') }}">Register</a>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tr-menu">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-lg-none">
                <a class="navbar-brand" href="{{ route('frontend.index') }}"><img class="img-fluid"  width="109px;" height="56px;"
                        src="{{ asset( get_static_option('frontend_logo') ?? get_static_option('no_image')) }}" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav tr-d-md-none">
                    <li class="nav-item tr-dropdown active">
                        <a class="nav-link" href="{{ route('frontend.index') }}">Home</a>
                    </li>
                    <li class="nav-item tr-dropdown">
                        <a class="nav-link" href="javascript:0">About</a>
                        <ul class="tr-dropdown-menu">
                            @foreach(custom_pages()->where('status', true) as $page)
                                <li class="nav-item"><a class="nav-link" href="{{ route('frontend.customPage', $page->slug) }}">{{ $page->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('frontend.images') }}">Gallery</a></li>
                    <li class="tr-middle-logo"><a class="navbar-brand" href="{{ route('frontend.index') }}"><img class="img-fluid"  width="109px;" height="56px;"
                                src="{{ asset( get_static_option('frontend_logo') ?? get_static_option('no_image')) }}" alt="Logo"></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('frontend.blogs') }}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('frontend.faqs') }}">Faqs</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('frontend.contactUs') }}">Contact Us</a></li>
                </ul>
                <ul class="navbar-nav d-lg-none">
                    <li class="nav-item tr-dropdown active">
                        <a class="nav-link" href="#">Home</a>
                        <ul class="tr-dropdown-menu dropdown-left">
                            <li class="nav-item active"><a class="nav-link" href="index-2.html">Home V-1</a></li>
                            <li class="nav-item"><a class="nav-link" href="index1.html">Home V-2</a></li>
                            <li class="nav-item"><a class="nav-link" href="index2.html">Home V-3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="shop-list.html">Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing Table</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                    <li class="nav-item tr-dropdown">
                        <a class="nav-link" href="#">Pages</a>
                        <ul class="tr-dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="shop-details.html">Shop Details</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                            <li class="nav-item"><a class="nav-link" href="signup.html">Signup</a></li>
                            <li class="nav-item"><a class="nav-link" href="signin.html">Signin</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

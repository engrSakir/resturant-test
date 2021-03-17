<script src="{{ asset('assets/frontend/js/jquery.min.js') }}" type="dc1ddb0669bcf06fb3cd6f4a-text/javascript">
</script>
<script src="{{ asset('assets/frontend/js/tether.min.js') }}" type="dc1ddb0669bcf06fb3cd6f4a-text/javascript">
</script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}" type="dc1ddb0669bcf06fb3cd6f4a-text/javascript">
</script>
<script src="{{ asset('assets/frontend/js/slick.min.js') }}" type="dc1ddb0669bcf06fb3cd6f4a-text/javascript"></script>
<script src="{{ asset('assets/frontend/js/countdown.js') }}" type="dc1ddb0669bcf06fb3cd6f4a-text/javascript"></script>
<script src="{{ asset('assets/frontend/js/magnific-popup.min.js') }}" type="dc1ddb0669bcf06fb3cd6f4a-text/javascript">
</script>
<script src="{{ asset('assets/frontend/js/jquery-ui-min.js') }}" type="dc1ddb0669bcf06fb3cd6f4a-text/javascript">
</script>
<script src="{{ asset('assets/frontend/js/jquery.spinner.min.js') }}" type="dc1ddb0669bcf06fb3cd6f4a-text/javascript">
</script>
<script src="{{ asset('assets/frontend/js/carousel-touch.js') }}" type="dc1ddb0669bcf06fb3cd6f4a-text/javascript">
</script>
<script src="{{ asset('assets/frontend/js/switcher.js') }}" type="dc1ddb0669bcf06fb3cd6f4a-text/javascript"></script>
<script src="{{ asset('assets/helper.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('sweetalert::alert')
@stack('foot')

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : {{ get_static_option('fb_auto_extend') }},
            version          : 'v10.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/bn_IN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution="install_email"
     page_id="{{ get_static_option('fb_page_id') }}"
     theme_color="{{ get_static_option('fb_color_theme') }}">
</div>

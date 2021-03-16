<!-- Start Topbar Mobile -->
<div class="topbar-mobile">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="mobile-logobar">
                <a href="{{ route('pos') }}" class="mobile-logo"><img width="120px;" height="30px;" src="{{ asset(get_static_option('backend_logo') ?? get_static_option('no_image')) }}"
                        class="img-fluid" alt="logo"></a>
            </div>
            <div class="mobile-togglebar">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <div class="topbar-toggle-icon">
                            <a class="topbar-toggle-hamburger" href="javascript:void();">
                                <img src="assets/backend/images/svg-icon/horizontal.svg"
                                    class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                <img src="assets/backend/images/svg-icon/verticle.svg"
                                    class="img-fluid menu-hamburger-vertical" alt="verticle">
                            </a>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="menubar">
                            <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void();"
                                data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                <img src="assets/backend/images/svg-icon/collapse.svg"
                                    class="img-fluid menu-hamburger-collapse" alt="collapse">
                                <img src="assets/backend/images/svg-icon/close.svg"
                                    class="img-fluid menu-hamburger-close" alt="close">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

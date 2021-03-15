<!-- Start Navigationbar -->
<div class="navigationbar">
    <!-- Start container-fluid -->
    <div class="container-fluid">
        <!-- Start Horizontal Nav -->
        <nav class="horizontal-nav mobile-navbar fixed-navbar">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="horizontal-menu">
                    <li class="scroll dropdown">
                        <a href="{{ route('pos') }}"><img src="assets/backend/images/svg-icon/dashboard.svg"
                                class="img-fluid" alt="dashboard"><span>Pos</span></a>
                    </li>
                    <li class="scroll dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img
                                src="assets/backend/images/svg-icon/dashboard.svg" class="img-fluid"
                                alt="dashboard"><span>Dashboard</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('getGeneralStaticForm') }}"><i class="mdi mdi-circle"></i>General
                                    static option</a></li>
                            <li><a href="{{ route('seoStaticOptionForm') }}"><i class="mdi mdi-circle"></i>Seo static
                                    option</a></li>
                            <li><a href="{{ route('socialLinkStaticForm') }}"><i class="mdi mdi-circle"></i>Social
                                    link</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img
                                src="assets/backend/images/svg-icon/layouts.svg" class="img-fluid"
                                alt="layouts"><span>Product</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('product.create') }}"><i class="mdi mdi-circle"></i>Product
                                    create</a></li>
                            <li><a href="{{ route('product.index') }}"><i class="mdi mdi-circle"></i>Product list</a>
                            </li>
                            <li><a href="{{ route('productCategory.index') }}"><i class="mdi mdi-circle"></i>Product
                                    category list</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img
                                src="assets/backend/images/svg-icon/layouts.svg" class="img-fluid"
                                alt="layouts"><span>Variation</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('variation.index') }}"><i class="mdi mdi-circle"></i>Variation
                                    list</a></li>
                            <li><a href="{{ route('variationCategory.index') }}"><i
                                        class="mdi mdi-circle"></i>Variation category list</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img
                                src="assets/backend/images/svg-icon/apps.svg" class="img-fluid"
                                alt="apps"><span>Website</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('websiteBannerForm') }}"><i class="mdi mdi-circle"></i>Banner</a></li>
                            <li><a href="{{ route('websiteMessage.index') }}"><i class="mdi mdi-circle"></i>Messages</a></li>
                            <li><a href="{{ route('websitePromotion.index') }}"><i class="mdi mdi-circle"></i>Promption list</a></li>
                            <li><a href="{{ route('websitePromotion.create') }}"><i class="mdi mdi-circle"></i>Promption create</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img
                                src="assets/backend/images/svg-icon/apps.svg" class="img-fluid"
                                alt="apps"><span>Apps</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('template/apps-calender') }}"><i
                                        class="mdi mdi-circle"></i>Calender</a>
                            </li>
                            <li><a href="{{ url('template/apps-chat') }}"><i class="mdi mdi-circle"></i>Chat</a></li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="mdi mdi-circle"></i>Email</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('template/apps-email-inbox') }}"><i
                                                class="mdi mdi-circle"></i>Email Inbox</a></li>
                                    <li><a href="{{ url('template/apps-email-open') }}"><i
                                                class="mdi mdi-circle"></i>Email Open</a></li>
                                    <li><a href="{{ url('template/apps-email-compose') }}"><i
                                                class="mdi mdi-circle"></i>Email Compose</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('template/apps-kanban-board') }}"><i
                                        class="mdi mdi-circle"></i>Kanban
                                    Board</a></li>
                            <li><a href="{{ url('template/apps-onboarding-screens') }}"><i
                                        class="mdi mdi-circle"></i>Onboarding Screens</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img
                                src="assets/backend/images/svg-icon/components.svg" class="img-fluid"
                                alt="components"><span>Components</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="mdi mdi-circle"></i><span>Forms</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('template/form-inputs') }}"><i
                                                class="mdi mdi-circle"></i>Form
                                            Inputs</a></li>
                                    <li><a href="{{ url('template/form-groups') }}"><i
                                                class="mdi mdi-circle"></i>Form
                                            Groups</a></li>
                                    <li><a href="{{ url('template/form-layouts') }}"><i
                                                class="mdi mdi-circle"></i>Form
                                            Layouts</a></li>
                                    <li><a href="{{ url('template/form-colorpickers') }}"><i
                                                class="mdi mdi-circle"></i>Form Color Pickers</a></li>
                                    <li><a href="{{ url('template/form-datepickers') }}"><i
                                                class="mdi mdi-circle"></i>Form Date Pickers</a></li>
                                    <li><a href="{{ url('template/form-editors') }}"><i
                                                class="mdi mdi-circle"></i>Form
                                            Editors</a></li>
                                    <li><a href="{{ url('template/form-file-uploads') }}"><i
                                                class="mdi mdi-circle"></i>Form File Uploads</a></li>
                                    <li><a href="{{ url('template/form-input-mask') }}"><i
                                                class="mdi mdi-circle"></i>Form Input Mask</a></li>
                                    <li><a href="{{ url('template/form-maxlength') }}"><i
                                                class="mdi mdi-circle"></i>Form MaxLength</a></li>
                                    <li><a href="{{ url('template/form-selects') }}"><i
                                                class="mdi mdi-circle"></i>Form
                                            Selects</a></li>
                                    <li><a href="{{ url('template/form-touchspin') }}"><i
                                                class="mdi mdi-circle"></i>Form Touchspin</a></li>
                                    <li><a href="{{ url('template/form-validations') }}"><i
                                                class="mdi mdi-circle"></i>Form Validations</a></li>
                                    <li><a href="{{ url('template/form-wizards') }}"><i
                                                class="mdi mdi-circle"></i>Form
                                            Wizards</a></li>
                                    <li><a href="{{ url('template/form-xeditable') }}"><i
                                                class="mdi mdi-circle"></i>Form X-editable</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="mdi mdi-circle"></i>Icons</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('template/icon-theta') }}"><i
                                                class="mdi mdi-circle"></i>Theta
                                            Icons</a></li>
                                    <li><a href="{{ url('template/icon-dripicons') }}"><i
                                                class="mdi mdi-circle"></i>Dripicons</a></li>
                                    <li><a href="{{ url('template/icon-feather') }}"><i
                                                class="mdi mdi-circle"></i>Feather</a></li>
                                    <li><a href="{{ url('template/icon-flag') }}"><i
                                                class="mdi mdi-circle"></i>Flag</a></li>
                                    <li><a href="{{ url('template/icon-font-awesome') }}"><i
                                                class="mdi mdi-circle"></i>Font Awesome</a></li>
                                    <li><a href="{{ url('template/icon-ionicons') }}"><i
                                                class="mdi mdi-circle"></i>Ion
                                            Icons</a></li>
                                    <li><a href="{{ url('template/icon-line-awesome') }}"><i
                                                class="mdi mdi-circle"></i>Line Awesome</a></li>
                                    <li><a href="{{ url('template/icon-material-design') }}"><i
                                                class="mdi mdi-circle"></i>Material Design</a></li>
                                    <li><a href="{{ url('template/icon-simple-line') }}"><i
                                                class="mdi mdi-circle"></i>Simple Line Icons</a></li>
                                    <li><a href="{{ url('template/icon-socicon') }}"><i
                                                class="mdi mdi-circle"></i>Socicon</a></li>
                                    <li><a href="{{ url('template/icon-themify') }}"><i
                                                class="mdi mdi-circle"></i>Themify</a></li>
                                    <li><a href="{{ url('template/icon-typicons') }}"><i
                                                class="mdi mdi-circle"></i>Typicons</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="mdi mdi-circle"></i>Charts</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('template/chart-c3') }}"><i class="mdi mdi-circle"></i>C3
                                            Chart</a></li>
                                    <li><a href="{{ url('template/chart-chartistjs') }}"><i
                                                class="mdi mdi-circle"></i>Chartist Chart</a></li>
                                    <li><a href="{{ url('template/chart-chartjs') }}"><i
                                                class="mdi mdi-circle"></i>Chartjs Chart</a></li>
                                    <li><a href="{{ url('template/chart-flot') }}"><i class="mdi mdi-circle"></i>Flot
                                            Chart</a></li>
                                    <li><a href="{{ url('template/chart-knob') }}"><i class="mdi mdi-circle"></i>Knob
                                            Chart</a></li>
                                    <li><a href="{{ url('template/chart-morris') }}"><i
                                                class="mdi mdi-circle"></i>Morris Chart</a></li>
                                    <li><a href="{{ url('template/chart-piety') }}"><i
                                                class="mdi mdi-circle"></i>Piety
                                            Chart</a></li>
                                    <li><a href="{{ url('template/chart-sparkline') }}"><i
                                                class="mdi mdi-circle"></i>Sparkline Chart</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="mdi mdi-circle"></i>Tables</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('template/table-bootstrap') }}"><i
                                                class="mdi mdi-circle"></i>Bootstrap Table</a></li>
                                    <li><a href="{{ url('template/table-datatable') }}"><i
                                                class="mdi mdi-circle"></i>Data Table</a></li>
                                    <li><a href="{{ url('template/table-editable') }}"><i
                                                class="mdi mdi-circle"></i>Editable Table</a></li>
                                    <li><a href="{{ url('template/table-footable') }}"><i
                                                class="mdi mdi-circle"></i>Foo Table</a></li>
                                    <li><a href="{{ url('template/table-rwdtable') }}"><i
                                                class="mdi mdi-circle"></i>RWD Table</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="mdi mdi-circle"></i>Maps</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('template/map-google') }}"><i
                                                class="mdi mdi-circle"></i>Google
                                            Map</a></li>
                                    <li><a href="{{ url('template/map-vector') }}"><i
                                                class="mdi mdi-circle"></i>Vector
                                            Map</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img
                                src="assets/backend/images/svg-icon/pages.svg" class="img-fluid"
                                alt="pages"><span>Pages</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="mdi mdi-circle"></i>eCommerce</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('template/ecommerce-product-list') }}"><i
                                                class="mdi mdi-circle"></i>Product List</a></li>
                                    <li><a href="{{ url('template/ecommerce-product-detail') }}"><i
                                                class="mdi mdi-circle"></i>Product Detail</a></li>
                                    <li><a href="{{ url('template/ecommerce-order-list') }}"><i
                                                class="mdi mdi-circle"></i>Order List</a></li>
                                    <li><a href="{{ url('template/ecommerce-order-detail') }}"><i
                                                class="mdi mdi-circle"></i>Order Detail</a></li>
                                    <li><a href="{{ url('template/ecommerce-shop') }}"><i
                                                class="mdi mdi-circle"></i>Shop</a></li>
                                    <li><a href="{{ url('template/ecommerce-single-product') }}"><i
                                                class="mdi mdi-circle"></i>Single Product</a></li>
                                    <li><a href="{{ url('template/ecommerce-cart') }}"><i
                                                class="mdi mdi-circle"></i>Cart</a></li>
                                    <li><a href="{{ url('template/ecommerce-checkout') }}"><i
                                                class="mdi mdi-circle"></i>Checkout</a></li>
                                    <li><a href="{{ url('template/ecommerce-thankyou') }}"><i
                                                class="mdi mdi-circle"></i>Thank You</a></li>
                                    <li><a href="{{ url('template/ecommerce-myaccount') }}"><i
                                                class="mdi mdi-circle"></i>My Account</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="mdi mdi-circle"></i>Basic Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('template/page-starter') }}"><i
                                                class="mdi mdi-circle"></i>Starter Page</a></li>
                                    <li><a href="{{ url('template/page-blog') }}"><i
                                                class="mdi mdi-circle"></i>Blog</a></li>
                                    <li><a href="{{ url('template/page-faq') }}"><i
                                                class="mdi mdi-circle"></i>FAQ</a>
                                    </li>
                                    <li><a href="{{ url('template/page-gallery') }}"><i
                                                class="mdi mdi-circle"></i>Gallery</a></li>
                                    <li><a href="{{ url('template/page-invoice') }}"><i
                                                class="mdi mdi-circle"></i>Invoice</a></li>
                                    <li><a href="{{ url('template/page-pricing') }}"><i
                                                class="mdi mdi-circle"></i>Pricing</a></li>
                                    <li><a href="{{ url('template/page-timeline') }}"><i
                                                class="mdi mdi-circle"></i>Timeline</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="mdi mdi-circle"></i>User Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('template/user-login') }}"><i
                                                class="mdi mdi-circle"></i>Login</a></li>
                                    <li><a href="{{ url('template/user-register') }}"><i
                                                class="mdi mdi-circle"></i>Register</a></li>
                                    <li><a href="{{ url('template/user-forgotpsw') }}"><i
                                                class="mdi mdi-circle"></i>Forgot Password</a></li>
                                    <li><a href="{{ url('template/user-lock-screen') }}"><i
                                                class="mdi mdi-circle"></i>Lock Screen</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="mdi mdi-circle"></i>Error Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('template/error-comingsoon') }}"><i
                                                class="mdi mdi-circle"></i>Coming Soon</a></li>
                                    <li><a href="{{ url('template/error-maintenance') }}"><i
                                                class="mdi mdi-circle"></i>Maintenance</a></li>
                                    <li><a href="{{ url('template/error-404') }}"><i class="mdi mdi-circle"></i>Error
                                            404</a></li>
                                    <li><a href="{{ url('template/error-500') }}"><i class="mdi mdi-circle"></i>Error
                                            500</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="scroll"><a href="{{ url('template/widgets') }}"><img
                                src="assets/backend/images/svg-icon/widgets.svg" class="img-fluid"
                                alt="widgets"><span>Widgets</span></a></li>
                    <li class="dropdown menu-item-has-mega-menu">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img
                                src="assets/backend/images/svg-icon/basic.svg" class="img-fluid" alt="basic"><span>UI
                                Kits</span></a>
                        <div class="mega-menu dropdown-menu">
                            <ul class="mega-menu-row" role="menu">
                                <li class="mega-menu-col col-md-3">
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('template/basic-ui-kits-alerts') }}"><i
                                                    class="mdi mdi-circle"></i>Alerts</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-badges') }}"><i
                                                    class="mdi mdi-circle"></i>Badges</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-buttons') }}"><i
                                                    class="mdi mdi-circle"></i>Buttons</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-cards') }}"><i
                                                    class="mdi mdi-circle"></i>Cards</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-carousel') }}"><i
                                                    class="mdi mdi-circle"></i>Carousel</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-md-3">
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('template/basic-ui-kits-collapse') }}"><i
                                                    class="mdi mdi-circle"></i>Collapse</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-dropdowns') }}"><i
                                                    class="mdi mdi-circle"></i>Dropdowns</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-embeds') }}"><i
                                                    class="mdi mdi-circle"></i>Embeds</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-grids') }}"><i
                                                    class="mdi mdi-circle"></i>Grids</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-images') }}"><i
                                                    class="mdi mdi-circle"></i>Images</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-md-3">
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('template/basic-ui-kits-media') }}"><i
                                                    class="mdi mdi-circle"></i>Media</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-modals') }}"><i
                                                    class="mdi mdi-circle"></i>Modals</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-paginations') }}"><i
                                                    class="mdi mdi-circle"></i>Paginations</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-popovers') }}"><i
                                                    class="mdi mdi-circle"></i>Popovers</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-progressbars') }}"><i
                                                    class="mdi mdi-circle"></i>Progress Bars</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-md-3">
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('template/basic-ui-kits-spinners') }}"><i
                                                    class="mdi mdi-circle"></i>Spinners</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-tabs') }}"><i
                                                    class="mdi mdi-circle"></i>Tabs</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-toasts') }}"><i
                                                    class="mdi mdi-circle"></i>Toasts</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-tooltips') }}"><i
                                                    class="mdi mdi-circle"></i>Tooltips</a></li>
                                        <li><a href="{{ url('template/basic-ui-kits-typography') }}"><i
                                                    class="mdi mdi-circle"></i>Typography</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img
                                src="assets/backend/images/svg-icon/advanced.svg" class="img-fluid"
                                alt="advanced"><span>Advanced</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('template/advanced-ui-kits-image-crop') }}"><i
                                        class="mdi mdi-circle"></i>Image Crop</a></li>
                            <li><a href="{{ url('template/advanced-ui-kits-jquery-confirm') }}"><i
                                        class="mdi mdi-circle"></i>jQuery Confirm</a></li>
                            <li><a href="{{ url('template/advanced-ui-kits-nestable') }}"><i
                                        class="mdi mdi-circle"></i>Nestable</a></li>
                            <li><a href="{{ url('template/advanced-ui-kits-pnotify') }}"><i
                                        class="mdi mdi-circle"></i>Pnotify</a></li>
                            <li><a href="{{ url('template/advanced-ui-kits-range-slider') }}"><i
                                        class="mdi mdi-circle"></i>Range Slider</a></li>
                            <li><a href="{{ url('template/advanced-ui-kits-ratings') }}"><i
                                        class="mdi mdi-circle"></i>Ratings</a></li>
                            <li><a href="{{ url('template/advanced-ui-kits-session-timeout') }}"><i
                                        class="mdi mdi-circle"></i>Session Timeout</a></li>
                            <li><a href="{{ url('template/advanced-ui-kits-sweet-alerts') }}"><i
                                        class="mdi mdi-circle"></i>Sweet Alerts</a></li>
                            <li><a href="{{ url('template/advanced-ui-kits-switchery') }}"><i
                                        class="mdi mdi-circle"></i>Switchery</a></li>
                            <li><a href="{{ url('template/advanced-ui-kits-toolbar') }}"><i
                                        class="mdi mdi-circle"></i>Toolbar</a></li>
                            <li><a href="{{ url('template/advanced-ui-kits-tour') }}"><i
                                        class="mdi mdi-circle"></i>Tour</a></li>
                            <li><a href="{{ url('template/advanced-ui-kits-treeview') }}"><i
                                        class="mdi mdi-circle"></i>Tree View</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Horizontal Nav -->
    </div>
    <!-- End container-fluid -->
</div>
<!-- End Navigationbar -->

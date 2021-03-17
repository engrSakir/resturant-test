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
                                alt="dashboard"><span>Setting</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('getGeneralStaticForm') }}"><i class="mdi mdi-circle"></i>General
                                    static option</a></li>
                            <li><a href="{{ route('seoStaticOptionForm') }}"><i class="mdi mdi-circle"></i>Seo static
                                    option</a></li>
                            <li><a href="{{ route('socialLinkStaticForm') }}"><i class="mdi mdi-circle"></i>Social
                                    link</a></li>
                            <li><a href="{{ route('specialProductStaticForm') }}"><i class="mdi mdi-circle"></i>Special product</a></li>
                            <li><a href="{{ route('offerStaticForm') }}"><i class="mdi mdi-circle"></i>Special offer</a></li>
                            <li><a href="{{ route('blogStaticForm') }}"><i class="mdi mdi-circle"></i>Blog</a></li>
                            <li><a href="{{ route('galleryStaticForm') }}"><i class="mdi mdi-circle"></i>Gallery</a></li>
                            <li><a href="{{ route('appStaticForm') }}"><i class="mdi mdi-circle"></i>Application</a></li>
                            <li><a href="{{ route('otherStaticForm') }}"><i class="mdi mdi-circle"></i>Other</a></li>
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
                                src="assets/backend/images/svg-icon/layouts.svg" class="img-fluid"
                                alt="layouts"><span>Costom page</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('customPage.create') }}"><i class="mdi mdi-circle"></i>Custom page create</a></li>
                            @foreach(custom_pages() as $page)
                                <li><a href="{{ route('customPage.edit', $page) }}"><i class="mdi mdi-circle"></i>{{ $page->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img
                                src="assets/backend/images/svg-icon/apps.svg" class="img-fluid"
                                alt="apps"><span>Website</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('websiteBannerForm') }}"><i class="mdi mdi-circle"></i>Banner</a></li>
                            <li><a href="{{ route('websiteMessage.index') }}"><i class="mdi mdi-circle"></i>Messages <span class="badge badge-danger">{{ website_incomplete_messages() }}</span></a></li>
                            <li><a href="{{ route('subscriber.index') }}"><i class="mdi mdi-circle"></i>Subscribers</a></li>
                            <li><a href="{{ route('websitePromotion.index') }}"><i class="mdi mdi-circle"></i>Promotion list</a></li>
                            <li><a href="{{ route('websitePromotion.create') }}"><i class="mdi mdi-circle"></i>Promotion create</a></li>
                            <li><a href="{{ route('specialProduct.index') }}"><i class="mdi mdi-circle"></i>Special product</a></li>
                            <li><a href="{{ route('specialProduct.create') }}"><i class="mdi mdi-circle"></i>Special product create</a></li>
                            <li><a href="{{ route('blog.index') }}"><i class="mdi mdi-circle"></i>Blog list</a></li>
                            <li><a href="{{ route('blog.create') }}"><i class="mdi mdi-circle"></i>Blog create</a></li>
                            <li><a href="{{ route('partner.create') }}"><i class="mdi mdi-circle"></i>Partner create</a></li>
                            <li><a href="{{ route('partner.index') }}"><i class="mdi mdi-circle"></i>Partner list</a></li>
                            <li><a href="{{ route('gallery.create') }}"><i class="mdi mdi-circle"></i>Gallery create</a></li>
                            <li><a href="{{ route('gallery.index') }}"><i class="mdi mdi-circle"></i>Gallery list</a></li>
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
                </ul>
            </div>
        </nav>
        <!-- End Horizontal Nav -->
    </div>
    <!-- End container-fluid -->
</div>
<!-- End Navigationbar -->

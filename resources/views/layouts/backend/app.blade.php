<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.backend.includes.head')
</head>
<body>
    <!-- Start wrapper-->
    <div id="wrapper">
        @include('layouts.backend.includes.leftbar')
        @include('layouts.backend.includes.topbar')
        <div class="clearfix"></div>

            <!--Start Dashboard Content-->
            @yield('content')
            <!--End Dashboard Content-->

        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
        @include('layouts.backend.includes.footer')
    </div>
    <!--End wrapper-->
    @include('layouts.backend.includes.foot')
</body>

</html>

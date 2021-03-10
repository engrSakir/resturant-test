<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.backend.includes.head')
    </head>
    <body class="vertical-layout">

        @include('layouts.backend.includes.notification-bar')

        @include('layouts.backend.includes.setting-bar')
        <!-- Start Containerbar -->
        <div id="containerbar" class="container-fluid">
            <!-- Start Rightbar -->
            @include('layouts.backend.includes.rightbar')
            @yield('content')
            <!-- End Rightbar -->
        </div>
        <!-- End Containerbar -->
        @include('layouts.backend.includes.foot')
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.backend.includes.head')
    </head>
    <body class="vertical-layout">


        <!-- Start Containerbar -->
        <div id="containerbar" class="container-fluid">
            <!-- Start Rightbar -->
            <div class="rightbar">
                <!-- Start Topbar -->
                <div class="topbar">
                    <div class="container-fluid">
                        <!-- Start row -->
                        <div class="row align-items-center">
                            <!-- Start col -->
                            <div class="col-md-12 align-self-center">
                                <h1>{{ config('app.name') }}</h1>
                            </div>
                            <!-- End col -->
                        </div>
                        <!-- End row -->
                    </div>
                </div>

                @yield('content')

                @include('layouts.backend.includes.footer')
            </div>
            <!-- End Rightbar -->
        </div>
        <!-- End Containerbar -->
        @include('layouts.backend.includes.foot')
    </body>
</html>

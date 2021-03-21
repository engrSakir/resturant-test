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
            <div class="rightbar">
                @include('layouts.backend.includes.mobile-topbar')

                @include('layouts.backend.includes.topbar')

                @include('layouts.backend.includes.navbar')

                @yield('content')

                @include('layouts.backend.includes.footer')

            </div>


            <!-- End Rightbar -->
        </div>
        <!-- End Containerbar -->
        @include('layouts.backend.includes.foot')
        @if(Auth::check())
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endif
    </body>
</html>

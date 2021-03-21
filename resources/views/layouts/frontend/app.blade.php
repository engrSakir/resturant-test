<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.frontend.includes.head')
</head>
<body>
    @include('layouts.frontend.includes.menubar')

        @yield('content')

    @include('layouts.frontend.includes.footer')

    @include('layouts.frontend.includes.foot')

    @if(Auth::check())
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @endif
</body>

</html>

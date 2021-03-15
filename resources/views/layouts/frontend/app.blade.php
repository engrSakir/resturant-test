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

</body>

</html>

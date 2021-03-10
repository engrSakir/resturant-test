<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>@stack('title') | {{ config('app.name') }} </title>
{{--  <meta name="author" content="{{ get_static_option('author_name') ?? 'No author' }}">  --}}
{{--  <meta name="description" content="{{ get_static_option('author_description') ?? 'No description' }}" />  --}}
{{--  <meta property="og:image" content="{{ asset(get_static_option('meta_image')) }}" />  --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--favicon-->
{{--  <link rel="icon" href="{{ asset(get_static_option('fav') ?? 'uploads/images/defaults/fav.png') }}" type="image/x-icon">  --}}
<!-- simplebar CSS-->
<link href="{{ asset('assets/backend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
<!-- Bootstrap core CSS-->
<link href="{{ asset('assets/backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
<!-- animate CSS-->
<link href="{{ asset('assets/backend/assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
<!-- Icons CSS-->
<link href="{{ asset('assets/backend/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
<!-- Sidebar CSS -->
<link href="{{ asset('assets/backend/assets/css/sidebar-menu.css') }}" rel="stylesheet" />
<!-- Custom Style -->
<link href="{{ asset('assets/backend/assets/css/app-style.css') }}" rel="stylesheet" />
<!--SweetAlert 2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!--====== AJAX ======-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@stack('head')


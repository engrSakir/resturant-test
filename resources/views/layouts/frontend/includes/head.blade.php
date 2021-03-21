<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="keywords" content="{{ $meta_keywords ?? get_static_option('meta_keywords') }}">
<meta name="description" content="{{ $meta_description ?? get_static_option('meta_description') }}">
<meta name="author" content="{{ $meta_author ?? (get_static_option('meta_author') ?? config('app.name')) }}">
<meta property="og:image"
    content="{{ $meta_image ?? (get_static_option('meta_image') ?? get_static_option('frontend_logo') ?? get_static_option('no_image')) }}" />

<title>@stack('title') | {{ config('app.name') }}</title>

<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/fonts.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/structure.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
<link id="preset" rel="stylesheet" href="{{ asset('assets/frontend/css/presets/preset1.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

<link rel="icon" href="{{ asset('assets/frontend/images/ico/favicon.ico') }}">
<link rel="apple-touch-icon" sizes="144x144"
    href="{{ asset('assets/frontend/images/ico/apple-touch-icon-144-precomposed.png') }}">
<link rel="apple-touch-icon" sizes="114x114"
    href="{{ asset('assets/frontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
<link rel="apple-touch-icon" sizes="72x72"
    href="{{ asset('assets/frontend/images/ico/apple-touch-icon-72-precomposed.html') }}">
<link rel="apple-touch-icon" sizes="57x57"
    href="{{ asset('assets/frontend/images/ico/apple-touch-icon-57-precomposed.png') }}">

<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--====== AJAX ======-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

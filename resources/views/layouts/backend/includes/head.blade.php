<base href="{{ url('/') }}">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Theta is a bootstrap & laravel admin dashboard template">
<meta name="keywords"
    content="admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, crm, laravel admin, responsive, sass support, ui kits">
<meta name="author" content="Themesbox17">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title> @stack('title') </title>
<!-- Fevicon -->
<link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.ico') }}">
<!-- Start CSS -->
@stack('style')
<link href="{{ asset('assets/backend/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/backend/css/icons.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/backend/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet" type="text/css">
<!-- End CSS -->
<!--====== AJAX ======-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- summer note cdn   --}}
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<style>
    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

</style>

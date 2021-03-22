@extends('layouts.frontend.app')
@push('title')
    Page not found
@endpush
@section('content')
    <div class="tr-breadcrumb text-center bg-image" style="background-image: url({{ asset( get_static_option('breadcrumb_image') ?? 'assets/frontend/images/bg/breadcrumb-bg.jpg') }});">
        <div class="container">
            <div class="page-title">
                <h1>Page not found</h1>
            </div>
        </div>
    </div>
    <div class="main-content bg-color blog-details">
        <div class="container text-center">
            <div class="page-title">
                <h2 class="text-danger">404</h2>
            </div>
        </div>
    </div>
@endsection
@push('foot')

@endpush

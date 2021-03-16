@extends('layouts.frontend.app')
@push('title')
    Blogs
@endpush
@section('content')
    <div class="tr-breadcrumb text-center bg-image"
        style="background-image: url({{ asset( get_static_option('breadcrumb_image') ?? 'assets/frontend/images/bg/breadcrumb-bg.jpg') }});">
        <div class="container">
            <div class="page-title">
                <h1>{{ get_static_option('blog_highlight') }}</h1>
                <h2>{{ get_static_option('blog_title') }}</h2>
            </div>
        </div>
    </div>
    @include('frontend.partials.blog')
@endsection
@push('foot')

@endpush

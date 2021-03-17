@extends('layouts.frontend.app')
@push('title')
    {{ $page->name }}
@endpush
@section('content')
    <div class="tr-breadcrumb text-center bg-image" style="background-image: url({{ asset( get_static_option('breadcrumb_image') ?? 'assets/frontend/images/bg/breadcrumb-bg.jpg') }});">
        <div class="container">
            <div class="page-title">
                <h1>{{ $page->title }}</h1>
                <h2>{{ Str::limit($page->name, 20) }}</h2>
            </div>
        </div>
    </div>
    <div class="main-content bg-color blog-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! $page->description !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('foot')

@endpush

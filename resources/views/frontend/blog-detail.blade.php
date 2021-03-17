@extends('layouts.frontend.app')
@push('title')
    Blog details
@endpush
@section('content')
<div class="tr-breadcrumb text-center bg-image" style="background-image: url({{ asset( get_static_option('breadcrumb_image') ?? 'assets/frontend/images/bg/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="page-title">
            <h1>{{ get_static_option('blog_highlight') }}</h1>
            <h2>{{ Str::limit($blog->title, 20) }}</h2>
        </div>
    </div>
</div>
<div class="main-content bg-color blog-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="tr-blog blog-two">
                    <div class="tr-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <img src="{{ asset($blog->image ?? get_static_option('no_image')) }}" alt="Image" class="img-fluid">
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="post-time">
                                <span>{{ $blog->created_at->format('d') }}<span>{{ $blog->created_at->format('M') }}</span></span>
                            </div>
                            <div class="entry-meta">
                                <ul class="global-list">
                                    @if($blog->writer)
                                        <li>{{ $blog->writer->name }}</li>
                                    @endif
                                </ul>
                            </div>
                            <h2 class="entry-title">{{ $blog->title }}</h2>

                            <div>
                                {!! $blog->description !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@push('foot')

@endpush

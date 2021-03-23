<div class="tr-blog section-padding section-bg-white">
    <div class="container">
        @if(Route::is('frontend.index'))
            <div class="section-title">
                <h1>{{ get_static_option('blog_highlight') }}</h1>
                <h2>{{ get_static_option('blog_title') }}</h2>
            </div>
        @endif
        <div class="blog-slider">
            <div class="blog-item">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-4">
                            <div class="tr-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <a href="{{ route('frontend.blogDetail', $blog->slug) }}"><img
                                                src="{{ asset($blog->image ?? get_static_option('no_image')) }}"
                                                alt="Image" class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="entry-meta">
                                        <ul class="global-list">
                                            @if ($blog->writer)
                                                <li>{{ $blog->writer->name }}</li>
                                            @endif
                                            <li>{{ $blog->created_at->format('D-d/m/Y') }}</li>
                                        </ul>
                                    </div>
                                    <h2 class="entry-title"><a
                                            href="{{ route('frontend.blogDetail', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h2>
                                    <p>{!! Str::limit($blog->description, 150)  !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

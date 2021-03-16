<div class="tr-blog section-padding section-bg-white">
    <div class="container">
        <div class="section-title">
            <h1>From our press</h1>
            <h2>latest News & <strong>Blogs</strong></h2>
        </div>
        <div class="blog-slider">
            <div class="blog-item">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-4">
                            <div class="tr-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <a href="blog-details.html"><img src="{{ asset($blog->image ?? get_static_option('no_image')) }}" alt="Image" class="img-fluid"></a>
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
                                    <h2 class="entry-title"><a href="blog-details.html">{{ $blog->title }}</a></h2>
                                    <p>{!! $blog->description !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

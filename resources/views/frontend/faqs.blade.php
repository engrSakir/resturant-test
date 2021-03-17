@extends('layouts.frontend.app')

@push('title')
    Faqs
@endpush
@section('content')
    <style>
        .collapsible {
            background-color: #777;
            color: white;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            margin-bottom: 15px;
        }

        .active_faq, .collapsible:hover {
            background-color: #555;
        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f1f1f1;
        }
    </style>

    <div class="tr-breadcrumb text-center bg-image" style="background-image: url({{ asset( get_static_option('breadcrumb_image') ?? 'assets/frontend/images/bg/breadcrumb-bg.jpg') }});">
        <div class="container">
            <div class="page-title">
                <h1>{{ get_static_option('faq_highlight') }}</h1>
                <h2>{{ get_static_option('faq_title') }}</h2>
            </div>
        </div>
    </div>
    <div class="main-content bg-color blog-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="tr-blog blog-two">
                        @foreach($faqs as $faq)
                            <button type="button" class="collapsible"> <b>{{ $loop->iteration }}) &nbsp; </b>{{ $faq->question }}</button>
                            <div class="content">
                                {!! $faq->answer !!}
                            </div>
                            <br>
                        @endforeach
                        <script>
                            var coll = document.getElementsByClassName("collapsible");
                            var i;

                            for (i = 0; i < coll.length; i++) {
                                coll[i].addEventListener("click", function() {
                                    this.classList.toggle("active_faq");
                                    var content = this.nextElementSibling;
                                    if (content.style.display === "block") {
                                        content.style.display = "none";
                                    } else {
                                        content.style.display = "block";
                                    }
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('foot')

@endpush

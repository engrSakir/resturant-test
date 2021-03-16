@extends('layouts.frontend.app')
@push('title')
    Gallery
@endpush
@section('content')
    <div class="tr-breadcrumb text-center bg-image"
         style="background-image: url({{ asset( get_static_option('breadcrumb_image') ?? 'assets/frontend/images/bg/breadcrumb-bg.jpg') }});">
        <div class="container">
            <div class="page-title">
                <h1>Gallery</h1>
            </div>
        </div>
    </div>
    <div class="main-content popup-one">
        <div class="container">
            <div class="row">
                @foreach( $galleries as $gallery)
                    <div class="col-md-6 col-lg-3">
                        <div class="">
                            <span class="product-image">
                                <img src="{{ asset($gallery->image ?? get_static_option('no_image')) }}" alt="Image" class="img-fluid">
                            </span>
                        </div>
                    </div>
                @endforeach`
            </div>
        </div>
    </div>
@endsection
@push('foot')

@endpush

@extends('layouts.frontend.app')
@push('title')
    Home
@endpush
@section('content')

    @include('frontend.partials.carousel')

    @include('frontend.partials.promotion')

    @include('frontend.partials.farmfood')

    @include('frontend.partials.products')

    @include('frontend.partials.offer')

    @include('frontend.partials.blog')

    @include('frontend.partials.brand')

@endsection
@push('foot')

@endpush

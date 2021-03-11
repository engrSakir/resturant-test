@push('title')
    Theta - Home
@endpush
@extends('layouts.backend.branch')
@push('style')

@endpush
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">

</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        @foreach ($branches as $branch)
        <div class="col-md-6 col-lg-6 col-xl-3 text-center">
            <div class="card text-center">
                <img class="card-img-top" src="{{ asset($branch->image ?? 'assets/backend/images/ui-cards/ui-cards-1.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title font-18">{{ $branch->name }}</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    <a href="{{ route('branch.edit', $branch->id) }}" class="btn btn-info">Edit</a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-6 col-lg-6 col-xl-3 text-center">
            <div class="card m-b-30">
                <a href="{{ route('branch.create') }}">
                    <img class="card-img-top" src="{{ asset('uploads/images/plus.png') }}" alt="Card image cap">
                </a>

            </div>
        </div>

        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@push('script')


@endpush

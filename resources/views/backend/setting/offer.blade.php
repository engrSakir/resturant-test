@push('title')
   Special offer
@endpush
@extends('layouts.backend.app')
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
            <div class="card m-b-30 col-12 ">
                <div class="card-header bg-danger">
                    <h5 class="card-title">Special offer</h5>
                </div>
                <div class="card-body">
                    <form class="row justify-content-center" method="POST" action="{{  route('offerStaticOptionUpdate') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-8">
                            <div class="form-group row">
                                <label for="offer_highlight" class="col-sm-4 col-form-label">Highlight</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('offer_highlight') }}" name="offer_highlight" type="text"
                                        class="form-control" id="offer_highlight" placeholder="Highlight">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="offer_percentage" class="col-sm-4 col-form-label">Offer percentage</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('offer_percentage') }}" name="offer_percentage" type="text"
                                        class="form-control" id="offer_percentage" placeholder="Offer percentage">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="offer_description" class="col-sm-4 col-form-label">Offer description</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('offer_description') }}" name="offer_description" type="text"
                                        class="form-control" id="offer_description" placeholder="Offer description">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="offer_deadline" class="col-sm-4 col-form-label">Offer deadline</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('offer_deadline') }}" name="offer_deadline" type="datetime-local"
                                        class="form-control" id="offer_deadline" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <img class="rounded-circle" height="70px;" width="70px;" src="{{ asset(get_static_option('offer_image') ?? get_static_option('no_image')) }}" alt="">
                                <label for="offer_image" class="col-sm-4 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <input name="offer_image" type="file" accept="image/*" class="form-control-lg" id="offer_image">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" id="submit-btn" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End Contentbar -->
@endsection
@push('script')


@endpush

@push('note')

@endpush

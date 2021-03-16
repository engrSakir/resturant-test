@extends('layouts.frontend.app')
@push('title')
    Contact us
@endpush
@section('content')
    <div class="tr-breadcrumb text-center bg-image" style="background-image: url({{ asset( get_static_option('breadcrumb_image') ?? 'assets/frontend/images/bg/breadcrumb-bg.jpg') }});">
        <div class="container">
            <div class="page-title">
                <h1>Stay With Us</h1>
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
    <div class="main-content bg-color">
        <div class="tr-map">
            <div class="container">
                <div id="gmap"></div>
            </div>
        </div>
        <div class="tr-contact">
            <div class="container">
                <div class="form-content section-bg-white">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-info">
                                <h3>General inquirles</h3>
                                <div class="media">
                                    <div class="icon mr-5">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body">
                                        <a href="tel:{{ get_static_option('company_email') }}">
                                            <span>{{ get_static_option('company_phone') }}</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="icon mr-5">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body">
                                        <span><a href="mailto:{{ get_static_option('company_email') }}"><span
                                                    class="__cf_email__"
                                                    data-cfemail="bcd4d9d0d0d3fccfd5c8d992dfd392c9d7">{{ get_static_option('company_email') }}</span></a></span>
                                    </div>
                                </div>
                                <div class="tr-address">
                                    <span>Our location</span>
                                    <div class="media">
                                        <div class="icon mr-5">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <address>{{ get_static_option('company_address') }}</address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-7 offset-lg-1">
                            <div class="contact-form">
                                <h3>Request information</h3>
                                <form class="tr-form" name="contact-form" method="post"
                                    action="{{ route('frontend.contactUsStore') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i>
                                                </div>
                                                <input name="name" type="text" class="form-control" required="required"
                                                    placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group-addon"><i class="fa fa-envelope"
                                                        aria-hidden="true"></i></div>
                                                <input name="text" type="email" class="form-control"
                                                    placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group-addon"><i class="fa fa-phone"
                                                        aria-hidden="true"></i>
                                                </div>
                                                <input name="phone" type="text" class="form-control" required="required"
                                                    placeholder="Your Phone">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control" name="branch" id="branch">
                                                    <option value="">Select Branch</option>
                                                    @foreach ($branches as $branch)
                                                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="input-group-addon"><i class="fa fa-comment"
                                                        aria-hidden="true"></i></div>
                                                <textarea name="message" class="form-control" required="required" rows="5"
                                                    placeholder="Message"></textarea>
                                            </div>
                                            <input type="submit" class="btn btn-primary text-center" value="Send message">
                                        </div>
                                    </div>
                                </form>
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

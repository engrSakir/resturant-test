@push('title')
    Application
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Application</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Application</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">

                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <div class="card m-b-30 col-12 ">
                <div class="card-header bg-danger">
                    <h5 class="card-title">Application</h5>
                </div>
                <div class="card-body">
                    <form class="row" method="POST" action="{{ route('appStaticOptionUpdate') }}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="app_name" class="col-sm-4 col-form-label">App name</label>
                                <div class="col-sm-8">
                                    <input value="{{ env('APP_NAME')  }}" name="app_name"
                                           type="text" class="form-control" id="app_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="app_debug" class="col-sm-4 col-form-label">App debug</label>
                                <div class="col-sm-8">
                                    <select name="app_debug" class="select2-single form-control">
                                        <option @if ( env('APP_DEBUG') == true) selected @endif value="1">Active </option>
                                        <option @if ( env('APP_DEBUG') == false) selected @endif value="0">Inactive </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="app_debug" class="col-sm-4 col-form-label">Environment</label>
                                <div class="col-sm-8">
                                    <select name="app_env" class="select2-single form-control">
                                        <option @if ( env('APP_ENV') == 'local') selected @endif value="1">Local </option>
                                        <option @if ( env('APP_ENV') == 'production') selected @endif value="0">Production </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mailer" class="col-sm-4 col-form-label">Mailer</label>
                                <div class="col-sm-8">
                                    <input value="{{ env('MAIL_MAILER')  }}" name="mailer"
                                           type="text" class="form-control" id="mailer">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="host" class="col-sm-4 col-form-label">Host</label>
                                <div class="col-sm-8">
                                    <input value="{{ env('MAIL_HOST')  }}" name="host"
                                           type="text" class="form-control" id="host">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="port" class="col-sm-4 col-form-label">Port</label>
                                <div class="col-sm-8">
                                    <input value="{{ env('MAIL_PORT')  }}" name="port"
                                           type="text" class="form-control" id="port">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="username" class="col-sm-4 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input value="{{ env('MAIL_USERNAME')  }}" name="username"
                                           type="text" class="form-control" id="username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input value="{{ env('MAIL_PASSWORD')  }}" name="password"
                                           type="text" class="form-control" id="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="encryption" class="col-sm-4 col-form-label">Encryption</label>
                                <div class="col-sm-8">
                                    <input value="{{ env('MAIL_ENCRYPTION')  }}" name="encryption"
                                           type="text" class="form-control" id="encryption">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="from_email" class="col-sm-4 col-form-label">Mail from email</label>
                                <div class="col-sm-8">
                                    <input value="{{ env('MAIL_FROM_ADDRESS')  }}" name="from_email"
                                           type="text" class="form-control" id="from_email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="from_name" class="col-sm-4 col-form-label">Mail from name</label>
                                <div class="col-sm-8">
                                    <input value="{{ env('MAIL_FROM_NAME')  }}" name="from_name"
                                           type="text" class="form-control" id="from_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" id="submit-btn" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                    <br>
                   <div class="mt-5 row justify-content-center">
                       <button type="button" id="" class="btn btn-info mx-2">Cache clear</button>
                       <button type="button" id="" class="btn btn-info mx-2">Route clear</button>
                       <button type="button" id="" class="btn btn-info mx-2">View clear</button>
                       <button type="button" id="" class="btn btn-info mx-2">Config clear</button>
                       <button type="button" id="" class="btn btn-info mx-2">Opt clear</button>
                   </div>
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

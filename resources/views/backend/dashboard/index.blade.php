@extends('layouts.backend.app')
@push('title') Dashboard @endpush
@push('head')
    <!-- notifications css -->
    <link rel="stylesheet" href="{{ asset('assets/backend/assets/plugins/notifications/css/lobibox.min.css') }}"/>
    <!-- Vector CSS -->
    <link href="{{ asset('assets/backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Start container-fluid-->
        <div class="container-fluid">

            <!--Start Customer, Worker, Member, Controller Content-->
            <div class="row mt-4">
                <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card gradient-scooter">
                        <div class="card-body p-4">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-white">{{ '10' }}</h4>
                                    <span class="text-white">{{ __('Total Customer') }}</span>
                                </div>
                                <div class="align-self-center w-icon"><i class="icon-user text-white"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card gradient-bloody">
                        <div class="card-body p-4">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-white">{{ '80' }}</h4>
                                    <span class="text-white">{{ __('Total Worker') }}</span>
                                </div>
                                <div class="align-self-center w-icon"><i class="icon-user text-white"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--End Row-->

        </div>
        <!-- End container-fluid-->
    </div>


@endsection
@push('foot')
    <!-- Vector map JavaScript -->
    <script src="{{ asset('assets/backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- Sparkline JS -->
    <script src="{{ asset('assets/backend/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
    <!-- Chart js -->
    <script src="{{ asset('assets/backend/assets/plugins/Chart.js/Chart.min.js') }}"></script>
    <!--notification js -->
    <script src="{{ asset('assets/backend/assets/plugins/notifications/js/lobibox.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/plugins/notifications/js/notifications.min.js') }}"></script>
    <!-- Index js -->
    <script src="{{ asset('assets/backend/assets/js/index.js') }}"></script>
@endpush

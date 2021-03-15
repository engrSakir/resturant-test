@push('title')
    Message
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Message</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Message</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <a href="{{ route('websiteMessage.index') }}" class="btn btn-primary">Back to list</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row justify-content-center">
            <!-- Start col -->
            <div class="col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Name : {{ $contact_us->name }}</h5>
                        <h6 class="">Email : {{ $contact_us->email }}</h6>
                        <h6 class="">Phone : {{ $contact_us->phone }}</h6>

                        <p class="card-text">{{ $contact_us->message }}</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('websiteMessage.update', $contact_us->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                              <div class="form-group">
                                  <label for="my-select">Status</label>
                                  <select id="my-select" class="form-control" name="status">
                                      <option @if($contact_us->is_process_complete == true) selected  @endif value="1">Completed</option>
                                      <option @if($contact_us->is_process_complete == false) selected  @endif value="0">Incompleted</option>
                                  </select>
                              </div>
                              <button type="submit" class="btn btn-info">Save</button>
                            </div>
                        </form>
                    </div>
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

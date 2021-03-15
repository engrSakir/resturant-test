@push('title')
    Theta - Home
@endpush
@extends('layouts.backend.branch')
@push('style')

@endpush
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Branch Create</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">

                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <a href="{{ route('branch.index') }}" class="btn btn-primary">Back to list</a>
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
                    <h5 class="card-title">Branch create</h5>
                </div>
                <div class="card-body">
                    <form class="row" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('name') }}" name="name" type="text" class="form-control-lg"
                                        id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('email') }}" name="email" type="email" class="form-control-lg"
                                        id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('phone') }}" name="phone" type="text" class="form-control-lg"
                                        id="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-4 col-form-label">Address</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('address') }}" name="address" type="text" class="form-control-lg"
                                        id="address" placeholder="Address">
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="opening_time" class="col-sm-4 col-form-label">Opening time</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('opening_time') }}" name="opening_time" type="text"
                                        class="form-control-lg" id="opening_time" placeholder="Opening time">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="serial" class="col-sm-4 col-form-label">Serial</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('serial') }}" name="serial" type="number" class="form-control-lg"
                                        id="serial" placeholder="Serial">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-sm-4 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <input name="image" type="file" accept="image/*" class="form-control-lg" id="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="logo" class="col-sm-4 col-form-label">logo</label>
                                <div class="col-sm-8">
                                    <input name="logo" type="file" accept="image/*" class="form-control-lg" id="logo">
                                </div>
                            </div>

                        </div>
                        <div class="col-12 text-center">
                            <button id="submit-btn" class="btn btn-primary">Save</button>
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
    <script>
        //Submit image without reload
        $('#submit-btn').click(function() {

            var formData = new FormData();
            formData.append('name', $('#name').val())
            formData.append('email', $('#email').val())
            formData.append('phone', $('#phone').val())
            formData.append('address', $('#address').val())
            formData.append('opening_time', $('#opening_time').val())
            formData.append('serial', $('#serial').val())
            formData.append('image', $('#image')[0].files[0])
            formData.append('logo', $('#logo')[0].files[0])


            var this_button = $(this);

            $.ajax({
                method: 'POST',
                url: "{{ route('branch.store') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    this_button.prop("disabled", true)
                },
                complete: function() {
                    this_button.prop("disabled", false)
                },
                success: function(response_data) {
                    if (response_data.type == 'success') {
                        Swal.fire({
                            position: 'top-end',
                            icon: response_data.type,
                            title: response_data.message,
                            showConfirmButton: false,
                            timer: 1500
                        })
                        location.reload();
                    } else {
                        Swal.fire({
                            icon: response_data.type,
                            title: 'Oops...',
                            text: response_data.message,
                        })
                    }
                },
                error: function(xhr) {
                    var errorMessage = '<div class="card bg-danger">\n' +
                        '                        <div class="card-body text-center p-5">\n' +
                        '                            <span class="text-white">';
                    $.each(xhr.responseJSON.errors, function(key, value) {
                        errorMessage += ('' + value + '<br>');
                    });
                    errorMessage += '</span>\n' +
                        '                        </div>\n' +
                        '                    </div>';
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        footer: errorMessage
                    })
                },
            })

        });

    </script>



@endpush

@push('title')
    Expense category
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Expense category</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Expense category</li>
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
            <!-- Start col -->
            <div class="col-12 ">
                <form action="{{ route('expenseCategory.store') }}" method="post" class="row justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-12">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{ old('name') }}">
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <button type="submit" class="btn btn-success mr-1 col-12" id="save-category">SAVE</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">Expense category </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="display table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Total Expense</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Total Expense</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
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

    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $('#datatable').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: '{!! route('expenseCategory.index') !!}',
                columns: [{
                    data: 'id',
                    name: 'id'
                },{
                    data: 'name',
                    name: 'name'
                },{
                    data: 'expense',
                    name: 'expense'
                },
                {
                    data: 'action',
                    name: 'action'
                },
                ],order: [[ 0, 'desc' ]]
                ,initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        var input = document.createElement("input");
                        $(input).appendTo($(column.footer()).empty())
                            .on('change', function() {
                                column.search($(this).val(), false, false, true).draw();
                            });
                    });
                }
            });
        });

        function editCategory(category_id){
            Swal.fire({
                title: ' Write category name ',
                input: 'text',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Set',
                showLoaderOnConfirm: true,
                preConfirm: (name) => {
                    $.ajax({
                        // method: 'POST',
                        type: 'PATCH',
                        url: "/expenseCategory/"+category_id,
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: { name:name },
                        beforeSend: function (){
                            $(this).prop("disabled",true);
                        },
                        complete: function (){
                            $(this).prop("disabled",false);
                        },
                        success: function (data) {
                            if (data.type == 'success'){
                                Swal.fire({
                                    position: 'top-end',
                                    icon: data.type,
                                    title: data.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                setTimeout(function() {
                                    location.reload();
                                }, 800);//
                            }else{
                                Swal.fire({
                                    icon: data.type,
                                    title: 'Oops...',
                                    text: data.message,
                                    footer: 'Something went wrong!'
                                });
                            }
                        },
                        error: function (xhr) {
                            var errorMessage = '<div class="card bg-danger">\n' +
                                '                        <div class="card-body text-center p-5">\n' +
                                '                            <span class="text-white">';
                            $.each(xhr.responseJSON.errors, function(key,value) {
                                errorMessage +=(''+value+'<br>');
                            });
                            errorMessage +='</span>\n' +
                                '                        </div>\n' +
                                '                    </div>';
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                footer: errorMessage
                            });
                        },
                    });
                },
            })
        }

    </script>
@endpush

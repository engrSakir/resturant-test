@push('title')
    Product create
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Product create</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product create</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Back to list</a>
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
                    <h5 class="card-title text-white">Product create</h5>
                    <a class="btn btn-info float-right productCategoryBtn" href="javascript:0">Product Category</a>
                </div>
                <div class="card-body">
                    <form class="row justify-content-center" method="POST" action="{{ route('product.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-10">
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('name') }}" name="name" type="text" class="form-control"
                                        id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-sm-4 col-form-label">Price</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('price') }}" name="price" type="number" class="form-control"
                                        id="price" placeholder="Price">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="category" class="col-sm-4 col-form-label">Category</label>
                                <div class="col-sm-8">
                                    <select name="category" class="select2-single form-control">
                                        <option value="">Select</option>
                                        @foreach ($product_categories as $product_category)
                                            <option @if (old('category') == $product_category->id) selected @endif
                                                value="{{ $product_category->id }}">{{ $product_category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-sm-4 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <input name="image" type="file" accept="image/*" class="form-control-lg" id="image">
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button id="submit-btn" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End Contentbar -->
    <!-- Modal -->
    <div class="modal fade" id="productCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            @foreach ($product_categories as $product_category)
                                <tr>
                                    <td>{{ $product_category->name }}</td>
                                    <td>
                                        @if ($product_category->status == true)
                                            <span class="badge badge-pill badge-success">Active</span>
                                        @else
                                            <span class="badge badge-pill badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('productCategory.edit', $product_category) }}"
                                            class="btn btn-info"><i class="fa fa-edit"></i> </a> <button
                                            class="btn btn-danger" onclick="delete_function(this)"
                                            value="{{ route('productCategory.destroy', $product_category) }}"><i
                                                class="fa fa-trash"></i> </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    <form action="{{ route('productCategory.store') }}" method="post" class="row"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-12">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="status">Status</label>
                            <select name="status" class="select2-single form-control" name="state">
                                <option @if (old('status') == 1) selected @endif value="1">Active</option>
                                <option @if (old('status') == 0) selected @endif value="0">Inactive</option>
                            </select>
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-success mr-1 col-12" id="save-category">SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(".productCategoryBtn").click(function() {
                // show Modal
                $('#productCategoryModal').modal('show');
            });
        });
    </script>
@endpush

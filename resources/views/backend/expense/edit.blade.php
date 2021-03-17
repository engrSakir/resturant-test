@push('title')
    Expense edit
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Expense</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Expense edit</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <a href="{{ route('expense.index') }}" class="btn btn-primary">Back to list</a>
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
                <form action="{{ route('expense.update', $expense) }}" method="post" class="row justify-content-center" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group col-12">
                        <label for="name">Expense Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $expense->name }}">
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <label for="category">Category</label>
                        <select class="form-control" name="category" id="category">
                            @foreach($expenseCategories as $expenseCategory)
                                <option @if($expense->category_id == $expenseCategory->id) selected @endif  value="{{ $expenseCategory->id }}">{{ $expenseCategory->name }}</option>
                            @endforeach
                        </select>
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount" value="{{ $expense->amount }}">
                        @error('amount')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <label for="description">Description</label>
                        <textarea  class="form-control"  name="description" id="description" >{!! $expense->description !!}</textarea>
                        @error('description')
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
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
    <!-- End Contentbar -->
@endsection
@push('script')


@endpush
@push('note')
    <script>
        $('#description').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endpush


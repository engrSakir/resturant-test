@push('title')
    Promotion create
@endpush
@extends('layouts.backend.app')
@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
@endpush
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Promotion create</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Promotion create</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <a href="{{ route('websitePromotion.index') }}" class="btn btn-primary">Back to list</a>
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
                    <h5 class="card-title">Promotion create</h5>
                </div>
                <div class="card-body">
                    <form class="row justify-content-center" method="POST" action="{{ route('websitePromotion.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-8">
                            <div class="form-group row">
                                <label for="highlight" class="col-sm-4 col-form-label">Highlight</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('highlight') }}" name="highlight" type="text"
                                        class="form-control" id="highlight" placeholder="Highlight">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label">Title</label>
                                <div class="col-sm-8">
                                    <input value="{{ old('title') }}" name="title" type="text" class="form-control"
                                        id="title" placeholder="Title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-4 col-form-label">Description</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="description" id="description" cols="30"
                                        rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-sm-4 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <select id="id_select2_example" name="image">
                                        @foreach(get_global_images() as $image)
                                            <option @if(old('image') == $image->image) selected @endif value="{{ $image->image }}" data-img_src="{{ asset($image->image) }}"></option>
                                        @endforeach
                                    </select>
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
    <!-- /content -->
    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
    <script type="text/javascript">
        function custom_template(obj){
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if(data && data['img_src']){
                img_src = data['img_src'];
                template = $("<div><img src=\"" + img_src + "\" style=\";\"/><p style=\"text-align:center;\">" + text + "</p></div>");
                return template;
            }
        }
        var options = {
            'templateSelection': custom_template,
            'templateResult': custom_template,
        }
        $('#id_select2_example').select2(options);
        $('.select2-container--default .select2-selection--single').css({'height': '50px'});

    </script>
@endpush

@push('note')

@endpush

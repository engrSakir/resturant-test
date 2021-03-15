@push('title')
    Pos
@endpush
@extends('layouts.backend.app')
@push('style')
    <style>
        .product-items {
            cursor: pointer;
            margin-left: -10px;
            margin-right: -10px;
        }

        .product-items .card-body:hover {
            background-color: #e9a9a9;
        }

        .contentbar {
            margin-top: 130px;

        }

        .vertical-layout {
            margin-left: -70px;
            margin-right: -70px;
        }

        .bill-area {
            margin-left: -70px;
            margin-right: -70px;
        }

    </style>
@endpush
@section('content')
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-lg-3 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Category</h5>
                    </div>
                    <div class="card-body">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @foreach ($product_categories as $product_category)
                                <a class="nav-link mb-2 @if ($loop->first) active @endif" id="v-pills-product-tab-{{ $product_category->id }}"
                                    data-toggle="pill" href="#v-pills-product-{{ $product_category->id }}" role="tab"
                                    aria-controls="v-pills-product" aria-selected="true"><i
                                        class="feather icon-grid mr-2"></i>{{ $product_category->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->
            <!-- Start col -->
            <div class="col-lg-6 col-xl-6">
                <div class="tab-content" id="v-pills-tabContent">
                    @foreach ($product_categories as $product_category)
                        <!-- Product Start -->
                        <div class="tab-pane fade show  @if ($loop->first) active @endif" id="v-pills-product-{{ $product_category->id }}" role="tabpanel"
                            aria-labelledby="v-pills-product-tab-{{ $product_category->id }}">
                            <div class="row">
                                <!-- Start col -->
                                @foreach ($product_category->products as $product)
                                    <div class="col-md-6 col-lg-6 col-xl-3 text-center product-items mb-3" onclick="checkVariations({{ $product->id }})">
                                        <div class="card text-center">
                                            <img class="card-img-top"
                                                src="{{ asset($product->image ?? 'assets/backend/images/ui-cards/ui-cards-1.jpg') }}"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <input id="item-per-unit-price-id-{{ $product->id }}" type="hidden"
                                                    value="{{ $product->price }}">
                                                <h5 class="card-title font-18" id="item-name-id-{{ $product->id }}">
                                                    {{ $product->name }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- End col -->
                            </div>
                        </div>
                        <!-- Product End -->
                    @endforeach
                </div>
            </div>
            <!-- End col -->
            <!-- Start col -->
            <div class="col-lg-3 col-xl-3">
                <div class="bill-area card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Bill</h5>
                    </div>

                    <div class="card-body">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                            <div class="text-center pb-0 px-0">
                                <div class="table-responsive m-b-30">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>QTY</th>
                                                <th>Action</th>
                                                <th>NAME</th>
                                                <th>PRICE</th>
                                                <th>৳</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-body">

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col">Total</th>
                                                <th scope="col" id="total-price">00৳</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <hr>
                                    <div class="card-body">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3"
                                                    style="background-color: #752323">Paid Amount</span>
                                            </div>
                                            <input type="text" class="form-control" id="paid_amount"
                                                aria-describedby="basic-addon3">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Name</span>
                                            </div>
                                            <input type="text" class="form-control" id="customer"
                                                aria-describedby="basic-addon3">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Phone</span>
                                            </div>
                                            <input type="text" class="form-control" id="phone"
                                                aria-describedby="basic-addon3">
                                        </div>
                                        <button type="button" id="" onclick="storeInvoice()"
                                            class="btn btn-success btn-lg btn-block">Confirm Sell</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
    <!-- End Contentbar -->

    <!-- Modal -->
<div class="modal fade" id="modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>

@endsection
@push('script')
    <script>
        //Add selected items in table for calculation
        function addItem(id) {

            if ($("#table-item-id-" + id).length > 0) {

                if (parseInt(document.getElementById('item-quantity-id-' + id).innerHTML) > parseInt(document
                        .getElementById('table-item-id-qty-' + id).innerHTML)) {
                    document.getElementById('table-item-id-qty-' + id).innerHTML = parseInt(document.getElementById(
                        'table-item-id-qty-' + id).innerHTML) + 1;
                    // Auto update price with incease quantity
                    document.getElementById("table-item-id-price-" + id).innerHTML =
                        parseInt(document.getElementById('item-id-unit-price-' + id).value) *
                        parseInt(document.getElementById('table-item-id-qty-' + id).innerHTML);
                    //Total calculate with increase
                    totalPrice()

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'There is no enough products!',
                        footer: 'Please collect this item first.'
                    })
                }
            } else {
                //jQuery append row in table
                $('#table-body').append('' +
                    '' +
                    '<tr  id="table-item-id-' + id + '">\n' +
                    '                                        <td id="table-item-id-qty-' + id +
                    '" style="text-align:center; vertical-align: middle">1</td>\n' +
                    '                                        <td scope="row" id="table-item-id-qty-btn-' + id +
                    '">' +
                    '<button type="button" class="btn btn-round btn-outline-success" onclick="addItem(' + id +
                    ')"><i class="feather icon-plus-circle"></i></button>' +
                    '<button type="button" class="btn btn-round btn-outline-danger" onclick="removeItem(' + id +
                    ')"><i class="feather icon-minus-circle"></i></button>' +
                    '</td>\n' +
                    '                                        <td id="table-item-id-name-' + id +
                    '"> <input id="ids" type="hidden" value="' + id + '">' + document.getElementById(
                        'item-name-id-' + id).innerHTML + '</td>\n' +
                    '                                        <td id="table-item-id-unit-price-' + id +
                    '">' + document.getElementById(
                        'item-per-unit-price-id-' + id).value + '</td>\n' +
                    '                                        <td id="table-item-id-price-' + id + '">' + document
                    .getElementById(
                        'item-per-unit-price-id-' + id).value + '</td>\n' +
                    '                                    </tr>' +
                    '' +
                    '');
            }
        }

        //checkVariations
        function checkVariations(id) {
            getVariationsOfThisProduct(id);
        }

        //Get Variations Of This Product
        function getVariationsOfThisProduct(id) {
            $.getJSON('/get-variations-by-product/'+id, function (data) {
                // console.log(data.variation_categories.length)
                if(data.variation_categories.length > 0){
                    //if has variation categories more than zero
                    $('#modal').modal('show');
                    var ready_table = '';
                    data.variation_categories.forEach(function(variation_category){
                        ready_table += ''+
                        ' <div class="card m-b-30">'+
                        '<div class="card-header">'+
                        ' <h5 class="card-title">'+variation_category.name+'</h5>'+
                        '</div>'+
                        ' <div class="card-body">'+
                        '<div class="table-responsive">'+
                        '<table class="table">'+
                        '<thead>'+
                        ' <tr>'+
                        ' <th scope="col">#</th>'+
                        ' <th scope="col">First</th>'+
                        '<th scope="col">Last</th>'+
                        ' <th scope="col">Handle</th>'+
                        ' </tr>'+
                        '</thead>'+
                        '<tbody>'+

                        '</tbody>'+
                        '</table>'+
                        '</div>'+
                        '</div>'+
                        ' </div>';
                    });
                    $('#modal-body').html(ready_table);
                }

            })
        }


    </script>
@endpush

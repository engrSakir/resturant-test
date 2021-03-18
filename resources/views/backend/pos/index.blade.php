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
                                    <div class="col-md-6 col-lg-6 col-xl-3 text-center product-items mb-3"
                                        onclick="getVariationsOfThisProduct({{ $product->id }})">
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
                                    <table class="table table-hover ">
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
                                            {{--data stored by javascript--}}
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
                                                <span class="input-group-text">Name<span class="text-danger">*</span></span>
                                            </div>
                                            <input type="text" class="form-control" id="name" >
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Phone</span>
                                            </div>
                                            <input type="text" class="form-control" id="phone" >
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Email</span>
                                            </div>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Vat (%)</span>
                                            </div>
                                            <input type="number" class="form-control" id="vat">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Discount</span>
                                                    </div>
                                                    <input type="number" class="form-control" id="discount">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Type</span>
                                                    </div>
                                                    <select class="form-control" name="discount_type" id="discount_type">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="percentage">Percentage</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-success btn-lg btn-block  order-now-btn">Confirm Sell</button>
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
    <div class="modal fade" id="modal" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="invoiceShowModal" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="invoiceShowModalBody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                document.getElementById('table-item-id-qty-' + id).innerHTML = parseInt(document.getElementById(
                    'table-item-id-qty-' + id).innerHTML) + 1;

                // Auto update price with incease quantity
                document.getElementById("table-item-id-price-" + id).innerHTML =
                    parseInt(document.getElementById('table-item-id-unit-price-' + id).innerHTML) *
                    parseInt(document.getElementById('table-item-id-qty-' + id).innerHTML);
                //Total calculate with increase
                totalPrice()

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
                    '"> <input class="product_ids" type="hidden" value="' + id + '">' + document.getElementById(
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
                totalPrice()
            }
        }

        //Add selected items in table for calculation with variation
        function addItemWithVariation(product_id, variation_id) {
            if ($("#table-variation-id-" + variation_id).length > 0) {

                document.getElementById('table-variation-id-qty-' + variation_id).innerHTML = parseInt(document.getElementById(
                    'table-variation-id-qty-' + variation_id).innerHTML) + 1;

                // Auto update price with incease quantity
                document.getElementById("table-variation-id-price-" + variation_id).innerHTML =
                    parseInt(document.getElementById('table-variation-id-unit-price-' + variation_id).innerHTML) *
                    parseInt(document.getElementById('table-variation-id-qty-' + variation_id).innerHTML);
                //Total calculate with increase
                totalPrice()

            } else {
                //jQuery append row in table
                $('#table-body').append('' +
                    '' +
                    '<tr  id="table-variation-id-' + variation_id + '">\n' +
                    '                                        <td id="table-variation-id-qty-' + variation_id +
                    '" style="text-align:center; vertical-align: middle">1</td>\n' +
                    '                                        <td scope="row" id="table-variation-id-qty-btn-' + variation_id +
                    '">' +
                    '<button type="button" class="btn btn-round btn-outline-success" onclick="addItemWithVariation(' + product_id +','+variation_id+
                    ')"><i class="feather icon-plus-circle"></i></button>' +
                    '<button type="button" class="btn btn-round btn-outline-danger" onclick="removeItemWithVariation(' + variation_id +
                    ')"><i class="feather icon-minus-circle"></i></button>' +
                    '</td>\n' +
                    '                                        <td id="table-variation-id-name-' + variation_id +
                    '"> <input class="variation_ids" type="hidden" value="' + variation_id + '">'+

                     document.getElementById('item-name-id-' + product_id).innerHTML +
                    '('+
                     document.getElementById('variation-name-id-' + variation_id).innerHTML +
                    ')'+

                    '</td>\n' +
                    '                                        <td id="table-variation-id-unit-price-' + variation_id +
                    '">' + document.getElementById(
                        'variation-per-unit-price-id-' + variation_id).innerHTML + '</td>\n' +
                    '                                        <td id="table-variation-id-price-' + variation_id + '">' + document
                        .getElementById(
                            'variation-per-unit-price-id-' + variation_id).innerHTML + '</td>\n' +
                    '                                    </tr>' +
                    '' +
                    '');
                totalPrice()
                // totalPriceWithVariation()

            }
        }


        //Auto total Calculation
        function totalPrice(){
            var records = document.getElementById('table-body').rows, i, total = 0, price;
            for (i = 0; i < records.length; i++) {
                price = parseFloat(records[i].cells[4].innerHTML);
                total += price;
            }
            total = total.toFixed(2);
            document.getElementById('total-price').innerHTML = total;
        }

        //Remove Item from table
        function removeItem(id){
            if($("#table-item-id-"+id).length > 0)
            {
                if (parseInt(document.getElementById('table-item-id-qty-'+id).innerHTML) <= 1){
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Do you want to remove this item !",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, remove it!'
                    }).then((result) => {
                        if (result.value) {
                            var row = document.getElementById('table-item-id-'+id+'');
                            row.parentNode.removeChild(row);
                            //Update total ptice
                            totalPrice()
                            Swal.fire(
                                'Removed!',
                                'Your item has been removed.',
                                'success'
                            )
                        }
                    })

                }else{
                    //Decrease quantity
                    document.getElementById('table-item-id-qty-'+id).innerHTML = parseInt(document.getElementById('table-item-id-qty-'+id).innerHTML) - 1;
                    // Auto update price with descrease quantity
                    document.getElementById("table-item-id-price-"+id).innerHTML =
                        parseInt(document.getElementById('table-item-id-unit-price-'+id).innerHTML)
                        *
                        parseInt(document.getElementById('table-item-id-qty-'+id).innerHTML);
                    //Total calculate with descrease
                    totalPrice()
                }
            }
        }

        //Remove Item from table WithVariation
        function removeItemWithVariation(variation_id){
            if($("#table-variation-id-"+variation_id).length > 0)
            {
                if (parseInt(document.getElementById('table-variation-id-qty-'+variation_id).innerHTML) <= 1){
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Do you want to remove this item !",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, remove it!'
                    }).then((result) => {
                        if (result.value) {
                            var row = document.getElementById('table-variation-id-'+variation_id+'');
                            row.parentNode.removeChild(row);
                            //Update total ptice
                            totalPrice()
                            Swal.fire(
                                'Removed!',
                                'Your item has been removed.',
                                'success'
                            )
                        }
                    })

                }else{
                    //Decrease quantity
                    document.getElementById('table-variation-id-qty-'+variation_id).innerHTML = parseInt(document.getElementById('table-variation-id-qty-'+variation_id).innerHTML) - 1;
                    // Auto update price with descrease quantity
                    document.getElementById("table-variation-id-price-"+variation_id).innerHTML =
                        parseInt(document.getElementById('table-variation-id-unit-price-'+variation_id).innerHTML)
                        *
                        parseInt(document.getElementById('table-variation-id-qty-'+variation_id).innerHTML);
                    //Total calculate with descrease
                    totalPrice()
                }
            }
        }

        //Get Variations Of This Product
        function getVariationsOfThisProduct(id) {
            $.getJSON('/get-variations-by-product/' + id, function(data) {
                // console.log(data.variation_categories.length)
                if (data.variation_categories.length > 0) {
                    //if has variation categories more than zero

                    var ready_table = '';
                    var tr = "";
                    var check_variation = null;
                    data.variation_categories.forEach(function(variation_category) {
                        variation_category.variations.forEach(function(variation){
                            tr +='<tr class="bg-ganger">'+
                                '<td id="variation-name-id-'+variation.id+'">'+variation.name+'</td>'+
                                '<td scope="col">'+
                                '<button type="button" class="btn btn-round btn-outline-success" onclick="addItemWithVariation(' + id +','+variation.id+
                                ')"><i class="feather icon-plus-circle"></i></button>' +
                                '<button type="button" class="btn btn-round btn-outline-danger" onclick="removeItemWithVariation(' + variation.id +
                                ')"><i class="feather icon-minus-circle"></i></button>' +
                                '</td>' +
                                '<td id="variation-per-unit-price-id-'+variation.id+'">'+variation.price+'</td>'+
                                '</tr>';
                            });
                        //If has variations than show variation caregory name
                        if( variation_category.variations.length > 0){
                        check_variation = true;
                        ready_table += '' +
                            '<div class="card m-b-30">' +
                                '<div class="card-header bg-danger">' +
                                    '<h5 class="card-title">' + variation_category.name + '</h5>' +
                                '</div>' +
                                '<div class="card-body">' +
                                    '<div class="table-responsive">' +
                                        '<table class="table">' +
                                            '<thead>' +
                                                '<tr>' +
                                                    '<th scope="col">Name</th>' +
                                                    '<th scope="col">QT</th>' +
                                                    '<th scope="col">Price</th>' +
                                                '</tr>' +
                                            '</thead>' +
                                            '<tbody>' +
                                                tr +
                                            '</tbody>' +
                                        '</table>' +
                                    '</div>' +
                                '</div>' +
                            '</div>';
                        }
                    });
                    if(check_variation == true){
                        $('#modal').modal('show');
                        $('#modal-body').html(ready_table);
                    }else{
                        Swal.fire({
                            title: 'No variation exists for this item. Please add vatiation to the category.',
                            showClass: {
                                popup: 'animate__animated animate__fadeInDown'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__fadeOutUp'
                            }
                        });
                    }
                }else{
                    addItem(id);
                }
            });
        }
    </script>
    <script>
        $(document).ready(function () {
            $('.order-now-btn').on('click', function() {
                var product_ids = $(".product_ids")
                var product_quantities = [];
                var product_ids_arr = [];
                for(var i = 0; i < product_ids.length; i++){
                    product_quantities.push($('.bill-area').find('#table-item-id-qty-'+$(product_ids[i]).val()).text());
                    product_ids_arr.push($(product_ids[i]).val());
                }

                var variation_ids = $(".variation_ids")
                var variation_quantities = [];
                var variation_ids_arr = [];
                for(var i = 0; i < variation_ids.length; i++){
                    variation_quantities.push($('.bill-area').find('#table-variation-id-qty-'+$(variation_ids[i]).val()).text());
                    variation_ids_arr.push($(variation_ids[i]).val());
                }


                var formData = new FormData();
                formData.append('name', $('#name').val())
                formData.append('email', $('#email').val())
                formData.append('phone', $('#phone').val())
                formData.append('discount', $('#discount').val())
                formData.append('discount_type', $('#discount_type').val())
                formData.append('vat', $('#vat').val())
                formData.append('products', product_ids_arr)
                formData.append('product_quantities', product_quantities)
                formData.append('variations', variation_ids_arr)
                formData.append('variation_quantities', variation_quantities)
                formData.append('total_price', $('#total-price').text())

                var this_button = $(this);

                $.ajax({
                    method: 'POST',
                    url: "{{ route('posStore') }}",
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
                        if(response_data.type == 'success'){
                            $('#invoiceShowModal').modal('show');
                            var linkHtml = '<div class="text-center" style="width: 100%; text-align: center;">' +
                                '          <button  style="width: 100%; text-align: center" type="submit" class="btn btn-warning btn-lg btn-block"> <i class="fa fa-edit"></i> এডিট করুন</button>' +
                                '          </div>'+
                                '<embed src="'+response_data.invoice_url+'" width="100%" height="400px">';
                            $("#invoiceShowModalBody").html(linkHtml)

                            Swal.fire({
                                position: 'top-end',
                                icon: response_data.type,
                                title: response_data.message,
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }else{
                            Swal.fire({
                                icon: response_data.type,
                                title: 'Oops...',
                                text: response_data.message,
                                footer: 'Something went wrong!'
                            });
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
        });
    </script>
@endpush

<html>
<head>
    <meta name="description" content="{{ $meta_description  ?? get_static_option('meta_description') }}">
    <meta name="author" content="{{ $meta_author ?? get_static_option('meta_author') ?? config('app.name') }}">
    <meta property="og:image" content="{{ $meta_image ?? get_static_option('frontend_logo') ?? get_static_option('no_image')}}" />
    <title> {{  __('Invoice:') }} #{{ $invoice->invoice_id }} | {{ config('app.name') }}</title>
    <link href="{{ asset('assets/pdf/css/style.css') }}" rel="stylesheet" type="text/css">
    <style>
        @page {
            header: page-header;
            footer: page-footer;
        }
    </style>
</head>
<body>
{{--  Head  --}}
<htmlpageheader name="page-header">
    <div style="text-align: center; width: 100%;" class="brand1">
        <b style="font-size: 10px; color:white">{{ __('Invoice') }} &nbsp; #{{ $invoice->invoice_id }}</b>
    </div>
</htmlpageheader>
{{--  Company Identity  --}}
<div style="width: 100%; height: 0.5cm;">
    <table class="table">
        <tbody>
        <tr>
            <th style="width: 50%;"><a target="_blank" href="http://datatechbd.com/"><img src="{{ get_static_option('website_logo') }}" alt=""></a></th>
            <th style="width: 50%;">
                <table style="text-align: left;">
                    <tbody>
                    <tr>
                        <th  style="width: 30%;  text-align: left">Website</th>
                        <th  style="width: 50%;  text-align: left">datatechbd.com</th>
                    </tr>
                    <tr>
                        <th  style="width: 30%; text-align: left">Email</th>
                        <th  style="width: 50%; text-align: left">info@datatechbd.com</th>
                    </tr>
                    <tr>
                        <th  style="width: 30%; text-align: left">Phone</th>
                        <th  style="width: 50%; text-align: left">+880 1304-734623</th>
                    </tr>
                    </tbody>
                </table>
            </th>
        </tr>
        </tbody>
    </table>
    <p style="width: 100%; margin-top: -3px; text-align: center;" class="brand2"><a target="_blank" href="https://g.page/datatech-bd-ltd--dhaka?share" style="color: white; text-decoration: none; font-size: small; ">{{ 'Shawpno Neer, 272/Kha/3/F, West Agargaon, She-E-Bangla Nagar, Dhaka-1207' }}</a></p>
</div>
{{--  Body  --}}
<div style="text-align: center; width: 100%;" class="brand1">
    <b style="font-size: 14px; color:white">Invoice for:</b>
    @if($invoice->customer)
        <b style="font-size: 14px; color:white">{{ $invoice->customer->name }}</b>
        <b style="font-size: 14px; color:white">{{ $invoice->customer->email }}</b>
        <b style="font-size: 14px; color:white">{{ $invoice->customer->phone }}</b>
    @endif
    @if($invoice->guest_email)
        <b style="font-size: 14px; color:white">{{ $invoice->guest_email }}</b>
    @endif
    @if($invoice->guest_phone)
        <b style="font-size: 14px; color:white">{{ $invoice->guest_phone }}</b>
    @endif

</div>
<div style="background-color: whitesmoke; width: 100%; height: 100%;">
    @if($invoice->product)
        <b>{{ $invoice->product->name }}</b>
        <div class="hr2"></div>
        {!! $invoice->product_note !!}
        <br>
    @endif
    @if($invoice->service)
        @if($invoice->product) <br> <br> @endif
        <b>{{ $invoice->service->name }}</b>
        <div class="hr2"></div>
        {!! $invoice->service_note !!}
        <br>
    @endif

    @if($invoice->other_note)
        @if($invoice->product || $invoice->product) <br> <br> @endif
        {!! $invoice->other_note !!}
        <br>
    @endif
    <div class="hr2"></div>
    <div class="hr3"></div>
    <table style="width: 100%">
        <tr>
            <td style="width: 50%">

            </td>
            <td style="width: 50%">
                <table style="width: 100%">
                    <tr>
                        <td style="width: 50%">Total:</td>
                        <td style="width: 50%">{{ $invoice->product_price + $invoice->service_price + $invoice->other_price }}</td>
                    </tr>
                    <tr>
                        <td style="width: 50%">Paid:</td>
                        <td style="width: 50%">{{ $invoice->payments }}</td>
                    </tr>
                    <tr>
                        <td style="width: 50%">Due:</td>
                        <td style="width: 50%; font-size: large; color: red">{{ $invoice->product_price + $invoice->service_price + $invoice->other_price - $invoice->payments }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    @if( $invoice->product_price + $invoice->service_price + $invoice->other_price - $invoice->payments > 0)
        <p class="price-box">Please clear due payment: {{ $invoice->product_price + $invoice->service_price + $invoice->other_price - $invoice->payments }} ৳</p>
    @else
        <p class="price-box"><b>Thank You for due clear</b></p>
    @endif
</div>
{{--  Foot and contact info  --}}
<htmlpagefooter name="page-footer">
    <div style="text-align: center; width: 100%;" class="brand1">
        <b style="font-size: 20px; color:white">{{ config('app.name') }}</b>
    </div>
</htmlpagefooter>
</body>
</html>

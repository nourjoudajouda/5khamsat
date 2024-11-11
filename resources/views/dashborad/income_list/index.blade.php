@extends('layouts.dashborad')
@section('css')
    <style>
        .block_invoice {
            background: #f8f8f8;
            width: 100%;
            height: 50px;
            display: flex;
            border-radius: 5px;
            gap: 100px;
            padding: 10px;
        }
    </style>
    <style>
        .toast-success div,
        .toast-warning div {
            position: relative;
            left: -30px;
            top: 2px;
        }
    </style>
@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-5 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('common.income list') }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('common.home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/income_list') }}">
                                            {{ __('common.income list') }}
                                        </a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-7 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <form id="FormFilter" action="javascript:void(0)">
                                @csrf
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <label for=""
                                                class="col-sm-2 col-form-label">{{ __('common.form') }}:</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="date_from" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <label for=""
                                                class="col-sm-2 col-form-label">{{ __('common.to') }}:</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="date_to" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-primary" id="filter_btn">{{ __('common.filter') }}</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tabs starts -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                        aria-controls="home" role="tab"
                                        aria-selected="true">{{ __('common.National_Identity') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                        aria-controls="profile" role="tab"
                                        aria-selected="false">{{ __('common.freelance_work') }}</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
                                    <!-- Basic Tables start -->
                                    <div class="row" id="basic-table">
                                        <div class="col-12">
                                            <div class="card">

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th> {{ __('common.name_vendor') }}</th>
                                                                <th> {{ __('common.total') }}</th>
                                                                <th>{{ __('common.invoices') }}</th>
                                                                <th>{{ __('common.action') }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="menu_vendors">
                                                            @foreach ($national_identity as $item)
                                                                <tr id="tr-{{ $item->id }}">
                                                                    <td>
                                                                        {{ $item->name }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $item->orders_sum_final_price }}
                                                                    </td>
                                                                    <td><span
                                                                            class="badge badge-pill badge-light-success mr-1"
                                                                            data-toggle="modal"
                                                                            data-target="#national_identity{{ $item->id }}">{{ $item->orders_count }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <a href="{{ url('export_excel' . '/' . $item->id) }}">
                                                                            <span class="iconify"
                                                                                style="color: #32c975;font-size: 25px;"
                                                                                data-icon="akar-icons:cloud-download"></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <!-- Modal -->
                                                                <div class="modal fade text-left"
                                                                    id="national_identity{{ $item->id }}"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document"
                                                                        style="max-width:750px;">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="myModalLabel1">
                                                                                    {{ __('common.invoices') }}</h4>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row"
                                                                                    style="overflow-y: scroll;height: 250px;">
                                                                                    <div class="col-12">
                                                                                        @foreach ($item->orders as $order)
                                                                                            <div
                                                                                                class="block_invoice pt-1">
                                                                                                <h6>#:
                                                                                                    {{ $order->order_no }}
                                                                                                </h6>
                                                                                                <h6>{{ __('common.Invoice') }}:
                                                                                                    {{ $order->invoice_no }}
                                                                                                </h6>
                                                                                                <h6>{{ __('common.name_client') }}:
                                                                                                    {{ $order->users->name }}
                                                                                                </h6>
                                                                                                <h6>{{ __('common.amount') }}:
                                                                                                    ${{ $order->final_price }}
                                                                                                </h6>
                                                                                            </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    data-dismiss="modal">{{ __('common.cancel') }}</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Basic Tables end -->
                                </div>
                                <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                                    <!-- Basic Tables start -->
                                    <div class="row" id="basic-table">
                                        <div class="col-12">
                                            <div class="card">

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th> {{ __('common.name_vendor') }}</th>
                                                                <th> {{ __('common.total') }}</th>
                                                                <th>{{ __('common.invoices') }}</th>
                                                                <th>{{ __('common.action') }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="menu_vendors">
                                                            @foreach ($freelance_work as $item)
                                                                <tr id="tr-{{ $item->id }}">
                                                                    <td>
                                                                        {{ $item->name }}
                                                                    </td>
                                                                    <td>
                                                                        @if ($item->orders_sum_final_price > 0)
                                                                            {{ $item->orders_sum_final_price }}
                                                                        @else
                                                                            $0
                                                                        @endif
                                                                    </td>
                                                                    <td><span
                                                                            class="badge badge-pill badge-light-secondary mr-1"
                                                                            data-toggle="modal"
                                                                            data-target="#national_identity{{ $item->id }}">{{ $item->orders_count }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <a
                                                                            href="{{ url('export_excel' . '/' . $item->id) }}">
                                                                            <span class="iconify"
                                                                                style="color: #32c975;font-size: 25px;"
                                                                                data-icon="akar-icons:cloud-download"></span>
                                                                        </a>
                                                                    </td>

                                                                </tr>
                                                                <!-- Modal -->
                                                                <div class="modal fade text-left"
                                                                    id="national_identity{{ $item->id }}"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document"
                                                                        style="max-width:750px;">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title"
                                                                                    id="myModalLabel1">
                                                                                    {{ __('common.invoices') }}</h4>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row"
                                                                                    style="overflow-y: scroll;height: 250px;">
                                                                                    <div class="col-12">
                                                                                        @foreach ($item->orders as $order)
                                                                                            <div
                                                                                                class="block_invoice pt-1">
                                                                                                <h6>#:
                                                                                                    {{ $order->order_no }}
                                                                                                </h6>
                                                                                                <h6>{{ __('common.Invoice') }}:
                                                                                                    {{ $order->invoice_no }}
                                                                                                </h6>
                                                                                                <h6>{{ __('common.name_client') }}:
                                                                                                    {{ $order->users->name }}
                                                                                                </h6>
                                                                                                <h6>{{ __('common.amount') }}:
                                                                                                    ${{ $order->final_price }}
                                                                                                </h6>
                                                                                            </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-primary"
                                                                                    data-dismiss="modal">{{ __('common.cancel') }}</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Basic Tables end -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tabs ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('js')
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <script src="{{ url('dashborad/app-assets/js/scripts/components/components-bs-toast.js') }}"></script>
    <!-- END: Page JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on("click", "#filter_btn", function() {
                let form = $(this.form);
                console.log(form)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var postData = new FormData(this.form);
                $.ajax({
                    url: "{{ route('filter_invoices') }}",
                    type: "POST",
                    data: postData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.message === 'Success') {
                            $('.menu_vendors').empty();
                            document.getElementById("FormFilter").reset();
                            response.vendors.forEach(function(item) {
                                if (item.orders.length > 0) {
                                    item.orders.forEach(function(order) {
                                        $('.menu_vendors').empty();

                                        $('.menu_vendors').prepend(
                                            '<tr id="tr-' + item.id +
                                            '"><td><span class="font-weight-bold">' +
                                            item.name + '</span></td><td>' +
                                            item.orders_sum_final_price +
                                            '</td><td><span class="badge badge-pill badge-light-success mr-1" data-toggle="modal" data-target="#national_identity' +
                                            item.id + '">' + item
                                            .orders_count +
                                            '</span></td><td><a href="{{ url('export_excel') }}/' +
                                            item.id +
                                            '"><span class="iconify" style="color: #32c975;font-size: 25px;" data-icon="akar-icons:cloud-download"></span></a></td></tr>'
                                            )
                                        $('.menu_vendors').prepend(
                                            ' <div class="modal fade text-left" id="national_identity' +
                                            item.id +
                                            '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">' +
                                            '<div class="modal-dialog" role="document" style="max-width:750px;">' +
                                            '<div class="modal-content">' +
                                            '<div class="modal-header">' +
                                            '<h4 class="modal-title" id="myModalLabel1">{{ __('common.invoices') }}</h4>' +
                                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">' +
                                            '<span aria-hidden="true">&times;</span>' +
                                            '</button>' +
                                            '</div>' +
                                            '<div class="modal-body">' +
                                            '<div class="row" style="overflow-y: scroll;height: 250px;">' +
                                            '<div class="col-12">' +

                                            '<div class="block_invoice pt-1">' +
                                            '<h6>#: ' + order.order_no +
                                            '</h6>' +
                                            '<h6>{{ __('common.Invoice') }}: ' +
                                            order.invoice_no + '</h6>' +
                                            '<h6>{{ __('common.name_client') }}: ' +
                                            order.users.name + '</h6>' +
                                            '<h6>{{ __('common.amount') }}: $' +
                                            order.final_price + '</h6>' +
                                            '</div>' +
                                            '</div>' +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="modal-footer">' +
                                            '<button type="button" class="btn btn-primary" data-dismiss="modal">{{ __('common.cancel') }}</button>' +
                                            '</div>' +
                                            '</div>' +
                                            '</div>' +
                                            '</div>')

                                    })
                                } else {
                                    toastr.warning("{{ __('common.no_vendors') }}");
                                }

                            })
                            if (response.message === 'warning') {
                                toastr.warning("{{ __('common.no_vendors') }}");
                            }
                        }

                    },
                    error: function(e) {
                        toastr.warning("{{ __('common.no_vendors') }}");
                    }

                });
            });
        });
    </script>
@endsection

@extends('layouts.dashborad')
@section('content')


<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="invoice-preview-wrapper">
                <div class="row invoice-preview">
                    <!-- Invoice -->
                    <div class="col-xl-9 col-md-8 col-12">
                        <div class="card invoice-preview-card">
                            <div class="card-body invoice-padding pb-0">
                                <!-- Header starts -->
                                <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                    <div>
                                        <div class="logo-wrapper">
                                            <img src="{{asset('/public/dashborad/app-assets/images/logo.png')}}" />
                                        </div>
                                        <p class="card-text mb-25">
                                            @if(app()->getLocale()=='en')
                                            {{$settings->address_en}}
                                            @else
                                            {{$settings->address_ar}}
                                            @endif
                                        </p>
                                        <p class="card-text mb-25">{{$settings->email}}</p>
                                        <p class="card-text mb-0">{{$settings->mobile}}</p>
                                    </div>
                                    <div class="mt-md-0 mt-2">
                                        <h4 class="invoice-title">
                                            {{__('common.Invoice')}}:
                                            <span class="invoice-number">#{{$order->invoice_no}}</span>
                                        </h4>
                                        <div class="invoice-date-wrapper">
                                            <p class="invoice-date-title">{{__('common.created_at')}}:</p>
                                            <p class="invoice-date">{{ date('d-m-Y', strtotime($order->created_at)) }}</p>
                                        </div>
                                        <!-- <div class="invoice-date-wrapper">
                                            <p class="invoice-date-title">Due Date:</p>
                                            <p class="invoice-date">29/08/2020</p>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- Header ends -->
                            </div>

                            <hr class="invoice-spacing" />

                            <!-- Address and Contact starts -->
                            <div class="card-body invoice-padding pt-0">
                                <div class="row invoice-spacing">
                                    <div class="col-xl-8 p-0">
                                        <h6 class="mb-2">{{__('common.Invoice To')}}:</h6>
                                        <h6 class="mb-25">{{$order->users->name}}</h6>

                                        <p class="card-text mb-25">{{$order->users->mobile}}</p>
                                        <p class="card-text mb-0">{{$order->users->email}}</p>
                                    </div>
                                    <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                        <h6 class="mb-2">{{__('common.Payment Details')}}:</h6>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="pr-1">{{__('common.Total Due')}}:</td>
                                                    <td><span class="font-weight-bold">${{$order->final_price - ($order->value_added_tax + $order->incomming_tax + $order->system_commission + $order->shipping_cost)}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-1">{{__('common.Bank name')}}:</td>
                                                    <td>American Bank</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-1">{{__('common.country')}}:</td>
                                                    <td>United States</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-1">{{__('common.IBAN')}}:</td>
                                                    <td>ETD95476213874685</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-1">{{__('common.SWIFT code')}}:</td>
                                                    <td>BR91905</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Address and Contact ends -->

                            <!-- Invoice Description starts -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="py-1">{{__('common.name_product')}}</th>
                                            <th class="py-1">{{__('common.price')}}</th>
                                            <th class="py-1">{{__('common.Qty')}}</th>
                                            <th class="py-1">{{__('common.points')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $item)
                                        <tr>
                                            <td class="py-1">
                                                <a href="{{url(app()->getLocale().'/products/'.$item->products->id)}}">
                                                    <p class="card-text font-weight-bold mb-25">
                                                        @if(app()->getLocale()=='ar')
                                                        {{$item->products->name_ar}}
                                                        @else
                                                        {{$item->products->name_en}}
                                                        @endif
                                                    </p>
                                                </a>
                                                <!-- <p class="card-text">
                                                    @if(app()->getLocale()=='ar')
                                                    {{$item->products->description_ar}}
                                                    @else
                                                    {{$item->products->description_en}}
                                                    @endif
                                                </p> -->
                                            </td>
                                            <td class="py-1">
                                                <span class="font-weight-bold">${{$item->products->price}}</span>
                                            </td>
                                            <td class="py-1">
                                                <span class="font-weight-bold">{{$item->quantity}}</span>
                                            </td>
                                            <td class="py-1">
                                                <span class="font-weight-bold">{{$item->points}}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="card-body invoice-padding pb-0">
                                <div class="row invoice-sales-total-wrapper">
                                    <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                                        <!-- <p class="card-text mb-0">
                                            <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
                                        </p> -->
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
                                        <div class="invoice-total-wrapper">
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">{{__('common.points')}}:</p>
                                                <p class="invoice-total-amount">{{$order->order_details->sum('points')}}</p>
                                            </div>
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">{{__('common.total_order')}}:</p>
                                                <p class="invoice-total-amount">${{$order->total}}</p>
                                            </div>
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">{{__('common.income_tax')}}:</p>
                                                <p class="invoice-total-amount">${{$order->incomming_tax}}</p>
                                            </div>
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">{{__('common.value_added_tax')}}:</p>
                                                <p class="invoice-total-amount">${{$order->value_added_tax}}</p>
                                            </div>
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">{{__('common.system_commission')}}:</p>
                                                <p class="invoice-total-amount">${{$order->system_commission}}</p>
                                            </div>
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">{{__('common.shipping_cost')}}:</p>
                                                <p class="invoice-total-amount">${{$order->shipping_cost}}</p>
                                            </div>
                                            <hr class="my-50" />
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">{{__('common.total')}}:</p>
                                                <p class="invoice-total-amount">${{$order->total - ($order->value_added_tax + $order->incomming_tax + $order->system_commission + $order->shipping_cost)}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Invoice Description ends -->

                            <hr class="invoice-spacing" />

                            <!-- Invoice Note starts -->
                            <div class="card-body invoice-padding pt-0">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="font-weight-bold">Note:</span>
                                        <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
                                            projects. Thank You!</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Invoice Note ends -->
                        </div>
                    </div>
                    <!-- /Invoice -->

                    <!-- Invoice Actions -->
                    <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                        @can('roles.vendor')
                        <div class="card">
                            <div class="card-body">
                                <!-- <div class="d-flex justify-content-between" id="switch_activate" style="margin-bottom: 10px;">
                                    <label class="invoice-terms-title mb-0" for="paymentTerms">{{__('common.activate_order')}}</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" id="paymentTerms" class="custom-control-input toggle-class{{$order->id}}" data-id="{{$order->id}}" onclick="change_status({{$order->id}})" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $order->status ? 'checked' : '' }} />
                                        <label class="custom-control-label" for="paymentTerms"></label>
                                    </div>
                                </div>  -->

                                <button id="status_order" class="btn  @if($order->status == 0) btn-outline-info @elseif($order->status == 1) btn-outline-success @elseif($order->status == 2) btn-outline-primary @elseif($order->status == 3) btn-outline-danger @endif btn-block btn-download-invoice mb-75">
                                    @if($order->status == 0)
                                     {{__('common.new')}}
                                    @elseif($order->status == 1)
                                     {{__('common.accepted')}}
                                    @elseif($order->status == 2)
                                    {{__('common.finished')}}
                                    @elseif($order->status ==3)
                                    {{__('common.canceled')}}
                                    @endif
                                </button>
                                @if($order->status == 0)
                                <button onclick="change_status({{$order->id}})" id="btn_accept_order" class="btn btn-primary btn-block btn-download-invoice mb-75">
                                    {{__('common.order_accept')}}
                                </button>
                                @endif

                                @if($order->status != 3)
                                <div class="btn btn-outline-secondary btn-block mb-75" href="#cancel_order" role="button" data-toggle="modal">
                                    {{__('common.cancel_order')}}
                                </div>
                                @endif
                                <!-- <button class="btn btn-primary btn-block mb-75" data-toggle="modal" data-target="#send-invoice-sidebar">
                                    Send Invoice
                                </button> -->

                                <a class="btn btn-outline-warning btn-block mb-75" onclick="window.print();return false;" target="_blank">
                                    {{__('common.print_order')}}
                                </a>

                                <a class="btn btn-outline-danger btn-block mb-75" target="_blank" href="{{url(app()->getLocale().'/export_pdf_order/'.$order->id)}}"> {{__('common.export_as_pdf')}} </a>
                                <!-- <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#add-payment-sidebar">
                                    Add Payment
                                </button> -->
                            </div>
                        </div>
                        @endcan
                        @if($order->vendor_id != 0)
                        <div class="card">
                            <div class="card-body" style="text-align: center;line-height: 2;">
                                <div class="d-flex justify-content-between" id="switch_activate" style="margin-bottom: 10px;">
                                    <label class="invoice-terms-title mb-0">{{__('common.vendor_info')}}</label>
                                </div>

                                <div style="text-align:center">
                                    <img src="{{$order->vendors->data->ID_image}}" height="125px" width="70%" style="border-radius:50%;" />
                                    <div class="badge badge-pill badge-light-secondary mr-50">
                                        {{$order->vendors->name}}
                                    </div>
                                </div>

                                <div class="badge badge-pill badge-light-danger mr-50">
                                    {{$order->vendors->email}}
                                </div>

                                <div class="badge badge-pill badge-light-warning mr-50">
                                    {{$order->vendors->mobile}}
                                </div>


                            </div>
                        </div>
                        @endif
                    </div>
                    <!-- /Invoice Actions -->
                </div>
            </section>

            <!-- Send Invoice Sidebar -->
            <div class="modal modal-slide-in fade" id="send-invoice-sidebar" aria-hidden="true">
                <div class="modal-dialog sidebar-lg">
                    <div class="modal-content p-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title">
                                <span class="align-middle">Send Invoice</span>
                            </h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <form>
                                <div class="form-group">
                                    <label for="invoice-from" class="form-label">From</label>
                                    <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com" />
                                </div>
                                <div class="form-group">
                                    <label for="invoice-to" class="form-label">To</label>
                                    <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com" />
                                </div>
                                <div class="form-group">
                                    <label for="invoice-subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods" />
                                </div>
                                <div class="form-group">
                                    <label for="invoice-message" class="form-label">Message</label>
                                    <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="11" placeholder="Message...">
                                    Dear Queen Consolidated,

                                    Thank you for your business, always a pleasure to work with you!

                                    We have generated a new invoice in the amount of $95.59

                                    We would appreciate payment of this invoice by 05/11/2019</textarea>
                                </div>
                                <div class="form-group">
                                    <span class="badge badge-light-primary">
                                        <i data-feather="link" class="mr-25"></i>
                                        <span class="align-middle">Invoice Attached</span>
                                    </span>
                                </div>
                                <div class="form-group d-flex flex-wrap mt-2">
                                    <button type="button" class="btn btn-primary mr-1" data-dismiss="modal">Send</button>
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Send Invoice Sidebar -->

            <!-- Add Payment Sidebar -->
            <div class="modal modal-slide-in fade" id="add-payment-sidebar" aria-hidden="true">
                <div class="modal-dialog sidebar-lg">
                    <div class="modal-content p-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title">
                                <span class="align-middle">Add Payment</span>
                            </h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <form>
                                <div class="form-group">
                                    <input id="balance" class="form-control" type="text" value="Invoice Balance: 5000.00" disabled />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="amount">Payment Amount</label>
                                    <input id="amount" class="form-control" type="number" placeholder="$1000" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="payment-date">Payment Date</label>
                                    <input id="payment-date" class="form-control date-picker" type="text" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="payment-method">Payment Method</label>
                                    <select class="form-control" id="payment-method">
                                        <option value="" selected disabled>Select payment method</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Bank Transfer">Bank Transfer</option>
                                        <option value="Debit">Debit</option>
                                        <option value="Credit">Credit</option>
                                        <option value="Paypal">Paypal</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="payment-note">Internal Payment Note</label>
                                    <textarea class="form-control" id="payment-note" rows="5" placeholder="Internal Payment Note"></textarea>
                                </div>
                                <div class="form-group d-flex flex-wrap mb-0">
                                    <button type="button" class="btn btn-primary mr-1" data-dismiss="modal">Send</button>
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Add Payment Sidebar -->

        </div>
    </div>
</div>
<!-- END: Content-->
<!--Form cancel product -->
<div id="cancel_order" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                <h4 class="modal-title">
                    {{__('common.cancel_order')}}
                </h4>
            </div>
            <form id="FormCancelOrder" action="javascript:void(0)">
                @csrf
                <input name="order_id" value="{{$order->id}}" type="hidden" />
                <div class="modal-body">
                    <div class="form-group">
                        <label for="account-name">{{__('common.notes')}}</label>
                        <textarea type="text" class="form-control" id="notes" placeholder="{{__('common.notes')}}" name="notes" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn default" data-dismiss="modal" aria-hidden="true">{{__('common.cancel')}}</button>
                    <button class="btn btn-secondary" id="cancel_order_btn">{{__('common.cancel_order')}}</button>
                </div>
            </form>
        </div>
    </div> 
</div>
<!-- End cancel product -->
@endsection
@section('js')
<script src="{{url('public/dashborad/app-assets/js/scripts/components/components-bs-toast.js')}}"></script>
<!-- END: Page JS-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    function change_status(id) {
        var status = 1;
        var order_id = id;
        var final_price = {{$order->final_price}};
        var value_added_tax = {{$order->value_added_tax}};
        var incomming_tax = {{$order->incomming_tax}};
        var system_commission = {{$order->system_commission}};
        var costs = Number(incomming_tax) + Number(value_added_tax) + Number(system_commission);
        var profit = final_price - costs;
        Swal.fire({
        title: '{{__('common.warning')}}!',
        text: "",
        html:
        '{{__('common.note_accept_order')}}<br/><br/>{{__('common.final_order_price')}}: <b>'+final_price+'</b><br/><br/>' +
        '<table class="table">'+
            '<thead>'+
                '<tr>'+
                    '<th>{{__('common.cost')}}</th>'+
                    '<th> {{__('common.amount')}}</th>'+
                '</tr>'+
            '</thead>'+
            '<tbody>'+
                '<tr>'+
                    '<td>{{__('common.system_commission')}}</td>'+
                    '<td>'+system_commission+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>{{__('common.value_added_tax')}}</td>'+
                    '<td>'+value_added_tax+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>{{__('common.income_tax')}}</td>'+
                    '<td>'+incomming_tax+'</td>'+
                '</tr>'+
            '</tbody>'+
            '<tfoot>'+
                '<tr>'+
                    '<th>{{__('common.profit')}}</th>'+
                    '<th>'+ profit +'</th>'+
                '</tr>'+
            '</tfoot>'+
        '</table>',
        icon: 'warning',
        // showCancelButton: true,
        confirmButtonText: '{{__('common.accept')}}',
        customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-outline-danger ml-1'
        },
        buttonsStyling: false
        }).then(function (result) {
        if (result.value) {
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{url(app()->getLocale()."/change_status_order")}}',
                    data: {
                        'status': status,
                        'order_id': order_id
                    },
                    success: function(data) {
                        console.log(data.success)
                            Swal.fire({
                            icon: 'success',
                            title: '{{__('common.order_accepted')}}',
                            customClass: {
                                confirmButton: 'btn btn-success'
                            }
                        });
                        $('#status_order').removeClass('btn-info');
                        $('#status_order').addClass('btn-success');
                        $("#btn_accept_order").css("display", "none");
                        $('#status_order').text('{{__('common.status_order')}} : {{__('common.accepted')}}')
                    }
                });
                
            } 
            
        });
    }

    $(function() {
        $('.close').click(function() {
            $(".toast-basic").removeClass("show");
            $(".toast-basic").addClass("hide");
        })
    })
</script>

<script>
    $(document).ready(function() {
        $(document).on("click", "#cancel_order_btn", function() {
            let form = $(this.form);
            console.log(form)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var postData = new FormData(this.form);
            $.ajax({
                url: "{{ route('cancel_order')}}",
                type: "POST",
                data: postData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.message === 'Success') {
                        document.getElementById("FormCancelOrder").reset();
                        $('#cancel_order').modal('toggle');
                        $('#status_order').removeClass('btn-info');
                        $('#status_order').addClass('btn-danger');
                        $('#status_order').text('{{__('common.status_order')}} : {{__('common.canceled')}}')
                        $('#switch_activate').removeClass('d-flex ');
                        $('#switch_activate').css('display', 'none')

                        //swal("القضية حذفت!", {icon: "success"});
                    }
                }

            });
        });
    });
</script>
@endsection
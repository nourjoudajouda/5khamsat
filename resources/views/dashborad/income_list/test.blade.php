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
        
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> {{__('common.name_vendor')}}</th>
                                        <th> {{__('common.total')}}</th>
                                        <th>{{__('common.invoices')}}</th>
                                    </tr>
                                </thead>
                                <tbody class="menu_vendors">
                                    <tr id="tr-{{$item->id}}">
                                        <td>
                                            {{ $item->name}}
                                        </td>
                                        <td>
                                            {{ $item->orders_sum_final_price}}
                                        </td>
                                        <td><span class="badge badge-pill badge-light-success mr-1" data-toggle="modal" data-target="#national_identity{{$item->id}}">{{ $item->orders_count }}</span></td>

                                    </tr>
                                   
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
<!-- END: Content-->

@endsection
@section('js')

@endsection
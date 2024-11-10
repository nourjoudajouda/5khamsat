<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .text-secondary-d1 {
            color: #728299 !important;
        }

        .page-header {
            margin: 0 0 1rem;
            padding-bottom: 1rem;
            padding-top: .5rem;
            border-bottom: 1px dotted #e2e2e2;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-align: center;
            align-items: center;
        }

        .page-title {
            padding: 0;
            margin: 0;
            font-size: 1.75rem;
            font-weight: 300;
        }

        .brc-default-l1 {
            border-color: #dce9f0 !important;
        }

        .ml-n1,
        .mx-n1 {
            margin-left: -.25rem !important;
        }

        .mr-n1,
        .mx-n1 {
            margin-right: -.25rem !important;
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, .1);
        }

        .text-grey-m2 {
            color: #888a8d !important;
        }

        .text-success-m2 {
            color: #86bd68 !important;
        }

        .font-bolder,
        .text-600 {
            font-weight: 600 !important;
        }

        .text-110 {
            font-size: 110% !important;
        }

        .text-blue {
            color: #478fcc !important;
        }

        .pb-25,
        .py-25 {
            padding-bottom: .75rem !important;
        }

        .pt-25,
        .py-25 {
            padding-top: .75rem !important;
        }

        .bgc-default-tp1 {
            background-color: rgba(121, 169, 197, .92) !important;
        }

        .bgc-default-l4,
        .bgc-h-default-l4:hover {
            background-color: #f3f8fa !important;
        }

        .page-header .page-tools {
            -ms-flex-item-align: end;
            align-self: flex-end;
        }

        .btn-light {
            color: #757984;
            background-color: #f5f6f9;
            border-color: #dddfe4;
        }

        .w-2 {
            width: 1rem;
        }

        .text-120 {
            font-size: 120% !important;
        }

        .text-primary-m1 {
            color: #4087d4 !important;
        }

        .text-danger-m1 {
            color: #dd4949 !important;
        }

        .text-blue-m2 {
            color: #68a3d5 !important;
        }

        .text-150 {
            font-size: 150% !important;
        }

        .text-60 {
            font-size: 60% !important;
        }

        .text-grey-m1 {
            color: #7b7d81 !important;
        }

        .align-bottom {
            vertical-align: bottom !important;
        }
    </style>
</head>

<body>

    <div class="page-content container">
        <div class="page-header text-blue-d2">
            <h1 class="page-title text-secondary-d1">
                Order
                <small class="page-info">
                    <i class="fa fa-angle-double-right text-80"></i>
                    ID:#{{$order->id}}
                </small>
            </h1>

        
        </div>

        <div class="container px-0">

            <!-- or use a table instead -->
            <div class="table-responsive">
                <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                    <thead class="bg-none bgc-default-tp1">
                        <tr class="text-white">
                            <th class="opacity-2">#</th>
                            <th>{{__('common.name')}}</th>
                            <th>{{__('common.Qty')}}</th>
                            <th>{{__('common.price')}}</th>
                        </tr>
                    </thead>

                    <tbody class="text-95 text-secondary-d3">
                        @foreach($data as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->products->name_en}}</td>
                            <td>{{$item->quantity}}</td>
                            <td class="text-95">${{$item->price}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            <div class="row mt-3">
              

                <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                    <div class="row my-2">
                        <div class="col-7 text-right">
                            SubTotal
                        </div>
                        <div class="col-5">
                            <span class="text-120 text-secondary-d1">${{$order->order_details->sum('price')}}</span>
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col-7 text-right">
                            Tax 
                        </div>
                        <div class="col-5">
                            <span class="text-110 text-secondary-d1">${{$order->order_details->sum('discount')}}</span>
                        </div>
                    </div>

                    <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                        <div class="col-7 text-right">
                            Total Amount
                        </div>
                        <div class="col-5">
                            <span class="text-150 text-success-d3 opacity-2">${{$order->order_details->sum('price') - $order->order_details->sum('discount')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

</body>

</html>
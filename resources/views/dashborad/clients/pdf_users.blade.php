<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users</h4>
                        </div>
                            
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{__('common.name')}}</th>
                                        <th>{{__('common.image')}}</th>
                                        <th>{{__('common.email')}}</th>
                                        <th>{{__('common.mobile')}}</th>
                                    </tr>
                                </thead>
                                <tbody id="menu">
                                    @foreach($data as $client)
                                    <tr>
                                        <td>
                                            <span class="font-weight-bold">
                                                {{ $client->name }}
                                            </span>
                                        </td>
                                        <td>
                                            <img src="{{ $client->photo }}" style="height: 50px;" alt="" />
                                        </td>
                                        <td>
                                            {{ $client->email }}
                                        </td>
                                        <td>
                                            {{ $client->mobile }}
                                        </td>
                                     
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Tables end -->
        </div>
</body>
</html>
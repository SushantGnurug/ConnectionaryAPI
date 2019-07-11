@extends('layouts.admin')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Products</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table" id="dataTable">
                <thead>
                <tr>
                    <th>Connection Id</th>
                    <th>Service Provider</th>
                    <th>Service Name</th>
                    <th>Service Receiver</th>
                    <!--<th>Action</th>-->
                </tr>
                </thead>
                <tbody>
                @foreach($connections as $connection)
                    <tr>
                        <td>{{ $connection['id'] }}</td>
                        <td>{{ $connection['service_id'] }}</td>
                        <td>{{ $connection['service_exchange_location'] }}</td>
                        <td>{{ $connection['user_id'] }}</td>
                        <!--<td>
                            <a href="">Delete</a>
                        </td>-->
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
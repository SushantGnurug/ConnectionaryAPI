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
                    <th>Service Id</th>
                    <th>Service Provider Name</th>
                    <th>Service Name</th>
                    <th>Location</th>
                    <th>Open Time & End Time</th>
                    <th>Support Number</th>
                    <th>Average Price</th>
                    <th>Min-Max Interval</th>
                    <th>Authentication</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{ $service['id'] }}</td>
                        <td>{{ $service->user['fullname'] }}</td>
                        <td>{{ $service['name'] }}</td>
                        <td>
                            {{ $service['location'] }},
                            {{ $service['city'] }},
                            {{ $service['country'] }}
                        </td>
                        <td>{{ $service['open_time'] }}-{{ $service['end_time'] }}</td>
                        <td>{{ $service['support_number'] }}</td>
                        <td>{{ $service['price'] }}</td>
                        <td>{{ $service['minimum_interval'] }}-{{ $service['maximum_interval'] }}</td>
                        <td>
                            {{ $service->auth ? "Yes" : "No" }}
                        </td>
                        <td>
                            <a href="{{ route('service.changeauth',$service->id) }}">Change Authentication</a>|
                            <a href="{{ route('service.show',$service->id) }}">View Details</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
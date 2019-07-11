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
                    <th>User Id</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['fullname'] }}</td>
                        <td>{{ $user['username'] }}</td>
                        <td>{{ $user['gender'] }}</td>
                        <td>{{ $user['phone'] }}</td>
                        <td>
                            <a href="{{ route('user.show',$user->id) }}">View Details</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
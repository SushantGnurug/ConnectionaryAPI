@extends('layouts.admin')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Service Detail for {{ $service->name }}</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-md-6">
                    <h4><strong>Service Details</strong></h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Service Id</div>
                        <div class="col-md-6">{{ $service->id }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Service Name</div>
                        <div class="col-md-6">{{ $service->name }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Service Root Location</div>
                        <div class="col-md-6">{{ $service->location }},{{ $service->city }},{{ $service->coutnry }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Service Open Time</div>
                        <div class="col-md-6">{{ $service->open_time }}-{{ $service->end_time }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Service Support Number</div>
                        <div class="col-md-6">{{ $service->support_number }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Service Price</div>
                        <div class="col-md-6">{{ $service->price }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Price per</div>
                        <div class="col-md-6">{{ $service->price_per }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Minimum/Maximum Interval</div>
                        <div class="col-md-6">{{ $service->minimum_interval }}-{{ $service->maximum_interval }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Created/Updated</div>
                        <div class="col-md-6">{{ $service->created_at }} | {{ $service->updated_at }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4><strong>User Details</strong></h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">User Id</div>
                        <div class="col-md-6">{{ $service->user['id'] }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Full name</div>
                        <div class="col-md-6">{{ $service->user['fullname'] }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Gender</div>
                        <div class="col-md-6">{{ $service->user['gender'] }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Phone Number</div>
                        <div class="col-md-6">{{ $service->user['phone'] }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Email Address</div>
                        <div class="col-md-6">{{ $service->user['email'] }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">UserName</div>
                        <div class="col-md-6">{{ $service->user['username'] }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">User Registered Date</div>
                        <div class="col-md-6">{{ $service->user['created_at'] }}</div>
                    </div>
                    <hr>
                    <div class="row">
                            <a href="{{ route('user.show',$service->user['id']) }}" style="color: #ff2800;">View User's details</a>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@stop
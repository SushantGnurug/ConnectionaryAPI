@extends('layouts.admin')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>User Personal Detail for {{ $user->fullname }}</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-md-6">
                    <h4><strong>User Details</strong></h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">User Id</div>
                        <div class="col-md-6">{{ $user->id }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Gender</div>
                        <div class="col-md-6">{{ $user->gender }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Email</div>
                        <div class="col-md-6">{{ $user->email }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Phone</div>
                        <div class="col-md-6">{{ $user->phone }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">Registration Date</div>
                        <div class="col-md-6">{{ $user->created_at }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4><strong>Other User Details</strong></h4>
                    <hr>
                    <div class="row">
                        @if($kyc->isempty())
                            KYC Details not yet submitted
                        @else
                            <a href="{{ route('kyc.show',$user->id) }}" style="color: #ff2800;">View KYC details</a>
                        @endif
                    </div>
                    <hr>
                    <div class="row">
                        @if($kyc->isempty())
                            No experiences submitted yet
                        @else
                            <a href="{{ route('experience.show',$user->id) }}" style="color: #ff2800;">View Experience/Current Profession</a>
                        @endif
                    </div>
                    <hr>
                    <div class="row">
                        @if($kyc->isempty())
                            No services provided yet
                        @else
                            <a href="{{ route('user.servicesbyuser',$user->id) }}" style="color: #ff2800;">View User Services</a>
                        @endif
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@stop
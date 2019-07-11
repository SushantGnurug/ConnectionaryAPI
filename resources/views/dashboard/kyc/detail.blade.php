@extends('layouts.admin')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>KYC Details for {{ $user->fullname }} [UserId:{{ $user->id }}]</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @if($kycs->isempty())
				<h2>KYC form not submitted</h2>
            @else
				@foreach ($kycs as $kyc)
                <div class="row">
                    <div class="col-md-4">
                        <h4><strong>Personal Details</strong></h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Citizenship Number</div>
                            <div class="col-md-6">{{ $kyc->citizenship_no }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Issued Date</div>
                            <div class="col-md-6">{{ $kyc->issued_date }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Issued District</div>
                            <div class="col-md-6">{{ $kyc->issued_district }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Grand Father's Name</div>
                            <div class="col-md-6">{{ $kyc->grandfather_name }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Father's name</div>
                            <div class="col-md-6">{{ $kyc->father_name }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Mother's Name</div>
                            <div class="col-md-6">{{ $kyc->mother_name }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Spouse's Name</div>
                            <div class="col-md-6">{{ $kyc->spouse_name }}</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4><strong>Permanent Details</strong></h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">District</div>
                            <div class="col-md-6">{{ $kyc->permanent_district }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">VDC/Municipality</div>
                            <div class="col-md-6">{{ $kyc->permanent_municipality }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Ward No.</div>
                            <div class="col-md-6">{{ $kyc->permanent_ward_no }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Street</div>
                            <div class="col-md-6">{{ $kyc->permanent_street }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">House Number</div>
                            <div class="col-md-6">{{ $kyc->permanent_house_no }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Landline Number</div>
                            <div class="col-md-6">{{ $kyc->permanent_landline_number }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Mobile Number</div>
                            <div class="col-md-6">{{ $kyc->permanent_mobile_number }}</div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <h4><strong>Temporary Details</strong></h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">District</div>
                            <div class="col-md-6">{{ $kyc->temporary_district }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">VDC/Municipality</div>
                            <div class="col-md-6">{{ $kyc->temporary_municipality }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Ward No.</div>
                            <div class="col-md-6">{{ $kyc->temporary_ward_no }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Street</div>
                            <div class="col-md-6">{{ $kyc->temporary_street }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">House Number</div>
                            <div class="col-md-6">{{ $kyc->temporary_house_no }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Landline Number</div>
                            <div class="col-md-6">{{ $kyc->temporary_landline_number }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Mobile Number</div>
                            <div class="col-md-6">{{ $kyc->temporary_mobile_number }}</div>
                        </div>
                        <hr>
                    </div>
                </div>
				@endforeach
            @endif
        </div>
    </div>
    </div>
@stop
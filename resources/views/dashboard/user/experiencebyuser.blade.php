@extends('layouts.admin')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Experiences of {{ $user->fullname }}</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table" id="dataTable">
                <thead>
                <tr>
                    <th>Organization Name</th>
                    <th>Organization Location</th>
                    <th>Job Title</th>
                    <th>Job Level</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Currently Working</th>
                    <!--<th>Action</th>-->
                </tr>
                </thead>
                <tbody>
                @foreach($experiences as $experience)
                    <tr>
                        <td>{{ $experience['organization_name'] }}</td>
                        <td>{{ $experience['organization_location'] }}</td>
                        <td>{{ $experience['job_title'] }}</td>
                        <td>{{ $experience['job_level'] }}</td>
                        <td>{{ $experience['start_date'] }}</td>
                        <td>{{ $experience['end_date'] }}</td>
                        <td>{{ $experience['currently_working']?"Yes":"No" }}</td>
                        <!--<td>
                            <a href="">View Job Description</a>
                        </td>-->
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
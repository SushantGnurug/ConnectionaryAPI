@extends('layouts.admin')

@section('content')
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
            <div class="count">{{ $totalUsers }}</div>
            {{--<span class="count_bottom"><i class="green">4% </i> From last Week</span>--}}
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-car"></i> Total Services</span>
            <div class="count">{{ $totalServices }} </div>
            {{--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>--}}
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-newspaper-o"></i> Total KYC</span>
            <div class="count green">{{ $totalKyc }}</div>
            {{--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>--}}
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Professions</span>
            <div class="count">{{ $totalProfessions }}</div>
            {{--<span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>--}}
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-comments"></i> Total Connections</span>
            <div class="count">{{ $totalConnections }}</div>
            {{--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>--}}
        </div>
    </div>
    <!-- /top tiles -->

        
@stop
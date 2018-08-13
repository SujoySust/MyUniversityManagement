@extends('admin.master')
@section('mainContent')
    <section id="main-content">
        <section class="wrapper">

            <div class="agil-info-calendar">
                <!-- calendar -->
                <div class="col-md-6 agile-calendar">
                    <div class="calendar-widget">
                        <div class="panel-heading ui-sortable-handle">
					<span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                            <span class="panel-title"> Calendar Widget</span>
                        </div>
                        <!-- grids -->
                        <div class="agile-calendar-grid">
                            <div class="page">

                                <div class="w3l-calendar-left">
                                    <div class="calendar-heading">

                                    </div>
                                    <div class="monthly" id="mycalendar"></div>
                                </div>

                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //calendar -->
                <div class="col-md-6 stats-info stats-last widget-shadow">
                    <header class="panel-heading">
                        Hello
                    </header>
                    <div class="stats-last-agile">
                        <table class="table stats-table ">
                            <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>Subject Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--@if(isset($mycourses))--}}
                                {{--<?php--}}
                                {{--$i = 1;--}}
                                {{--?>--}}
                                {{--@foreach($mycourses as $mycourse)--}}
                                    {{--<tr>--}}
                                        {{--<th scope="row">{{$i++}}</th>--}}
                                        {{--<td>{{$mycourse->coursename}}</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}
                            {{--@endif--}}

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="agileits-w3layouts-stats">

                <div class="col-md-12 stats-info stats-last widget-shadow">
                    <header class="panel-heading">
                        Teacher Posts
                    </header>
                    <div class="stats-last-agile">
                        <table class="table stats-table ">
                            <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>Subject Name</th>
                                <th>Subject Details</th>
                                <th>Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--@if(isset($myposts))--}}
                                {{--<?php--}}
                                {{--$i = 1;--}}
                                {{--?>--}}
                                {{--@foreach($myposts as $mypost)--}}
                                    {{--<tr>--}}
                                        {{--<th scope="row">{{$i++}}</th>--}}
                                        {{--<td>{{$mypost->subjectname}}</td>--}}
                                        {{--<td>{{$mypost->subjectdetails}}</td>--}}
                                        {{--<td>{{$mypost->date}}</td>--}}
                                        {{--<td>{{$mypost->starttime}}</td>--}}
                                        {{--<td>{{$mypost->endtime}}</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}
                            {{--@endif--}}

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </section>
@endsection


@extends('student.master')
@section('mainContent')
    <section id="main-content">
        <section class="wrapper">
            <!-- //market-->
            <div class="market-updates">
                <div class="col-md-4 market-update-gd">
                    <div class="market-update-block clr-block-2">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-users"> </i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Students</h4>
                            <h3>{{App\Student::count()}}</h3>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 market-update-gd">
                    <div class="market-update-block clr-block-1">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-users" ></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Teachers</h4>
                            <h3>{{App\Teacher::count()}}</h3>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 market-update-gd">
                    <div class="market-update-block clr-block-1">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-users" ></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Class Representator</h4>
                            <h3>{{App\Classrepresentator::count()}}</h3>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

                <div class="clearfix"> </div>
            </div>
            <!-- //market-->
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
                {{--<div class="col-md-6 w3agile-notifications">--}}
                    {{--<div class="notifications">--}}
                        {{--<!--notification start-->--}}

                        {{--<header class="panel-heading">--}}
                            {{--Notification--}}
                        {{--</header>--}}
                        {{--<div class="notify-w3ls">--}}
                            {{--<div class="alert alert-info clearfix">--}}
                                {{--<span class="alert-icon"><i class="fa fa-envelope-o"></i></span>--}}
                                {{--<div class="notification-info">--}}
                                    {{--<ul class="clearfix notification-meta">--}}
                                        {{--<li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>--}}
                                        {{--<li class="pull-right notification-time">1 min ago</li>--}}
                                    {{--</ul>--}}
                                    {{--<p>--}}
                                        {{--Urgent meeting for next proposal--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="alert alert-danger">--}}
                                {{--<span class="alert-icon"><i class="fa fa-facebook"></i></span>--}}
                                {{--<div class="notification-info">--}}
                                    {{--<ul class="clearfix notification-meta">--}}
                                        {{--<li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> mentioned you in a post </li>--}}
                                        {{--<li class="pull-right notification-time">7 Hours Ago</li>--}}
                                    {{--</ul>--}}
                                    {{--<p>--}}
                                        {{--Very cool photo jack--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="alert alert-success ">--}}
                                {{--<span class="alert-icon"><i class="fa fa-comments-o"></i></span>--}}
                                {{--<div class="notification-info">--}}
                                    {{--<ul class="clearfix notification-meta">--}}
                                        {{--<li class="pull-left notification-sender">You have 5 message unread</li>--}}
                                        {{--<li class="pull-right notification-time">1 min ago</li>--}}
                                    {{--</ul>--}}
                                    {{--<p>--}}
                                        {{--<a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="alert alert-warning ">--}}
                                {{--<span class="alert-icon"><i class="fa fa-bell-o"></i></span>--}}
                                {{--<div class="notification-info">--}}
                                    {{--<ul class="clearfix notification-meta">--}}
                                        {{--<li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead</li>--}}
                                        {{--<li class="pull-right notification-time">5 Days Ago</li>--}}
                                    {{--</ul>--}}
                                    {{--<p>--}}
                                        {{--Next 5 July Thursday is the last day--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="alert alert-info clearfix">--}}
                                {{--<span class="alert-icon"><i class="fa fa-envelope-o"></i></span>--}}
                                {{--<div class="notification-info">--}}
                                    {{--<ul class="clearfix notification-meta">--}}
                                        {{--<li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>--}}
                                        {{--<li class="pull-right notification-time">1 min ago</li>--}}
                                    {{--</ul>--}}
                                    {{--<p>--}}
                                        {{--Urgent meeting for next proposal--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}

                        {{--<!--notification end-->--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="clearfix"> </div>--}}
            {{--</div>--}}
            {{--<!-- tasks -->--}}
            {{--<div class="agile-last-grids">--}}
                {{--<div class="col-md-4 agile-last-left">--}}
                    {{--<div class="agile-last-grid">--}}
                        {{--<div class="area-grids-heading">--}}
                            {{--<h3>Monthly</h3>--}}
                        {{--</div>--}}
                        {{--<div id="graph7"></div>--}}
                        {{--<script>--}}
                            {{--// This crosses a DST boundary in the UK.--}}
                            {{--Morris.Area({--}}
                                {{--element: 'graph7',--}}
                                {{--data: [--}}
                                    {{--{x: '2013-03-30 22:00:00', y: 3, z: 3},--}}
                                    {{--{x: '2013-03-31 00:00:00', y: 2, z: 0},--}}
                                    {{--{x: '2013-03-31 02:00:00', y: 0, z: 2},--}}
                                    {{--{x: '2013-03-31 04:00:00', y: 4, z: 4}--}}
                                {{--],--}}
                                {{--xkey: 'x',--}}
                                {{--ykeys: ['y', 'z'],--}}
                                {{--labels: ['Y', 'Z']--}}
                            {{--});--}}
                        {{--</script>--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 agile-last-left agile-last-middle">--}}
                    {{--<div class="agile-last-grid">--}}
                        {{--<div class="area-grids-heading">--}}
                            {{--<h3>Daily</h3>--}}
                        {{--</div>--}}
                        {{--<div id="graph8"></div>--}}
                        {{--<script>--}}
                            {{--/* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */--}}
                            {{--var day_data = [--}}
                                {{--{"period": "2016-10-01", "licensed": 3407, "sorned": 660},--}}
                                {{--{"period": "2016-09-30", "licensed": 3351, "sorned": 629},--}}
                                {{--{"period": "2016-09-29", "licensed": 3269, "sorned": 618},--}}
                                {{--{"period": "2016-09-20", "licensed": 3246, "sorned": 661},--}}
                                {{--{"period": "2016-09-19", "licensed": 3257, "sorned": 667},--}}
                                {{--{"period": "2016-09-18", "licensed": 3248, "sorned": 627},--}}
                                {{--{"period": "2016-09-17", "licensed": 3171, "sorned": 660},--}}
                                {{--{"period": "2016-09-16", "licensed": 3171, "sorned": 676},--}}
                                {{--{"period": "2016-09-15", "licensed": 3201, "sorned": 656},--}}
                                {{--{"period": "2016-09-10", "licensed": 3215, "sorned": 622}--}}
                            {{--];--}}
                            {{--Morris.Bar({--}}
                                {{--element: 'graph8',--}}
                                {{--data: day_data,--}}
                                {{--xkey: 'period',--}}
                                {{--ykeys: ['licensed', 'sorned'],--}}
                                {{--labels: ['Licensed', 'SORN'],--}}
                                {{--xLabelAngle: 60--}}
                            {{--});--}}
                        {{--</script>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 agile-last-left agile-last-right">--}}
                    {{--<div class="agile-last-grid">--}}
                        {{--<div class="area-grids-heading">--}}
                            {{--<h3>Yearly</h3>--}}
                        {{--</div>--}}
                        {{--<div id="graph9"></div>--}}
                        {{--<script>--}}
                            {{--var day_data = [--}}
                                {{--{"elapsed": "I", "value": 34},--}}
                                {{--{"elapsed": "II", "value": 24},--}}
                                {{--{"elapsed": "III", "value": 3},--}}
                                {{--{"elapsed": "IV", "value": 12},--}}
                                {{--{"elapsed": "V", "value": 13},--}}
                                {{--{"elapsed": "VI", "value": 22},--}}
                                {{--{"elapsed": "VII", "value": 5},--}}
                                {{--{"elapsed": "VIII", "value": 26},--}}
                                {{--{"elapsed": "IX", "value": 12},--}}
                                {{--{"elapsed": "X", "value": 19}--}}
                            {{--];--}}
                            {{--Morris.Line({--}}
                                {{--element: 'graph9',--}}
                                {{--data: day_data,--}}
                                {{--xkey: 'elapsed',--}}
                                {{--ykeys: ['value'],--}}
                                {{--labels: ['value'],--}}
                                {{--parseTime: false--}}
                            {{--});--}}
                        {{--</script>--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="clearfix"> </div>--}}
            {{--</div>--}}
            <!-- //tasks -->
            <div class="agileits-w3layouts-stats">
                <div class="col-md-6 stats-info widget">
                    <div class="stats-info-agileits">
                        <div class="stats-title">
                            <h4 class="title">Skills</h4>
                        </div>
                        @foreach($skills as $skill)
                        <div class="stats-body">
                            <ul class="list-unstyled">
                                <li>{{$skill->skill_title}} <span class="pull-right">{{$skill->skill_percentage}}%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar green" style="width:{{$skill->skill_percentage}}%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                            @endforeach
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 stats-info stats-last widget-shadow" style="margin-top: 5%">
                    <div class="stats-last-agile">
                        <table class="table stats-table ">
                            <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>Project Name</th>
                                <th>Technology</th>
                                <th>PROGRESS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($projects))
                                {{$i =1}}

                            @foreach($projects as $project)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$project->project_name}}</td>
                                <td>{{$project->technology}}</td>
                                <td><h5>{{$project->project_percentage}}%</h5></td>
                            </tr>
                            @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </section>
    </section>

@endsection
<!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="{{url('classrepresentator/dashboard')}}" class="logo">
                CR
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                {{--<!-- inbox dropdown start-->--}}
                {{--<li id="header_inbox_bar" class="dropdown">--}}
                    {{--<a data-toggle="dropdown" class="dropdown-toggle" href="#">--}}
                        {{--<i class="fa fa-envelope-o"></i>--}}
                        {{--<span class="badge bg-important">4</span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu extended inbox">--}}
                        {{--<li>--}}
                            {{--<p class="red">You have 4 Mails</p>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">--}}
                                {{--<span class="photo"><img alt="avatar" src="images/3.png"></span>--}}
                                {{--<span class="subject">--}}
                                {{--<span class="from">Jonathan Smith</span>--}}
                                {{--<span class="time">Just now</span>--}}
                                {{--</span>--}}
                                {{--<span class="message">--}}
                                    {{--Hello, this is an example msg.--}}
                                {{--</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">--}}
                                {{--<span class="photo"><img alt="avatar" src="images/1.png"></span>--}}
                                {{--<span class="subject">--}}
                                {{--<span class="from">Jane Doe</span>--}}
                                {{--<span class="time">2 min ago</span>--}}
                                {{--</span>--}}
                                {{--<span class="message">--}}
                                    {{--Nice admin template--}}
                                {{--</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">--}}
                                {{--<span class="photo"><img alt="avatar" src="images/3.png"></span>--}}
                                {{--<span class="subject">--}}
                                {{--<span class="from">Tasi sam</span>--}}
                                {{--<span class="time">2 days ago</span>--}}
                                {{--</span>--}}
                                {{--<span class="message">--}}
                                    {{--This is an example msg.--}}
                                {{--</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">--}}
                                {{--<span class="photo"><img alt="avatar" src="images/2.png"></span>--}}
                                {{--<span class="subject">--}}
                                {{--<span class="from">Mr. Perfect</span>--}}
                                {{--<span class="time">2 hour ago</span>--}}
                                {{--</span>--}}
                                {{--<span class="message">--}}
                                    {{--Hi there, its a test--}}
                                {{--</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">See all messages</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                {{--<li id="header_notification_bar" class="dropdown">--}}
                    {{--<a data-toggle="dropdown" class="dropdown-toggle" href="#">--}}

                        {{--<i class="fa fa-bell-o"></i>--}}
                        {{--<span class="badge bg-warning">3</span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu extended notification">--}}
                        {{--<li>--}}
                            {{--<p>Notifications</p>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<div class="alert alert-info clearfix">--}}
                                {{--<span class="alert-icon"><i class="fa fa-bolt"></i></span>--}}
                                {{--<div class="noti-info">--}}
                                    {{--<a href="#"> Server #1 overloaded.</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<div class="alert alert-danger clearfix">--}}
                                {{--<span class="alert-icon"><i class="fa fa-bolt"></i></span>--}}
                                {{--<div class="noti-info">--}}
                                    {{--<a href="#"> Server #2 overloaded.</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<div class="alert alert-success clearfix">--}}
                                {{--<span class="alert-icon"><i class="fa fa-bolt"></i></span>--}}
                                {{--<div class="noti-info">--}}
                                    {{--<a href="#"> Server #3 overloaded.</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                    {{--</ul>--}}
                {{--</li>--}}
                {{--<!-- notification dropdown end -->--}}
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="{{Auth::guard('classrepresentator')->user()->picture}}">
                        <span class="username">{{Auth::guard('classrepresentator')->user()->name}}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>

                            <form id="logout-form" action="{{ url('classrepresentator/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>

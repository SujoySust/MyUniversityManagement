<!-- header -->
<div class="header-top">
  <div class="container">
    <div class="bottom_header_left">
      <p>
        <span class="fa fa-map-marker" aria-hidden="true"></span>Shahjalal University of Science And Technology, Sylhet
      </p>
    </div>
    <div class="bottom_header_right">
      {{--<div class="bottom-social-icons">--}}
        {{--<a class="facebook" href="#">--}}
          {{--<span class="fa fa-facebook"></span>--}}
        {{--</a>--}}
        {{--<a class="twitter" href="#">--}}
          {{--<span class="fa fa-twitter"></span>--}}
        {{--</a>--}}
        {{--<a class="pinterest" href="#">--}}
          {{--<span class="fa fa-pinterest-p"></span>--}}
        {{--</a>--}}
        {{--<a class="linkedin" href="#">--}}
          {{--<span class="fa fa-linkedin"></span>--}}
        {{--</a>--}}
      {{--</div>--}}
      <div class="header-top-righ">
       <ul>
         <?php if(isset(Auth::guard('student')->user()->name)){?>
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <span class="username">{{Auth::guard('student')->user()->name}}</span>
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu extended logout">
            <li><a href="{{url('student/dashboard')}}"><i class=" fa fa-suitcase"></i>Profile</a></li>
            <li><a href="{{ url('teacher/logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>

              <form id="logout-form" action="{{ url('student/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
           <?php }else{?>
        <a href="{{url('student/login')}}">
          <span class="fa fa-sign-out" aria-hidden="true"></span>Login</a>
         <?php }?>
       </ul>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="header">
  <div class="content white">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('/')}}">
             <span > <img src="{{asset('FontEnd/Pictures/download.png')}}" style="width: 60px;height: 60px"></span>
          </a>
        </div>
        <!--/.navbar-header-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <nav class="link-effect-2" id="link-effect-2">
            <ul class="nav navbar-nav">
              <li class="active">
                <a href="{{ url('/')}}" class="effect-3">Home</a>
              </li>
              <li>
                <a href="#submission" class="effect-3">Submissions</a>
              </li>
              <li>
                <a href="#crPost" class="effect-3">Class Post</a>
              </li>
              @if(isset(Auth::guard('student')->user()->name))
                <li>
                  <a href="{{url('student/post')}}" class="effect-3">Student Post</a>
                </li>
              @endif
              <li>
                <a href="#teacher" class="effect-3">Teachers</a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student List
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="{{url('studentlist/2013-2014')}}">2013-2014</a>
                  </li>
                  <li>
                    <a href="{{url('studentlist/2014-2015')}}">2014-2015</a>
                  </li>
                  <li>
                    <a href="{{url('studentlist/2015-2016')}}">2015-2016</a>
                  </li>
                  <li>
                    <a href="{{url('studentlist/2015-2016')}}">2016-2017</a>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>
        <!--/.navbar-collapse-->
        <!--/.navbar-->
      </div>
    </nav>
  </div>
</div>

<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{url('/admin/dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Batch</span>
                    </a>
                    <ul class="sub">
            <li><a href="{{url('admin/batch/add')}}">Add Batch</a></li>
            <li><a href="{{url('admin/batch/manage')}}">Manage Batch</a></li>

                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Class Representator</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('admin/cr/manage')}}">Manage CR</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Teacher</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('admin/teacher/manage')}}">Manage Teacher</a></li>

                    </ul>
                </li>

                {{--<li class="sub-menu">--}}
                    {{--<a href="javascript:;">--}}
                        {{--<i class="fa fa-book"></i>--}}
                        {{--<span>Post</span>--}}
                    {{--</a>--}}
                    {{--<ul class="sub">--}}
            {{--<li><a href="{{url('teacher/post/add')}}/{{ Auth::guard('teacher')->user()->id}}">Add Post</a></li>--}}
            {{--<li><a href="{{url('teacher/post/manage')}}/{{ Auth::guard('teacher')->user()->id}}">Manage Post</a></li>--}}

                    {{--</ul>--}}
                {{--</li>--}}

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Manage Studnet</span>
                    </a>
                    <ul class="sub">
                      {{--<?php if(isset($teacherCourses)){?>--}}
                      {{--@foreach($teacherCourses as $mycourse)--}}
            {{--<li><a href="{{url('teacher/student/manage/').'/'.$mycourse->id}}">{{$mycourse->coursename}}</a></li>--}}
                     {{--@endforeach--}}
                   {{--<?php }?>--}}

                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-user"></i>
                        <span>Profile</span>
                    </a>
                    {{--<ul class="sub">--}}
                        {{--<li><a href="{{url('teacher/profile')}}">Profile</a></li>--}}
                        {{--<li><a href="{{url('teacher/profile/edit')}}">Update</a></li>--}}
                    {{--</ul>--}}
                </li>

            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>

<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            @if(Auth::guard('teacher')->user()->status == 1)
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{url('/teacher/dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Course</span>
                    </a>
                    <ul class="sub">
            <li><a href="{{url('teacher/course/add')}}">Add Course</a></li>
            <li><a href="{{url('teacher/course/manage')}}/{{ Auth::guard('teacher')->user()->id}}">Manage Course</a></li>

                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Post</span>
                    </a>
                    <ul class="sub">
            <li><a href="{{url('teacher/post/add')}}/{{ Auth::guard('teacher')->user()->id}}">Add Post</a></li>
            <li><a href="{{url('teacher/post/manage')}}/{{ Auth::guard('teacher')->user()->id}}">Manage Post</a></li>

                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Manage Studnet</span>
                    </a>
                    <ul class="sub">
                      <?php if(isset($teacherCourses)){?>
                      @foreach($teacherCourses as $mycourse)
            <li><a href="{{url('teacher/student/manage/').'/'.$mycourse->id}}">{{$mycourse->coursename}}</a></li>
                     @endforeach
                   <?php }?>

                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-user"></i>
                        <span>Profile</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('teacher/profile')}}">Profile</a></li>
                        <li><a href="{{url('teacher/profile/edit')}}">Update</a></li>
                    </ul>
                </li>

            </ul>
                @endif

        </div>
        <!-- sidebar menu end-->
    </div>
</aside>

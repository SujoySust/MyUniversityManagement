<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            @if(Auth::guard('classrepresentator')->user()->status ==1)
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{url('classrepresentator/dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                            <span>Profile</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('classrepresentator/profile')}}">View Profile</a></li>
                        <li><a href="{{url('classrepresentator/profile/edit')}}">Update Profile</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Password</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('classrepresentator/password')}}">Change Password</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Post</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('classrepresentator/post/add')}}">Add Post</a></li>
                        <li><a href="{{url('classrepresentator/post/manage')}}">Manage Post</a></li>
                    </ul>
                </li>


                <li>
                    <a href="{{url('classrepresentator/dashboard')}}">
                        <i class="fa fa-user"></i>
                        <span>Post Table</span>
                    </a>
                </li>
            </ul>
                @endif
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
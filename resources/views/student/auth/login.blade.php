@extends('student.layout.auth')

@section('content')

    <div class="signin-form profile">
        <h2>Student Sign in Form</h2>
        <div class="login-form">
            <form  method="POST" action="{{ url('/student/login') }}">
                {{ csrf_field() }}
                <input type="email" name="email" placeholder="E-mail" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <div class="tp">
                    <input type="submit" value="SIGN IN">
                </div>
            </form>
        </div>
        <div class="login-social-grids">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
        </div>
        <p><a href="{{ url('student/register') }}"> Don't have an account?</a></p>

        <h6><a href="{{url('/')}}">Back To Home</a><h6>
    </div>
@endsection

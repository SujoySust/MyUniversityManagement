@extends('classrepresentator.layout.auth')

@section('content')

    <div class="signin-form profile">
        <h2>CR Sign in Form</h2>
        <h4 style="color: red;text-align: center">{{Session::get('message')}}</h4>
        <div class="login-form">
            <form  method="POST" action="{{ url('/classrepresentator/login') }}">
                {{ csrf_field() }}
                <div class="form-group {{$errors->has('email')?'has-error':''}}">
                    <input type="email" name="email" placeholder="E-mail" required="">
                    @if($errors->has('email'))

                        <span class="help-block">

                            <strong>{{$errors->first('email')}}</strong>

                       </span>

                    @endif
                </div>

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
        <p><a href="{{ url('classrepresentator/register') }}"> Don't have an account?</a></p>
        <h6><a href="{{url('/')}}">Back To Home</a><h6>
    </div>
@endsection
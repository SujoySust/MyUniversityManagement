@extends('classrepresentator.layout.auth')
@section('content')

    <div class="signin-form profile">
        <h2>Class Representator Sign up Form</h2>
        <div class="login-form">
            <form class="form-horizontal" method="POST" action="{{ url('classrepresentator/register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <!-- <label for="name" class="col-md-3 control-label">Name</label> -->

                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <!-- <label for="email" class="col-md-3 control-label">E-Mail Address</label> -->

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('batch') ? ' has-error' : '' }}">
                    <!-- <label for="email" class="col-md-3 control-label">E-Mail Address</label> -->

                    <div class="col-md-12">
                        <select name="batch" class="form-control" id="batch">
                            <option>Batch</option>
                            @if(isset($batches))
                                @foreach($batches as $batch)
                            <option value="{{$batch->name}}">{{$batch->name}}</option>
                                @endforeach
                            @endif

                        </select>

                        @if ($errors->has('batch'))
                            <span class="help-block">
                                          <strong>{{ $errors->first('batch') }}</strong>
                             </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('contract') ? ' has-error' : '' }}">
                    <!-- <label for="name" class="col-md-3 control-label">Name</label> -->

                    <div class="col-md-12">
                        <input id="cortract" type="text" class="form-control" name="contract" placeholder="Contract" value="{{ old('contract') }}" required autofocus>

                        @if ($errors->has('contract'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contract') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <!-- <label for="password" class="col-md-3 control-label">Password</label> -->

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password"  placeholder="Password"required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <!-- <label for="password-confirm" class="col-md-3 control-label">Confirm Password</label> -->

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <p><a href="{{url('/student/login')}}">Already Registered!!</a></p>

        <h6><a href="{{url('/')}}">Back To Home</a><h6>
    </div>


@endsection

@extends('teacher.master')
@section('mainContent')
    <section id="main-content">
        <section class="wrapper">

            <div class="col-md-8 stats-info stats-last widget-shadow well">
                <h3 style="text-align: center;color: green;">{{Session::get('message')}}</h3>
                <div class="stats-last-agile">
                    <form  method="POST" action="{{ url('teacher/profile/update')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @foreach($teacherProfiles as $teacherProfile)
                            <div class="form-group" style="margin-bottom: 5px">
                                <label for="inputEmail3" class="col-sm-4 control-label">Name</label>
                                <div class="col-sm-8 form-group">
                                    <input type="hidden" name="id" value="{{$teacherProfile->id}}">
                                    <input type="text" class="form-control" name="name" value="{{$teacherProfile->name}}">
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-8 form-group">
                                    <input type="text" class="form-control" name="email" value="{{$teacherProfile->email}}">
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Contract</label>
                                <div class="col-sm-8 form-group">
                                    <input type="text" class="form-control" name="contract" value="{{$teacherProfile->contract}}">
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Details</label>
                                <div class="col-sm-8 form-group">
                                    <textarea class="form-control" name="details" style="min-height: 250px;">{{$teacherProfile->details}}</textarea>
                                </div>
                            </div>

                            <div class="clearfix"> </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Picture</label>
                                <div class="col-sm-8 form-group">
                                    <img src="{{asset($teacherProfile->picture)}}" style="max-width: 400px;max-height: 300px">
                                    <input type="file" class="form-control" name="picture">
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="btn" class="btn btn-success btn-block">Save</button>

                                </div>

                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
            <div class="clearfix"> </div>
            </div>
        </section>
@endsection


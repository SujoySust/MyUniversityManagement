@extends('student.master')
@section('mainContent')
    <section id="main-content">
        <section class="wrapper">

            <div class="col-md-8 stats-info stats-last widget-shadow well">
                <h4 style="text-align: center;color: green">{{Session::get('message')}}</h4>
                <div class="stats-last-agile">
                    <form  method="POST" action="{{ url('student/profile/update')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @foreach($studentdata as $studentdatas)
                            <div class="form-group" style="margin-bottom: 5px">
                                <label for="inputEmail3" class="col-sm-4 control-label">Name</label>
                                <div class="col-sm-8 form-group">
                                    <input type="hidden" name="id" value="{{$studentdatas->id}}">
                                    <input type="text" class="form-control" name="name" value="{{$studentdatas->name}}">
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Title</label>
                                <div class="col-sm-8 form-group">
                                    <input type="text" class="form-control" name="title" value="{{$studentdatas->title}}">
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Description</label>
                                <div class="col-sm-8 form-group">
                                    <textarea type="text" class="form-control" name="description">{{$studentdatas->description}}</textarea>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-8 form-group">
                                    <input type="text" class="form-control" name="email" value="{{$studentdatas->email}}">
                                </div>
                            </div>

                            <div class="clearfix"> </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Contract</label>
                                <div class="col-sm-8 form-group">
                                    <input type="text" class="form-control" name="contract" value="{{$studentdatas->contract}}">
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Address</label>
                                <div class="col-sm-8 form-group">
                                    <input type="text" class="form-control" name="address" value="{{$studentdatas->address}}">
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Batch</label>
                                <div class="col-sm-8 form-group">
                                    <select class="form-group" style="width: 100%;min-height: 35px;" name="batch">
                                        @if($studentdatas->batch)
                                            <option value="{{$studentdatas->batch}}">{{$studentdatas->batch}}</option>
                                        @endif
                                        @if(isset($batches))
                                            @foreach($batches as $batch)
                                        <option value="{{$batch->name}}">{{$batch->name}}</option>
                                            @endforeach
                                         @endif

                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Picture</label>
                                <div class="col-sm-8 form-group">
                                    <img src="{{asset($studentdatas->picture)}}" style="max-width: 400px;max-height: 300px" alt="Please Add Your Profile Pic">
                                    <input type="file" class="form-control" name="picture">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Background</label>
                                <div class="col-sm-8 form-group">
                                    <img src="{{asset($studentdatas->background)}}" style="max-width: 400px;max-height: 300px">
                                    <input type="file" class="form-control" name="background">
                                </div>
                            </div>

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


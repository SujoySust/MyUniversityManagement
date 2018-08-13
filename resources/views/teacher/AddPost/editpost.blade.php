@extends('teacher.master')
@section('mainContent')
<section id="main-content">
<section class="wrapper">
<div class="form-w3layouts">
      <!-- page start-->
      <!-- page start-->
      <div class="row">
        <h3 style="text-align: center;color: #54A857;margin:2%">{{Session::get('message')}}</h3>
          <div class="col-lg-12">
             <div class="row">
                  <section class="panel">
                      <header class="panel-heading">
                          Update Subject
                      </header>
                      <div class="panel-body">
                          <div class="position-center">
                            @foreach($posts as $post)
                              <form class="form-horizontal" method="POST" action="{{ url('teacher/post/update')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name ="id" value="{{$post->id}}">
                                </div>
                                <div class="form-group">
                                  <input type="hidden" class="form-control" name="teacherid" value="{{Auth::guard('teacher')->user()->id}}">
                                </div>
                                 <div class="form-group">
                                  <input type="hidden" class="form-control" name="teachername" value="{{Auth::guard('teacher')->user()->name}}">
                                 </div>

                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Subject Name</label>
                                      <input type="text" class="form-control" name="subjectname" value="{{$post->subjectname}}">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleTextarea">Subject Description</label>
                                    <textarea class="form-control" rows="3" name="subjectdetails">{{$post->subjectdetails}}</textarea>
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Date</label>
                                      <input type="date" class="form-control" name="date" value="{{$post->date}}">
                                  </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Start Time</label>
                                    <input type="time" class="form-control" name="starttime" value="{{$post->starttime}}">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">End Time</label>
                                    <input type="time" class="form-control" name="endtime" value="{{$post->endtime}}">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">End Time</label>
                                    <input type="number" class="form-control" name="status" value="{{$post->status}}">
                                </div>
                              <button type="submit" class="btn btn-info">Submit</button>
                          </form>
                          @endforeach
                          </div>

                      </div>
                  </section>
                </div>
          </div>
        </div>
      </div>
    </section>
  </section>

@endsection

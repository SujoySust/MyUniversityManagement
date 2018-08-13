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

                  <section class="panel">
                      <header class="panel-heading">
                          Add Course
                      </header>
                      <div class="panel-body">
                          <div class="position-center">
                              <form class="form-horizontal" method="POST" action="{{ url('teacher/course/save')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="teacherid" value="{{Auth::guard('teacher')->user()->id}}">
                                </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Course Name</label>
                                  <input type="text" class="form-control" name="coursename" placeholder="Enter Course Name">
                              </div>

                              <div class="form-group">
                                <label for="exampleTextarea">Sort Description</label>
                                <textarea class="form-control" rows="3" name="coursedetails"></textarea>
                              </div>
                              <button type="submit" class="btn btn-info">Submit</button>
                          </form>
                          </div>

                      </div>
                  </section>

          </div>
        </div>
      </div>
    </section>
  </section>

@endsection

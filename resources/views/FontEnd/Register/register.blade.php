@extends('FontEnd.pages')
@section('mainContent')
<div class="services-breadcrumb">
  <div class="inner_breadcrumb">
    <ul class="short_ls">
      <li>
        <a href="{{url('/')}}">Home</a>
        <span>| |</span>
      </li>
      <li>Appointment</li>
    </ul>
  </div>
</div>
<!-- //short-->
<div class="register-form-main">
  <div class="container">
    <div class="title-div">
      <h3 class="tittle">
        <span>R</span>egister
        <span>F</span>orm
      </h3>
      <div class="tittle-style">

      </div>
    </div>
    <div class="login-form">
         @foreach($courses as $course)
      <form action="{{url('student/registration/save')}}" method="post">
         {{ csrf_field() }}
        <div class="">
          <input type="hidden" class="name" name="courseId" value="{{$course->id}}" />
        </div>
        <div class="">
          <input type="hidden" class="name" name="courseName" value="{{$course->subjectname}}" />
        </div>
        <div class="">
          <input type="hidden" name="studentName" value="{{Auth::guard('student')->user()->name}}" />
          <input type="hidden" name="studentId" value="{{Auth::guard('student')->user()->id}}" />
        </div>
        <div class="">
          <p>Registration No</p>
          <input type="text" class="name" name="registration" required />
        </div>

        <div class="">
          <input type="hidden"  name="studentEmail" value="{{Auth::guard('student')->user()->email}}" />
        </div>
        <div class="">
          <p>Student Type</p>
          <select class="form-control" name="type" style="margin-bottom:5%">
            <option>Type</option>
            <option value="1">Regular</option>
            <option value="0">Drop</option>
          </select>
        </div>
        <input type="submit" value="Register">
      </form>
      @endforeach
    </div>

  </div>
</div>
@endsection

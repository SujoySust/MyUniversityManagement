@extends('FontEnd.pages')
@section('mainContent')

<div class="services-breadcrumb">
  <div class="inner_breadcrumb">
    <ul class="short_ls">
      <li>
        <a href="{{url('/')}}">Home</a>
        <span>| |</span>
      </li>
        @if($checkReg === null)
            @foreach($courses as $course)
                <li><a href="{{url('student/courseregister/'.$course->id)}}">Register</a></li>
                <li style="float: right">You have Not Registered yet . Please<a href="{{url('student/courseregister/'.$course->id)}}"> Register!!</a></li>
            @endforeach
        @else
                <li><h4 style="color: green;text-align: center">You have already Registered this course . Please see your appointment serial from the list</h4></li>
        @endif
    </ul>
  </div>
</div>
<div class="register-form-main">
  <div class="container">
    <div class="col-md-3 col-sm-12">
      <div class="btn-group-vertical col-md-12">
        <a href="{{url('/')}}" class="btn btn-primary col-sm-12">Home</a>
        <a href="#all" class="btn btn-primary col-sm-12">All</a>
        <a href="#done" class="btn btn-primary col-sm-12">Done</a>
        <a href="#waiting" class="btn btn-primary col-sm-12">Waiting</a>
      </div>
    </div>
    <style>
    .form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
    display: inline-block;
}</style>
        <div class="col-md-9 demo-right">

            <table class="table" id=all>
              <thead>
                <tr  style="background:#286090;color:#fff">
                  <th scope="col" style="color:#fff;width:10%">No</th>
                  <th scope="col" style="color:#fff; width:20%">Name</th>
                  <th scope="col" style="color:#fff; width:30%">Email</th>
                  <th scope="col" style="color:#fff; width:20%">Registration No</th>
                  <th scope="col" style="color:#fff; width:20%">Handle</th>
                </tr>
              </thead>
              <tbody>
                <?php $count=1;?>
                @foreach($studentlists as $studentlist)
                <?php if($studentlist->status == 1){?>
                <tr style="background:green;color:#fff;" id="done">
                  <th scope="row"style="color:#fff">{{$count}}</th>
                  <td style="color:#fff">{{$studentlist->studentName}}</td>
                  <td style="color:#fff">{{$studentlist->studentEmail}}</td>
                  <td style="color:#fff">{{$studentlist->registration}}</td>
                  <td style="color:#fff">
                    <div class="form-group">
                          <div class="btn-group">
                              <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                  <span class="glyphicon glyphicon-ok"></span>
                                  <span> </span>
                              </label>
                              <label for="fancy-checkbox-info" class="btn btn-default active">
                                  Done
                              </label>
                          </div>
                      </div></td>
                </tr>
              <?php }else{?>
                <tr style="background:#C9302C;color:#fff" id=waiting>
                  <th scope="row"style="color:#fff">{{$count}}</th>
                  <td style="color:#fff">{{$studentlist->studentName}}</td>
                   <td style="color:#fff">{{$studentlist->studentEmail}}</td>
                  <td style="color:#fff">{{$studentlist->registration}}</td>
                  <td style="color:#fff">
                     <div class="form-group">
                      <div class="btn-group">
                          <label for="fancy-checkbox-warning" class="btn btn-warning">
                              <span class="glyphicon glyphicon-ok"></span>
                              <span> </span>
                          </label>
                          <label for="fancy-checkbox-warning" class="btn btn-default active">
                              Waiting
                          </label>
                     </div>
                    </div>
               </td>
                </tr>
              <?php }?>
              <?php $count++;?>
                @endforeach
              </tbody>
            </table>
        </div>


  </div>
</div>
@endsection

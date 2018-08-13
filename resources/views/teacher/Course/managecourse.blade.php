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
       <div class="panel panel-default">
           <div class="panel-heading">
              Manage Category</br>

           </div>
           <!-- /.panel-heading -->
           <div class="panel-body">
               <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover">
                       <thead>
                           <tr>
                               <th style="width:5%">Id</th>
                               <th style="width:40%">Course Name</th>
                               <th style="width:40%">Course Description</th>
                               <th style="width:12%">Action</th>
                           </tr>
                       </thead>
                       <tbody>
                         @foreach($courses as $course)
                           <tr>
                               <td>{{$course->id}}</td>
                               <td>{{$course->coursename}}</td>
                               <td>{{$course->coursedetails}}</td>
                               <td>
                                 <a href="{{ url('teacher/course/edit/').'/'.$course->id  }}" class="btn btn-success">
                                     <span class="glyphicon glyphicon-edit"></span>
                                 </a>
                                  <a href="{{ url('teacher/course/delete/').'/'.$course->id.'/'.$course->teacherid }}" class="btn btn-danger">
                                     <span class="glyphicon glyphicon-trash"></span>
                                 </a>

                               </td>
                           </tr>
                           @endforeach

                       </tbody>
                   </table>
               </div>
               <!-- /.table-responsive -->
           </div>
           <!-- /.panel-body -->
       </div>
       <!-- /.panel -->
   </div>
 </div>
</div>
</section>
</section>


@endsection

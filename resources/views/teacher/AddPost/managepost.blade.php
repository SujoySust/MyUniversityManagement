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
              Manage Post</br>

           </div>
           <!-- /.panel-heading -->
           <div class="panel-body">
               <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover">
                       <thead>
                           <tr>
                               <th style="width:5%">Id</th>
                               <th style="width:20%">Subject Name</th>
                               <th style="width:25%">Subject Details</th>
                               <th style="width:10%">Date</th>
                               <th style="width:5%">Start Time</th>
                               <th style="width:5%">End Time</th>
                               <th style="width:10%">Status</th>
                               <th style="width:12%">Action</th>
                           </tr>
                       </thead>
                       <tbody>
                         @foreach($posts as $posts)
                           <tr>
                               <td>{{$posts->id}}</td>
                               <td>{{$posts->subjectname}}</td>
                               <td>{{$posts->subjectdetails}}</td>
                               <td>{{$posts->date}}</td>
                               <td>{{$posts->starttime}}</td>
                               <td>{{$posts->endtime}}</td>
                               <td>{{$posts->status}}</td>
                               <td>
                                 <a href="{{ url('teacher/post/edit/').'/'.$posts->id }}" class="btn btn-success">
                                     <span class="glyphicon glyphicon-edit"></span>
                                 </a>
                                  <a href="{{ url('teacher/post/delete/').'/'.$posts->id.'/'.$posts->teacherid }}" class="btn btn-danger">
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

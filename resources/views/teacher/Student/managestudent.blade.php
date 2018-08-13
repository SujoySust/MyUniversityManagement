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
              Manage Student</br>


           </div>
           {{--<div class="panel-heading">--}}
               {{--<a href="#">Notify Selected Student</a>--}}

           {{--</div>--}}
           <div class="clearfix"></div>
           <!-- /.panel-heading -->
           <div class="panel-body">
               <div class="col-md-6">
                   @if(isset($courseId))
                   <form class="form-group" method="post" action="{{url('teacher/sendNotification')}}">
                       {{csrf_field()}}
                       <div class="form-group">
                           <h5>Send a Message to all of your student who have registered this course</h5>
                       </div>

                        <div class="form-group">
                            <input type="hidden" name="courseId" value="{{$courseId}}">

                        </div>


                       <div class="form-group">
                           <textarea class="form-control" name="message"></textarea>

                       </div>

                       <div class="form-group">
                           <input type="submit" class="btn btn-success" value="Send">
                       </div>
                   </form>
                   @endif
               </div>
               {{--<div class="col-md-2" style="float: right">--}}
                   {{--<div class="form-group">--}}
                       {{--<input type="submit" class="btn btn-danger" value="Delete All from the list">--}}
                   {{--</div>--}}
                   {{--<div class="form-group">--}}
                       {{--<input type="submit" class="btn btn-danger" value="Delete All from the list">--}}
                   {{--</div>--}}
                   {{--<div class="form-group">--}}
                       {{--<input type="submit" class="btn btn-danger" value="Delete All from the list">--}}
                   {{--</div>--}}

               {{--</div>--}}
               <div class="clearfix"></div>
               <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover">
                       <thead>
                           <tr>
                               {{--<th style="width:5%">Notify</th>--}}
                               <th style="width:5%">No</th>
                               <th style="width:20%">Student Name</th>
                               <th style="width:25%">Student Email</th>
                               <th style="width:10%">Registration</th>
                               <th style="width:5%">Type</th>
                               <th style="width:5%">Status</th>
                               <th style="width:5%">Action</th>
                           </tr>
                       </thead>
                       <tbody>
                       <form action="" method="post">

                         @if(isset($studentlists))
                             <?php
                               $i = 1;
                               ?>
                         @foreach($studentlists as $studentlist)
                           <tr style="@if($studentlist->status == 0) background: #8d3d1e;color: #ffffff @else background: green;color: #ffffff; @endif">
                               {{--<td>--}}
                                   {{--<input type="checkbox" name="check" style="">--}}
                               {{--</td>--}}
                               <td style="color: #ffffff">{{$i++}}</td>
                               <td style="color: #ffffff">{{$studentlist->studentName}}</td>
                               <td style="color: #ffffff">{{$studentlist->studentEmail}}</td>
                               <td style="color: #ffffff">{{$studentlist->registration}}</td>
                               <td style="color: #ffffff"> {{$studentlist->type === 0 ? "Dropper": "Regular"}}</td>
                               <td style="color: #ffffff">{{$studentlist->status === 0 ? "Waiting" : "Done"}}</td>
                               <td>
                                   @if($studentlist->status == 0)
                                         <a href="{{url('teacher/student-appointment/').'/'.$studentlist->id}}" class="btn btn-success">
                                             <span class="glyphicon glyphicon-ok"></span>
                                         </a>
                                   @else
                                       <a href="{{url('teacher/student-appointment/uncheck').'/'.$studentlist->id}}" class="btn btn-danger">
                                           <span class="glyphicon glyphicon-unchecked" style="color: darkred"></span>
                                       </a>
                                   @endif

                               </td>

                           </tr>
                           @endforeach
                             @endif
                       </form>

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

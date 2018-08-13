@extends('student.master')
@section('mainContent')
    <section id="main-content">
        <section class="wrapper">
            <div class="form-w3layouts">
                <!-- page start-->
                <!-- page start-->
                <div class="row">

                    <div class="col-lg-12">
                        <h3 style="text-align: center;color: #54A857;margin:2%">{{Session::get('message')}}</h3>
                        <section class="panel">
                            <header class="panel-heading">
                                Edit Education
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form class="form-horizontal" method="POST" action="{{ url('student/education/update')}}">
                                        {{ csrf_field() }}

                                        @foreach($educations as $education)
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Award Title</label>
                                                    <input type="text" class="form-control" name="type" value="{{$education->type}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Institution</label>
                                                    <input type="text" class="form-control" name="institution" value="{{$education->institution}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Department</label>
                                                    <input type="text" class="form-control" name="department" value="{{$education->department}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Year</label>
                                                    <input type="text" class="form-control" name="year" value="{{$education->year}}">
                                                </div>
                                                <input type="hidden" class="form-control" name="id" value="{{$education->id}}">
                                                <input type="hidden" class="form-control" name="studentId" value="{{$education->studentId}}">

                                            </div>

                                        @endforeach
                                        <button type="submit" class="btn btn-info">Update</button>
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
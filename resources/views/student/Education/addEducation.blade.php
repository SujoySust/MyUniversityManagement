@extends('student.master')
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
                                Add Awards
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form class="form-horizontal" method="POST" action="{{ url('student/education/save')}}">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Type</label>
                                            <input type="text" class="form-control" name="type" placeholder="Type">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Institutions</label>
                                            <input type="text" class="form-control" name="institution" placeholder="Institution">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Department</label>
                                            <input type="text" class="form-control" name="department" placeholder="Department">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Year</label>
                                            <input type="text" class="form-control" name="year" placeholder="Year">
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
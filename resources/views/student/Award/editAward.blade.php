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
                                Edit Awards
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form class="form-horizontal" method="POST" action="{{ url('student/award/update')}}">
                                        {{ csrf_field() }}

                                        @foreach($awards as $award)
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Award Title</label>
                                                    <input type="text" class="form-control" name="title" value="{{$award->title}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Organization</label>
                                                     <input type="text" class="form-control" name="organization" value="{{$award->organization}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Details</label>
                                                    <input type="text" class="form-control" name="details" value="{{$award->details}}">
                                                </div>
                                                <input type="hidden" class="form-control" name="id" value="{{$award->id}}">
                                                <input type="hidden" class="form-control" name="studentId" value="{{$award->studentId}}">

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
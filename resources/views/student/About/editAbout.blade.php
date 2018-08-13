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
                                Edit About
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form class="form-horizontal" method="POST" action="{{ url('student/about/update')}}">
                                        {{ csrf_field() }}

                                        @foreach($abouts as $about)
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">About</label>
                                                    <textarea type="text" class="form-control" name="about">{{$about->about}}</textarea>
                                                </div>

                                                <input type="hidden" class="form-control" name="id" value="{{$about->id}}">
                                                <input type="hidden" class="form-control" name="studentId" value="{{$about->studentId}}">

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
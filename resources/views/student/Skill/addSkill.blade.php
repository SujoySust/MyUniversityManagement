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
                                Add Course
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form class="form-horizontal" method="POST" action="{{ url('student/skill/save')}}">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Skill Title</label>
                                            <input type="text" class="form-control" name="skill_title" placeholder="Enter Subject Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleTextarea">Skill Percentage</label>
                                            <input type="number" class="form-control" rows="3" name="skill_percentage" placeholder="Skill">
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
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
                                Add Course
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form class="form-horizontal" method="POST" action="{{ url('student/skill/update')}}">
                                        {{ csrf_field() }}

                                        @foreach($studentskills as $studentskill)
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Skill Title</label>
                                                <input type="text" class="form-control" name="skill_title" value="{{$studentskill->skill_title}}">
                                                <input type="hidden" class="form-control" name="id" value="{{$studentskill->id}}">
                                                <input type="hidden" class="form-control" name="student_id" value="{{$studentskill->student_id}}">

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleTextarea">Skill Percentage</label>
                                                <input class="form-control" rows="3" name="skill_percentage" type="number" value="{{$studentskill->skill_percentage}}">
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
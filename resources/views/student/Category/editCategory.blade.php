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
                                Add Category
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form class="form-horizontal" method="POST" action="{{ url('student/category/update')}}">
                                        {{ csrf_field() }}

                                        @foreach($studentCategories as $studentCategory)
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Category Title</label>
                                                <input type="text" class="form-control" name="skill_title" value="{{$studentCategory->category_title}}">
                                                <input type="hidden" class="form-control" name="id" value="{{$studentCategory->id}}">
                                                <input type="hidden" class="form-control" name="student_id" value="{{$studentCategory->student_id}}">

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
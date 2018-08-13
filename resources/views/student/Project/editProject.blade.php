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
                                Update Project
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    @foreach($studentProjects as $studentProject)
                                    <form class="form-horizontal" method="POST" action="{{ url('student/project/update')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="student_id" value="{{$studentProject->student_id}}">
                                            <input type="hidden" class="form-control" name="id" value="{{$studentProject->id}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Name</label>
                                            <select class="form-control" name="category_id" required>
                                                <option value="{{$studentProject->category_id}}">Select a Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->category_title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Project Name</label>
                                            <input type="text" class="form-control" name="project_name" value="{{$studentProject->project_name}}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail">Picture</label>
                                            <img src="{{asset($studentProject->project_pic)}}" style="width: 200px">
                                            <input type="file" class="form-control" name="picture">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Project Link</label>
                                            <input type="text" class="form-control" name="project_link" value="{{$studentProject->project_link}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Project Percentage</label>
                                            <input type="number" class="form-control" name="project_percentage" value="{{$studentProject->project_percentage}}">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleTextarea">Technolog</label>
                                            <textarea class="form-control" rows="3" name="technology">{{$studentProject->technology}}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>
                                        @endforeach
                                </div>

                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </section>
    </section>

@endsection

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
                                Add Project
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form method="POST" action="{{ url('student/project/save')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="student_id" value="{{Auth::guard('student')->user()->id}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Name</label>
                                            <select class="form-control" name="category_id" required>
                                                <option>Select Category Name</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->category_title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Project Name</label>
                                            <input type="text" class="form-control" name="project_name" placeholder="Enter Subject Name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail">Picture</label>
                                            <input type="file" class="form-control" name="picture">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Project Link</label>
                                            <input type="text" class="form-control" name="project_link" placeholder="Enter Project Link">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Project Percentage</label>
                                            <input type="number" class="form-control" name="project_percentage" >
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleTextarea">Technolog</label>
                                            <textarea class="form-control" rows="3" name="technology"></textarea>
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

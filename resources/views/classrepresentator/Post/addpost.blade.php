@extends('classrepresentator.master')
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
                                    <form class="form-group" method="POST" action="{{ url('classrepresentator/post/save')}}">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Post Title</label>
                                            <input type="text" class="form-control" name="posttitle" placeholder="Enter Subject Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleTextarea">Post Details</label>
                                            <textarea  rows="3" id="tarea" name="postdetails" style="min-width: 600px"></textarea>
                                            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                                            <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                            <script>
                                                var options = {
                                                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                                                };
                                            </script>
                                            <script>
                                                CKEDITOR.replace( 'tarea', options );
                                            </script>
                                        </div>

                                          <div class="clearfix"></div>
                                        <button type="submit" class="btn btn-info" style="float: left;width: 100%">Submit</button>
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
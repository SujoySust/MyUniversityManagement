@extends('admin.master')
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
                                Edit Batch
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form class="form-horizontal" method="POST" action="{{ url('admin/batch/update')}}">
                                        {{ csrf_field() }}

                                        @foreach($batches as $batch)
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Skill Title</label>
                                                <input type="text" class="form-control" name="name" value="{{$batch->name}}">
                                                <input type="hidden" class="form-control" name="id" value="{{$batch->id}}">

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleTextarea">Status</label>
                                                <select name="status" class="form-control">
                                                    <option value="{{$batch->status}}">{{$batch->status === 1 ? "Published" : "UnPublished"}}</option>
                                                    <option value="1">Publish</option>
                                                    <option value="0">UnPublish</option>
                                                </select>
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
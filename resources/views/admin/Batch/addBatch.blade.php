@extends('admin.master')
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
                                    <form class="form-group {{ $errors->has('name') ? ' has-error' : '' }} " method="POST" action="{{ url('admin/batch/save')}}">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter Batch Name" required>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Publication</label>
                                            <select class="form-control" name="status">
                                                <option value="1">Publish</option>
                                                <option value="0">UnPublish</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-info">Add</button>
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
@extends('classrepresentator.master')
@section('mainContent')
    <section id="main-content">
        <section class="wrapper">

            <div class="col-md-12 stats-info stats-last widget-shadow well">
                <h3>{{Session::get('message')}}</h3>
                <div class="stats-last-agile">
                    <form  method="POST" action="{{ url('classrepresentator/password/update')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                            <div class="form-group" style="margin-bottom: 5px">
                                <label for="inputEmail3" class="col-sm-4 control-label">Add New Password</label>
                                <div class="col-sm-8 form-group">
                                    <input type="password" class="form-control" name="password" value="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="btn" class="btn btn-success btn-block">Save</button>
                                </div>
                            </div>

                    </form>
                </div>
            </div>
            <div class="clearfix"> </div>
            </div>
        </section>
@endsection


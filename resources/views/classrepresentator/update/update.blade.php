@extends('classrepresentator.master')
@section('mainContent')
    <section id="main-content">
        <section class="wrapper">

            <div class="col-md-8 stats-info stats-last widget-shadow well">
              <h3>{{Session::get('message')}}</h3>
                <div class="stats-last-agile">
                    <form  method="POST" action="{{ url('classrepresentator/profile/update')}}" enctype="multipart/form-data">
                         {{ csrf_field() }}

                        @foreach($crdata as $crids)
                        <div class="form-group" style="margin-bottom: 5px">
                            <label for="inputEmail3" class="col-sm-4 control-label">Name</label>
                            <div class="col-sm-8 form-group">
                                <input type="hidden" name="id" value="{{$crids->id}}">
                                <input type="text" class="form-control" name="name" value="{{$crids->name}}">
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                            <div class="col-sm-8 form-group">
                                <input type="text" class="form-control" name="email" value="{{$crids->email}}">
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Contract</label>
                            <div class="col-sm-8 form-group">
                                <input type="text" class="form-control" name="contract" value="{{$crids->contract}}">
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Batch</label>
                            <div class="col-sm-8 form-group">
                                <select class="form-group" style="width: 100%;min-height: 35px;" name="batch">
                                    @if($crids->batch)
                                    <option value="{{$crids->batch}}">{{$crids->batch}}</option>
                                    @endif
                                    @if(isset($batches))
                                        @foreach($batches as $batch)
                                            <option value="{{$batch->name}}">{{$batch->name}}</option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Picture</label>
                            <div class="col-sm-8 form-group">
                                <img src="{{asset($crids->picture)}}" style="max-width: 400px;max-height: 300px">
                                <input type="file" class="form-control" name="picture">
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Batch Logo</label>
                                <div class="col-sm-8 form-group">
                                    <img src="{{asset($crids->batchlogo)}}" style="max-width: 400px;max-height: 300px">
                                    <input type="file" class="form-control" name="batchlogo">
                                </div>
                            </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Save</button>

                            </div>


                        </div>
                            @endforeach


                    </form>
                </div>
            </div>
            <div class="clearfix"> </div>
            </div>
        </section>
@endsection


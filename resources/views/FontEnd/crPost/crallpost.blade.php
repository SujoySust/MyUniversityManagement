@extends('FontEnd.pages')
@section('mainContent')
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">
            <ul class="short_ls">
                <li>
                    <a href="{{url('/')}}">Home</a>

                </li>
            </ul>
        </div>
    </div>
    <style>
        .w3gallery-grids p,p a,h1,h2,h3,h4,h5,h6{
            color: white;
            white-space: pre-line;
        }
    </style>
    <!-- //short-->
    <!-- Gallery -->
    <div class="gallery">
        <div class="container">
            {{--<div class="title-div">--}}
                {{--<h3 class="tittle">--}}
                    {{--<span>P</span>O<span>S</span>TS--}}
                {{--</h3>--}}
                {{--<div class="tittle-style">--}}

                {{--</div>--}}
            {{--</div>--}}
            <div class="agileinfo-gallery-row">
                <div class="col-md-3 col-sm-12">

                    <div class="btn-group-vertical col-md-12">
                        {{--<button type="button" id="formButton" class="btn btn-success">Add Post</button>--}}
                        <a href="{{url('/')}}" class="btn btn-primary col-sm-12">Home</a>
                        {{--<a href="{{url('/crposts/all')}}" class="btn btn-primary col-sm-12">All</a>--}}
                        @if(isset($crlists))
                            @foreach($crlists as $crlist)
                                @if($crlist->batch)

                                    <a href="{{url('/crposts/all').'/'.$crlist->id}}#post" class="btn btn-primary col-sm-12">{{$crlist->batch}}</a>
                                @else
                                    <a href="{{url('/crposts/all').'/'.$crlist->id}}#post" class="btn btn-primary col-sm-12">{{$crlist->name}}</a>
                                @endif
                            @endforeach
                        @endif
                    </div>

                </div>



                <div class="col-md-9" id="post">
                    <div class="form-group" id="postform" >

                        {{--<form class="form-group" method="POST" action="{{ url('post/save')}}" id="form1" style="display: none">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="exampleTextarea">Post Details</label>--}}
                                {{--<textarea  rows="3" id="tarea" name="postdetails" style="min-width: 600px"></textarea>--}}
                                {{--<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>--}}
                                {{--<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>--}}
                                {{--<script>--}}
                                    {{--var options = {--}}
                                        {{--filebrowserBrowseUrl: '/laravel-filemanager?type=Files',--}}
                                        {{--filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='--}}
                                    {{--};--}}
                                {{--</script>--}}
                                {{--<script>--}}
                                    {{--CKEDITOR.replace( 'tarea', options );--}}
                                {{--</script>--}}
                            {{--</div>--}}
                            {{--<button type="submit" class="btn btn-info" id="bt">Post</button>--}}
                        {{--</form>--}}
                        {{--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>--}}
                        {{--<script type="text/javascript">--}}
                            {{--$(document).ready(function(){--}}
                                {{--$("#formButton").click(function(){--}}
                                    {{--$("#form1").toggle();--}}
                                {{--});--}}
                            {{--});--}}
                            {{--$(document).ready(function(){--}}
                                {{--$("#bt").click(function(){--}}
                                    {{--$("#form1").hide();--}}
                                {{--});--}}
                            {{--});--}}
                        {{--</script>--}}

                    </div>

                    {{--<div class="clearfix"></div>--}}
                @foreach($allposts as $allpost)
                    

                <div class=" w3gallery-grids" style="border: 1px solid #ffffff;margin-bottom: 1%;background: brown;padding: 2%;padding-bottom: 10%">
                    <div class="col-md-10">
                        <span><img src="{{asset('FontEnd/images/download.png')}}" style="width: 5%;float: left;margin-right: 2%;border-radius: 50%"> <h4 style="margin-top: 1%"></h4></span>
                    </div>
                    <div style="float: right" class="col-md-2">
                        <h6 style="color: white;font-family: bold">{!! $allpost->timed !!}</h6>
                        <h6 style="color: white;font-family: bold">{!!$allpost->dated!!}</h6>
                    </div>
                    {{--<div class="agile-figcaption" style="background: green">--}}
                        {{--<h4>{{$allpost->dated}}</h4>--}}
                    {{--</div>--}}
                    <div class="clearfix"></div>


                        <div style="margin-left: 2%">
                            <P style="white-space: pre-line; color: black;margin-top: 0px;">
                                {!! $allpost->postdetails !!}
                            </p>
                        </div>


                </div>
                    <div class="clearfix"></div>
                @endforeach
                </div>


                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection
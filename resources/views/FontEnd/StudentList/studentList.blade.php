@extends('FontEnd.pages')
@section('mainContent')
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">
            {{--<ul class="short_ls">--}}
                {{--<li>--}}
                    {{--<a href="index.html">Home</a>--}}
                    {{--<span>| |</span>--}}
                {{--</li>--}}
                {{--<li>Gallery</li>--}}
            {{--</ul>--}}
        </div>
    </div>
    <!-- //short-->
    <!-- Gallery -->
    <div class="gallery">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>St</span>u<span>den</span>ts
                </h3>
                <div class="tittle-style">

                </div>
            </div>
            <div class="agileinfo-gallery-row">
                @foreach($studentLists as $studentList)
                <div class="col-xs-4 w3gallery-grids">
                    <a href="{{url('studentProfile/').'/'.$studentList->id}}" class="imghvr-hinge-right figure">
                        @if($studentList->picture)
                            <img src="{{asset($studentList->picture)}}" alt="{{$studentList->picture}}" title="Our Library" style="width: 100%;" />
                        @else
                            <img src="{{asset('images/defaultProfilePic.png')}}"  style="width: 100%;" />
                        @endif
                        <div class="agile-figcaption">
                            <h4>{{$studentList->name}}</h4>
                            <h5>2014331050</h5>
                        </div>
                    </a>
                </div>
                @endforeach

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection
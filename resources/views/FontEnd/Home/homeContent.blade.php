@extends('FontEnd.master')
@section('mainContent')
  <style>
    .carousel .item {
      background: url({{asset('Fontend/Slider/slider1.jpg')}}) no-repeat center;
      background-size: cover;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      -ms-background-size: cover;
    }

    .carousel .item.item2 {
      background: url({{asset('Fontend/Slider/slider2.jpg')}}) no-repeat center;
      background-size: cover;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      -ms-background-size: cover;
    }

    .carousel .item.item3 {
      background: url({{asset('Fontend/Slider/slider3.jpg')}}) no-repeat center;
      background-size: cover;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      -ms-background-size: cover;
    }

    .carousel .item.item4 {
      background: url({{asset('Fontend/Slider/slider4.jpg')}}) no-repeat center;
      background-size: cover;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      -ms-background-size: cover;
    }
      .news-grid-info-bottom-w3ls-text{
          margin-left: 5%;
          color: green;
      }
    .news-grid-info-bottom-w3ls-text{
        color: green;
    }
  </style>
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="container">
        <div class="carousel-caption">
          <h6>Welcome To</h6>
          <h3 style="width: 125%">Shahjalal University<span>of Science & Technology</span></h3>
        </div>
      </div>
    </div>
    <div class="item item2">
      <div class="container">
        <div class="carousel-caption">
          <h6>Welcome To</h6>
          <h3 style="width: 125%">Shahjalal University<span>of Science & Technology</span></h3>
        </div>
      </div>
    </div>
    <div class="item item3">
      <div class="container">
        <div class="carousel-caption">
          <h6>Welcome To</h6>
          <h3 style="width: 125%">Shahjalal University<span>of Science & Technology</span></h3>
        </div>
      </div>
    </div>
    <div class="item item4">
      <div class="container">
        <div class="carousel-caption">
          <h6>Welcome To</h6>
          <h3 style="width: 125%">Shahjalal University<span>of Science & Technology</span></h3>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="fa fa-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="fa fa-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!-- The Modal -->
</div>
<!--//banner -->
<!-- about -->
<div class="banner-bottom-w3l" id="about">
  <div class="container">
    <div class="title-div">

    </div>
  </div>
</div>
<!-- //about -->
  <div class="clearfix"> </div>
<!-- services -->
<div class="services" id="submission">
  <div class="container">
    <div class="title-div">
      <h3 class="tittle" style="text-align: center">
        <span>Pro</span>ject
        <span>Sub</span>mission
      </h3>

      </div>
    </div>
    <?php $count=1;?>
    @foreach($posts as $post)
    <div class="services-moksrow" style="margin-top:2%">
     @if(isset(Auth::guard('student')->user()->id))
      <div class="col-xs-4 services-grids-w3l">

        <div class="servi-shadow">
          <span class="fa fa-bullhorn icon" aria-hidden="true"></span>
          <h4><a href="{{url('student/appoint/'.$post->courseid)}}" >{{$post->subjectname}}</a></h4>
          <p>{{$post->subjectdetails}}</p>
          <p><strong>Date : </strong> {{$post->date}}</p>
          <p><strong>From : </strong> {{$post->starttime}} <strong>To : </strong> {{$post->endtime}} </p>
          <p><strong>BY : {{$post->teachername}}</strong> </p>
        </div>

      </div>
       @else
        <div class="col-xs-4 services-grids-w3l">

          <div class="servi-shadow">
            <span class="fa fa-bullhorn icon" aria-hidden="true"></span>
            <h4><a href="{{url('student/login')}}" >{{$post->subjectname}}</a></h4>
            <p>{{$post->subjectdetails}}</p>
            <p><strong>Date : </strong> {{$post->date}}</p>
            <p><strong>From : </strong> {{$post->starttime}} <strong>To : </strong> {{$post->endtime}} </p>
            <p><strong>BY : {{$post->teachername}}</strong> </p>
          </div>

        </div>
       @endif

    </div>
    <?php if($count %3 == 0){?>
      <div class="clearfix"> </div>
      <?php } ?>
    <?php $count++;?>
      @endforeach
      <div class="clearfix"> </div>
  </div>
</div>
<!-- //services -->
<!-- news -->
<div class="news" id="crPost">
  <div class="container">
    <div class="title-div">
      <h3 class="tittle">
        <span>Class</span>Post
      </h3>
      <div class="tittle-style">

      </div>
    </div>
    <style>
      .w3gallery-grids p,p a,h1,h2,h3,h4,h5,h6{
        color: white;
        white-space: pre-line;

      }
      .w3gallery-grids p,p a:hover{
        color: #fff;
      }

    </style>
    <div class="yaallahaa-news-grids-agile" >
      <div class="yaallahaa-news-grid">
        @foreach($crposts as $crpost)
          {{--<a href="{{url('crposts/all/').'/'.$crpost->crid}}">--}}
        {{--<div class="col-md-12 yaallahaa-news-left" style="padding-bottom: 8%;">--}}
          {{--<div class="col-xs-12 col-md-3" style="--}}
  {{--background: url({{asset($crpost->batchlogo)}}) no-repeat 0px 0px;--}}
  {{--background-color: rgba(0, 0, 0, 0);--}}
  {{--background-repeat: no-repeat;--}}
  {{--background-attachment: scroll;--}}
  {{--background-clip: border-box;--}}
  {{--background-origin: padding-box;--}}
  {{--background-position-x: 0px;--}}
  {{--background-position-y: 0px;--}}
  {{--background-size: auto auto;--}}
  {{--background-size: cover;--}}
  {{--height: 250px;">--}}
            {{--<div class="news-left-text color-event1">--}}
              {{--<h5>{{$crpost->batch}}</h5>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="col-xs-12 col-md-6 news-grid-info-bottom-w3ls">--}}
            {{--<div class="news-left-top-text text-color1">--}}
              {{--<a href="#" data-toggle="modal" data-target="#myModal"></a>--}}
            {{--</div>--}}
            {{--<div class="date-grid">--}}
              {{--<div class="admin">--}}

                  {{--<span class="fa fa-clock-o" aria-hidden="true" style="color: darkred;margin-left: 5%">{{$crpost->timed}}</span>--}}
              {{--</div>--}}
              {{--<div class="admin">--}}
                {{--<span style="color: darkred;margin-left: 5%">{{$crpost->dated}}</span>--}}
              {{--</div>--}}
              {{--<div class="clearfix"> </div>--}}
            {{--</div>--}}
            {{--<div class="news-grid-info-bottom-w3ls-text">--}}
              {{--<p style="white-space: pre-line; color: green">{!!$crpost->postdetails!!}</p>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}
          {{--</a>--}}


          <div class=" w3gallery-grids" style="border: 1px solid #ffffff;margin-bottom: 1%;background: brown;padding: 2%;padding-bottom: 10%">
            <div class="col-md-10">
              <a href="{{url('crposts/all/').'/'.$crpost->crid}}">
                <img src="{{asset($crpost->batchlogo)}}" style="width: 50px; height: 50px;float: left;margin-right: 2%;border-radius: 50%;">
                <h4 style="margin-top: 1%">  {{$crpost->batch}}</h4>
              </a>
            </div>
            <div style="float: right" class="col-md-2">
              <h6 style="color: white;font-family: bold">{!! $crpost->timed !!}</h6>
              <h6 style="color: white;font-family: bold">{!!$crpost->dated!!}</h6>
            </div>
            {{--<div class="agile-figcaption" style="background: green">--}}
            {{--<h4>{{$allpost->dated}}</h4>--}}
            {{--</div>--}}
            <div class="clearfix"></div>


            <div style="margin-left: 2%">
              <P style="white-space: pre-line; color: black;margin-top: -10px;">
                {!! $crpost->postdetails !!}
              </p>
            </div>


          </div>
        @endforeach


    </div>
  </div>

</div>
{{--<!-- modal -->--}}
{{--<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">--}}
  {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
      {{--<div class="modal-header">--}}
        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
          {{--<span aria-hidden="true">&times;</span>--}}
        {{--</button>--}}
        {{--<h4 class="modal-title">Best--}}
          {{--<span>Study</span>--}}
        {{--</h4>--}}
      {{--</div>--}}
      {{--<div class="modal-body">--}}
        {{--<div class="model-img-info">--}}
          {{--<img src="FontEnd/images/e1.jpg" alt="" />--}}
          {{--<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque--}}
            {{--ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis--}}
            {{--porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper. Cras tempor massa--}}
            {{--luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
{{--</div>--}}
{{--<!-- //modal -->--}}
<!-- //news -->
<!-- middle section -->
<div class="middle-sec-agile">
  <div class="container">
    <h4>Shajalal University of Science and Technology</h4>
    <ul>
      <li>
        <div class="midle-left-w3l">
          <span class="fa fa-check" aria-hidden="true"></span>
        </div>
        <div class="middle-right">
          <h5>Select A Course You Like And Explore It!</h5>
          <p>Inside the course you have the option to take schedule</p>
        </div>
        <div class="clearfix"></div>
      </li>
      <li>
        <div class="midle-left-w3l">
          <span class="fa fa-check" aria-hidden="true"></span>
        </div>
        <div class="middle-right">
          <h5>Register the course if you want to get the schedule</h5>

        </div>
        <div class="clearfix"></div>
      </li>
      <li>
        <div class="midle-left-w3l">
          <span class="fa fa-check" aria-hidden="true"></span>
        </div>
        <div class="middle-right">
          <h5>Get your schedule and your position</h5>
        </div>
        <div class="clearfix"></div>
      </li>
    </ul>
  </div>
  <div class="pencil-img">
    <img src="FontEnd/images/bg5.png" alt="" />
  </div>
</div>
<!-- //middle section -->
<!-- testimonials -->
  <div class="title-div" id="teacher">
    <h3 class="tittle">
      <span>Teachers</span>
    </h3>
    <div class="tittle-style">

    </div>
  </div>
<div class="clearfix"></div>
<div class="yaallahaa-news-grids-agile" style="margin: 2%">
  @if(isset($teachers))
    @foreach($teachers as $teacher)
      <a href="{{url('teacher-profile').'/'.$teacher->id}}">
  <div class="col-md-4">
  <div class="three_testimonials_grid_main">
    @if($teacher->picture)
    <div class="col-xs-12">
      <img src="{{asset($teacher->picture)}}" alt=" " class="responsive" width="100%"/>
    </div>
    @else
      <div class="col-xs-12">
        <img src="{{asset('images/defaultProfilePic.png')}}" alt=" " class="responsive" width="100%"/>
      </div>
      @endif
    <div class="col-xs-12 three_testimonials_grid" style="padding-bottom: 5%">
      <div class="three_testimonials_grid1">
        <h5 style="text-align: center">{{$teacher->name}}</h5>
        {{--<p style="text-align: center; white-space: pre-line">{{$teacher->details}}</p>--}}
        <p style="text-align: center;">{{$teacher->email}}</p>
        <p style="text-align: center;">{{$teacher->contract}}</p>
      </div>

    </div>
    <div class="clearfix"> </div>
  </div>
    </div>
      </a>
    @endforeach
    @endif

</div>
    <div class="clearfix"></div>

{{--<div class="testimonials">--}}
  {{--<div class="container">--}}
    {{--<div class="title-div">--}}
      {{--<h3 class="tittle">--}}
        {{--<span>O</span>ur--}}
        {{--<span>C</span>lient's--}}
        {{--<span>S</span>ay--}}
      {{--</h3>--}}
      {{--<div class="tittle-style">--}}

      {{--</div>--}}
    {{--</div>--}}
    {{--<ul id="flexiselDemo1">--}}
      {{--<li>--}}

      {{--</li>--}}
      {{--<li>--}}
        {{--<div class="three_testimonials_grid_main">--}}
          {{--<div class="col-xs-3 three_testimonials_grid_pos">--}}
            {{--<div class="grid-test-allah-agile">--}}
              {{--<img src="FontEnd/images/te2.jpg" alt=" " class="img-responsive" />--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="col-xs-9 three_testimonials_grid">--}}
            {{--<div class="three_testimonials_grid1">--}}
              {{--<h5>Faul John</h5>--}}
              {{--<p>Client 2</p>--}}
            {{--</div>--}}
            {{--<p>--}}
              {{--Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa. Suspendisse lacinia rutrum tincidunt.--}}
              {{--Integer id erat porta, convallis.--}}
            {{--</p>--}}
          {{--</div>--}}
          {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}
      {{--</li>--}}
      {{--<li>--}}
        {{--<div class="three_testimonials_grid_main">--}}
          {{--<div class="col-xs-3 three_testimonials_grid_pos">--}}
            {{--<div class="grid-test-allah-agile">--}}
              {{--<img src="FontEnd/images/te3.jpg" alt=" " class="img-responsive" />--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="col-xs-9 three_testimonials_grid">--}}
            {{--<div class="three_testimonials_grid1">--}}
              {{--<h5>Richa Roy</h5>--}}
              {{--<p>Client 3</p>--}}
            {{--</div>--}}
            {{--<p>--}}
              {{--Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa. Suspendisse lacinia rutrum tincidunt.--}}
              {{--Integer id erat porta, convallis.--}}
            {{--</p>--}}
          {{--</div>--}}
          {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}
      {{--</li>--}}

    {{--</ul>--}}
  {{--</div>--}}
{{--</div>--}}

@endsection

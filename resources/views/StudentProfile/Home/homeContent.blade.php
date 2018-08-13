@extends('StudentProfile.master')
@section('mainContent')
<!-- about -->
@foreach($profiles as $profile)
<div class="agile-about w3ls-section text-center" id="about">
    <div class="container">
        <h3 class="agileits-title">about me</h3>
        <div class="agileits-about-grid">
            @if(isset($abouts))
                @foreach($abouts as $about)
            <p>{{$about->about}}</p>
                @endforeach
            @endif
        </div>
        <a href="#contact" class="wthree- about-link scroll">hire me</a>
    </div>
</div>
<!-- //about -->
<!-- about-bottom -->
<div class="agileits-about-btm">
    <div class="container">
        <div class="w3-flex">
            <div class="col-md-4 col-sm-4 col-xs-12 ab1 agileits-about-grid1">
                <span class="fa fa-trophy" aria-hidden="true"></span>
                <h4 class="agileinfo-head">awards</h4>
                @if(isset($awards))
                    @foreach($awards as $award)
                <h5>{{$award->title}}</h5>
                <p><strong>{{$award->organization}}</strong></p>
                <p>{{$award->details}}.</p>
                    @endforeach
                @endif

            </div>
            <div class="col-md-4 col-sm-4 ab1 agileits-about-grid2">
                <span class="fa fa-graduation-cap  wthree-title-list" aria-hidden="true"></span>
                <h4 class="agileinfo-head">education</h4>
                @if(isset($educations))
                    @foreach($educations as $education)
                <h5>{{$education->type}}</h5>
                <p>{{$education->institution}}</p>
                <p>{{$education->department}}</p>
                <p>{{$education->year}}</p>
                    @endforeach
                @endif

            </div>
            <div class="col-md-4 col-sm-4 ab1 agileits-about-grid3">
                <span class="fa fa-shield  wthree-title-list" aria-hidden="true"></span>
                <h4 class="agileinfo-head">expertise</h4>
                @if(isset($expertises))
                    @foreach($expertises as $expertise)
                <h5>{{$expertise->title}}</h5>
                <p>{{$expertise->year}}</p>
                    @endforeach
                @endif

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //about-bottom -->
<!-- skills -->

<div class="agile-service w3ls-section" id="skills" style="background: url(../{{$profile->background}}) fixed">
    <div class="container">
        <div class="col-md-5 w3_agileits-service-left">
            <h3 class="agileits-title">skills</h3>
            <p>All the skills and percentages are shown on the right</p>
        </div>
        <div class="col-md-7 skills-right">
            <div class="vertical-skills  pull-right xs-center">
                <ul class="list-inline">
                    @foreach($skills as $skill)
                    <li>
                        <div class="skill" style="height:{{$skill->skill_percentage}}%; background:#ff9d0d;"><span class="value" style="margin-top: 15px;transform:rotate(-50deg);">{{$skill->skill_percentage}}%</span></div><span class="title">{{$skill->skill_title}}</span></li>
                    @endforeach


                </ul>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="w3ls-section agileits-gallery" id="gallery">
    <div class="container">
        <h3 class="agileits-title">MY work</h3>
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home-main" id="home-tab" role="tab" data-toggle="tab" aria-controls="home-main" aria-expanded="true">Show all</a></li>
                @if(isset($categories))
                    @foreach($categories as $category)
                <li role="presentation"><a href="#myid{{$category->id}}" role="tab" id="learning-tab" data-toggle="tab" aria-controls="myid{{$category->id}}">{{$category->category_title}}</a></li>
                    @endforeach
                @endif
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home-main" aria-labelledby="home-tab">

                    <div class="w3_tab_img">
                        @if(isset($projects))
                            @foreach($projects as $project)
                        <div class="col-sm-3 col-xs-12 w3_tab_img_left" style="margin: 2%">
                            <div class="demo">
                                <a href="{{$project->project_link}}">
                                    <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset($project->project_pic)}}" alt=" " style="height: 300px;width: 100%"/>
                                    </figure>
                                </a>
                            </div>
                            <div class="agile-gallery-info">
                                <h4>{{$project->project_name}}</h4>
                                <p>{{$project->technology}}</p>
                            </div>
                        </div>
                            @endforeach
                        @endif

                        <div class="clearfix"> </div>
                    </div>
                </div>
                {{--<div role="tabpanel" class="tab-pane fade" id="learning" aria-labelledby="learning-tab">--}}
                    {{--<div class="w3_tab_img tab-pane fade" id="learning">--}}
                @if(isset($projects))
                    <?php
                    $i = 1;
                    ?>
                    @foreach($projects as $project)
                            <div id="myTabContent" class="tab-content">
                        <div class="col-sm-3 w3_tab_img_left tab-pane fade" id="myid{{$project->category_id}}" aria-labelledby="{{$project->category_id}}-tab">
                            <div class="demo">
                                <a class="cm-overlay" href="{{$project->project_link}}">
                                    <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset($project->project_pic)}}" alt=" " class="img-responsive">
                                    </figure>
                                </a>
                            </div>
                            <div class="agile-gallery-info">
                                <h5>{{$project->project_name}}</h5>
                                <p>{{$project->technology}}</p>
                            </div>
                        </div>
                            </div>
                        @if($i%4 == 0)
                                <div class="clearfix"> </div>
                            @endif
                        <?php
                            $i++;
                            ?>
                    @endforeach
                @endif
                        <div class="clearfix"> </div>
                    {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>
    </div>
    <script src="{{asset('Student/')}}/js/jquery.tools.min.js"></script>
    <script src="{{asset('Student/')}}/js/jquery.mobile.custom.min.js"></script>
    <script src="{{asset('Student/')}}/js/jquery.cm-overlay.js"></script>
    <script>
        $(document).ready(function () {
            $('.cm-overlay').cmOverlay();
        });
    </script>
</div>
<!-- //menu -->
<!-- services -->
{{--<div class="w3ls-section services" id="services">--}}
    {{--<div class="container">--}}
        {{--<h3 class="agileits-title text-center">services</h3>--}}
        {{--<div class="services-w3ls-row agileits-w3layouts service1 text-center">--}}
            {{--<h5>web design</h5>--}}
            {{--<p>Tenetur a sapiente itaque earum rerum hic delectus maiores alias phasellus.</p>--}}
            {{--<div class="s-top">--}}
                {{--<span class="fa fa-laptop" aria-hidden="true"></span>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="services-w3ls-row agileits-w3layouts middlegrid-w3ls">--}}
            {{--<div class="col-md-4 services-grid agileits-w3layouts service2">--}}
                {{--<div class="col-md-10 w3ls-sub-text">--}}
                    {{--<h5>ui design</h5>--}}
                    {{--<p>Tenetur a sapiente itaque earum rerum hic delectus maiores alias phasellus.</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-2 sub-icon">--}}
                    {{--<span class="fa fa-caret-square-o-up" aria-hidden="true"></span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 services-grid img-agileits">--}}
                {{--<img src="{{asset($profile->picture)}}" class="img-responsive" alt="" />--}}
            {{--</div>--}}
            {{--<div class="col-md-4 services-grid agileits-w3layouts service3">--}}
                {{--<div class="col-md-2 sub-icon">--}}
                    {{--<span class="fa fa-grav" aria-hidden="true"></span>--}}
                {{--</div>--}}
                {{--<div class="col-md-10 w3ls-sub-text">--}}
                    {{--<h5>graphic design</h5>--}}
                    {{--<p>Tenetur a sapiente itaque earum rerum hic delectus maiores alias phasellus.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}
        {{--<div class="services-w3ls-row agileits-w3layouts service4">--}}
            {{--<div class="s-top">--}}
                {{--<span class="fa fa-adjust" aria-hidden="true"></span>--}}
            {{--</div>--}}
            {{--<h5>seo</h5>--}}
            {{--<p>Tenetur a sapiente itaque earum rerum hic delectus maiores alias phasellus.</p>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- //services -->--}}
<!-- contact -->
<style>
    .contact-w3-agileits {
        background: url(../{{$profile->background}}) no-repeat center;
        background-size: cover;
    }

</style>
<div class="contact-w3-agileits w3ls-section" id="contact">
    <div class="container">
        <h3 class="agileits-title cont-w3l">Feel free to contact me</h3>
        <div class="contact-main-w3ls">
            <div class="col-md-6  contact-left-w3ls">
                <div class="mail contact-grid-agileinfo">
                    <div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
                        <h4>Mail me</h4>
                    </div>
                    <div class="col-md-8  col-sm-8 col-xs-8 contact-text-agileinfo">
                        <a href="{{$profile->email}}">{{$profile->email}}</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="call contact-grid-agileinfo">
                    <div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
                        <h4>Phone</h4>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8 contact-text-agileinfo">
                        <p>{{$profile->contract}}</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="contact-grid-agileinfo">
                    <div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
                        <h4>Address</h4>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8 contact-text-agileinfo">
                        <p>{{$profile->address}}
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="visit wthree-social-icons contact-grid-agileinfo">
                    <div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
                        <h4>Follow me</h4>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8 contact-text-agileinfo">
                        <ul class="w3-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="contact-main">
                <div class="col-md-6 agileits-main-right">
                    <form action="{{url('message/send')}}" method="post" class="agile_form">
                        {{csrf_field()}}
                        <label class="header">Name</label>
                        <div class="icon1 w3ls-name1">
                            <input placeholder=" " name="name" type="text" required="">
                            <input type="hidden" name="studentId" value="{{$profile->id}}">
                        </div>
                        <div class="icon2">
                            <label class="header">Email</label>
                            <input placeholder=" " name="email" type="email">
                        </div>
                        <label class="header">your message</label>
                        <textarea class="w3l_summary" required="" name="message"></textarea>
                        <input type="submit" value="SEND">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- //contact -->
    @endsection
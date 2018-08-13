@extends('FontEnd.student')
@section('mainContent')
    @foreach($profiles as $profile)
        <div class="banner-text">
        <div class="container">
            <h1><a href="index.html">{{$profile->name}}</a></h1>
            <h2 class="w3ls-bnrtext">I am <span> {{$profile->title}}</span></h2>
            <p class="w3ls-p">an interactive web designer with the passion for creativity</p>
            <a href="#about" class="buy btn-wayra scroll">Explore my work</a>
        </div>
    </div>
    <!-- about -->
    <div class="agile-about w3ls-section text-center" id="about">
        <div class="container">
            <h3 class="agileits-title" style="color: white">about me</h3>
            <div class="agileits-about-grid">
                <p style="white-space: pre-line;color: white">{{$profile->description}}</p>
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
                    <h5>best website design</h5>
                    <p>Ncididunt ut labore et t enim ad minim.</p>
                    <h5>site of the day</h5>
                    <p>Ncididunt ut labore et t enim ad minim.</p>
                    <h5>premier UX award</h5>
                    <p>Ncididunt ut labore et t enim ad minim.</p>
                </div>
                <div class="col-md-4 col-sm-4 ab1 agileits-about-grid2">
                    <span class="fa fa-graduation-cap  wthree-title-list" aria-hidden="true"></span>
                    <h4 class="agileinfo-head">education</h4>
                    <h5>Phd Computer Science</h5>
                    <p>Ncididunt ut labore et t enim ad minim.</p>
                    <h5>University</h5>
                    <p>Ncididunt ut labore et t enim ad minim.</p>
                    <h5>High School</h5>
                    <p>Ncididunt ut labore et t enim ad minim.</p>
                </div>
                <div class="col-md-4 col-sm-4 ab1 agileits-about-grid3">
                    <span class="fa fa-shield  wthree-title-list" aria-hidden="true"></span>
                    <h4 class="agileinfo-head">expertise</h4>
                    <h5>Senior Interface Designer</h5>
                    <p>20XX-20XX</p>
                    <h5>Graphic Designer</h5>
                    <p>20XX-20XX</p>
                    <h5>Web Designer</h5>
                    <p>20XX-20XX</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //about-bottom -->
    <!-- skills -->
    <div class="agile-service w3ls-section" id="skills" style="background: url({{asset($profile->background)}});background-repeat: no-repeat;
            background-size: auto;background-size: 100% ">
        <div class="container">
            <div class="col-md-5 w3_agileits-service-left">
                <h3 class="agileits-title">skills</h3>
                <p>Ncididunt ut labore et t enim ad minim.cididunt ut labore et t enim ad minim.Ncididunt ut labore et t enim ad minim labore
                    et t enim ad minim.Ncididunt ut labore et t enim a.</p>
            </div>
            <div class="col-md-7 skills-right">
                <div class="vertical-skills  pull-right xs-center">
                    <div class="list-inline">
                        <ul>
                        @foreach($skills as $skill)
                        <li>
                            
                            <div class="skill" style="height:{{$skill->skill_percentage}};background: green">
                                <span class="value">{{$skill->skill_percentage}}</span><span class="title">{{$skill->skill_title}}</span>
                            </div>
                        </li>

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
                    <li role="presentation"><a href="#learning" role="tab" id="learning-tab" data-toggle="tab" aria-controls="learning">Web design</a></li>
                    <li role="presentation"><a href="#playing" role="tab" id="playing-tab" data-toggle="tab" aria-controls="playing">Photography</a></li>
                    <li role="presentation"><a href="#painting" role="tab" id="painting-tab" data-toggle="tab" aria-controls="painting">Illustration</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home-main" aria-labelledby="home-tab">
                        <div class="w3_tab_img">
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g1.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g1.jpg" alt=" " class="img-responsive" />
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>HTML CSS JS PHP Python Laravel Nodejs HTML CSS JS PHP Python Laravel Nodejs</p>
                                </div>
                            </div>

                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g2.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g2.jpg" alt=" " class="img-responsive" />
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Adipiscing </p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g3.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g3.jpg" alt=" " class="img-responsive" />
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Ullamcorper </p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g4.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g4.jpg" alt=" " class="img-responsive" />
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Tristique</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g5.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g5.jpg" alt=" " class="img-responsive" />
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>accumsan</p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g6.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g6.jpg" alt=" " class="img-responsive" />
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Vulputate</p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g7.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g7.jpg" alt=" " class="img-responsive" />
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Sodales</p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g8.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g8.jpg" alt=" " class="img-responsive" />
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Ornare </p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="learning" aria-labelledby="learning-tab">
                        <div class="w3_tab_img">
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g2.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g2.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Eleifend</p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g3.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g3.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Pulvinar</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="playing" aria-labelledby="playing-tab">
                        <div class="w3_tab_img">
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g4.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g4.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Blandit</p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g1.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g1.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Vivamus</p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g2.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g3.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Eleifend</p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g3.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g2.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Blandit</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="painting" aria-labelledby="painting-tab">
                        <div class="w3_tab_img">
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g1.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g1.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Ornare </p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g2.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g2.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Pulvinar</p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{asset('Student/')}}/images/g3.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="{{asset('Student/')}}/images/g3.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>My project</h5>
                                    <p>Vulputate</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
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
    <div class="w3ls-section services" id="services">
        <div class="container">
            <h3 class="agileits-title text-center">services</h3>
            <div class="services-w3ls-row agileits-w3layouts service1 text-center">
                <h5>web design</h5>
                <p>Tenetur a sapiente itaque earum rerum hic delectus maiores alias phasellus.</p>
                <div class="s-top">
                    <span class="fa fa-laptop" aria-hidden="true"></span>
                </div>
            </div>
            <div class="services-w3ls-row agileits-w3layouts middlegrid-w3ls">
                <div class="col-md-4 services-grid agileits-w3layouts service2">
                    <div class="col-md-10 w3ls-sub-text">
                        <h5>ui design</h5>
                        <p>Tenetur a sapiente itaque earum rerum hic delectus maiores alias phasellus.</p>
                    </div>
                    <div class="col-md-2 sub-icon">
                        <span class="fa fa-caret-square-o-up" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="col-md-4 services-grid img-agileits">
                    <img src="{{asset('Student/')}}/images/services.jpg" class="img-responsive" alt="" />
                </div>
                <div class="col-md-4 services-grid agileits-w3layouts service3">
                    <div class="col-md-2 sub-icon">
                        <span class="fa fa-grav" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 w3ls-sub-text">
                        <h5>graphic design</h5>
                        <p>Tenetur a sapiente itaque earum rerum hic delectus maiores alias phasellus.</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="services-w3ls-row agileits-w3layouts service4">
                <div class="s-top">
                    <span class="fa fa-adjust" aria-hidden="true"></span>
                </div>
                <h5>seo</h5>
                <p>Tenetur a sapiente itaque earum rerum hic delectus maiores alias phasellus.</p>
            </div>
        </div>
    </div>
    <!-- //services -->
    <!-- contact -->
    <div class="contact-w3-agileits w3ls-section" id="contact">
        <div class="container">
            <h3 class="agileits-title cont-w3l" style="color: white">Feel free to contact me</h3>
            <div class="contact-main-w3ls" style="background: url({{asset($profile->background)}});background-size: 100%">
                <div class="col-md-6  contact-left-w3ls">
                    <div class="mail contact-grid-agileinfo">
                        <div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
                            <h4>Mail me</h4>
                        </div>
                        <div class="col-md-8  col-sm-8 col-xs-8 contact-text-agileinfo">
                            <a href="mailto:info@example.com">info@example.com</a><br>
                            <a href="mailto:info@example.com">w3ls@example.com</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="call contact-grid-agileinfo">
                        <div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
                            <h4>Phone</h4>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-8 contact-text-agileinfo">
                            <p>+18044261149</p>
                            <p>+18045261149</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="contact-grid-agileinfo">
                        <div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
                            <h4>Address</h4>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-8 contact-text-agileinfo">
                            <p>1234 Somewhere Road #5432<br> Nashville, TN 00000<br> USA.
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
                        <form action="#" method="post" class="agile_form">
                            <label class="header">Name</label>
                            <div class="icon1 w3ls-name1">
                                <input placeholder=" " name="first name" type="text" required="">
                            </div>
                            <div class="icon2">
                                <label class="header">Email</label>
                                <input placeholder=" " name="Email" type="email" required="">
                            </div>
                            <label class="header">your message</label>
                            <textarea class="w3l_summary" required=""></textarea>
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
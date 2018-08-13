<div class="banner-text">
    <div class="container">
        @foreach($profiles as $profile)
        <h1>{{$profile->name}}</h1>

                    {{--<h3 class="agileits-title text-center">services</h3>--}}
                    {{--<div class="services-w3ls-row agileits-w3layouts service1 text-center">--}}
                    {{--<h5>web design</h5>--}}
                    {{--<p>Tenetur a sapiente itaque earum rerum hic delectus maiores alias phasellus.</p>--}}
                    {{--<div class="s-top">--}}
                    {{--<span class="fa fa-laptop" aria-hidden="true"></span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="services-w3ls-row agileits-w3layouts middlegrid-w3ls">
                        {{--<div class="col-md-4 services-grid agileits-w3layouts service2">--}}
                        {{--<div class="col-md-10 w3ls-sub-text">--}}
                        {{--<h5>ui design</h5>--}}
                        {{--<p>Tenetur a sapiente itaque earum rerum hic delectus maiores alias phasellus.</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2 sub-icon">--}}
                        {{--<span class="fa fa-caret-square-o-up" aria-hidden="true"></span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-md-4 services-grid">

                        </div>
                        <div class="col-md-4 services-grid">
                            <img src="{{asset($profile->picture)}}" class="img-responsive" alt="" />
                        </div>
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
                    </div>
                    {{--<div class="services-w3ls-row agileits-w3layouts service4">--}}
                    {{--<div class="s-top">--}}
                    {{--<span class="fa fa-adjust" aria-hidden="true"></span>--}}
                    {{--</div>--}}
                    {{--<h5>seo</h5>--}}
                    {{--<p>Tenetur a sapiente itaque earum rerum hic delectus maiores alias phasellus.</p>--}}
                    {{--</div>--}}
        <div class="clearfix"></div>
        <h2 class="w3ls-bnrtext">{{$profile->title}}</h2>
        <p class="w3ls-p">{{$profile->description}}</p>
        <a href="#gallery" class="buy btn-wayra scroll">Explore my work</a>
        @endforeach
    </div>
</div>
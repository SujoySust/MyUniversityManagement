<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Teacher's Panel</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <link href="{{asset('Signup/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('Signup/css/snow.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('Signup/css/component.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('Signup/css/style_grid.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('Signup/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome-icons -->
    <link href="{{asset('Signup/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- /pages_agile_info_w3l -->
<div class="pages_agile_info_w3l">
    <!-- /login -->
    <div class="over_lay_agile_pages_w3ls">
        <div class="registration">

            @yield('content')
        </div>
        <!--copy rights start here-->
        <!--copy rights end here-->
    </div>
</div>
<!-- /login -->
<!-- //pages_agile_info_w3l -->


<!-- js -->

<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('Signup/js/modernizr.custom.js')}}"></script>

<script src="{{asset('Signup/js/classie.js')}}"></script>
<script src="{{asset('Signup/js/gnmenu.js')}}"></script>
<script>
    new gnMenu( document.getElementById( 'gn-menu' ) );
</script>

<!-- //js -->

<script src="{{asset('Signup/js/screenfull.js')}}"></script>
<script>
    $(function () {
        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

        if (!screenfull.enabled) {
            return false;
        }



        $('#toggle').click(function () {
            screenfull.toggle($('#container')[0]);
        });
    });
</script>
<script src="{{asset('Signup/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('Signup/js/scripts.js')}}"></script>
<script src="{{asset('Signup/js/snow.js')}}"></script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
<script type="text/javascript" src="{{asset('Signup/js/bootstrap-3.1.1.min.js')}}"></script>


</body>
</html>

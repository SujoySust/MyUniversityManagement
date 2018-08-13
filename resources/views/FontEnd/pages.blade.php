<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Best Study an Education Category Bootstrap Responsive Website Template | Join Us :: w3layouts</title>
	<!-- meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //meta-tags -->
	<link href="{{asset('FontEnd/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('FontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome -->
	<link href="{{asset('FontEnd/css/font-awesome.css')}}" rel="stylesheet">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
@include('FontEnd.Include.pageheader')
	<!-- //short-->
@yield('mainContent')

	<!-- footer -->
@include('FontEnd.Include.pagefooter')
	<!--/footer -->

	<!-- js files -->
	<!-- js -->
	<script src="{{asset('FontEnd/js/jquery-2.1.4.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('FontEnd/js/bootstrap.js')}}"></script>
	<!-- Calendar -->
	<link rel="stylesheet" href="{{asset('FontEnd/css/jquery-ui.css')}}" />
	<script src="{{asset('FontEnd/js/jquery-ui.js')}}"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- smooth scrolling -->
	<script src="{{asset('FontEnd/js/SmoothScroll.min.js')}}"></script>
	<script src="{{asset('FontEnd/js/move-top.js')}}"></script>
	<script src="{{asset('FontEnd/js/easing.js')}}"></script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smooth scrolling -->
	<!-- //js-files -->

</body>

</html>

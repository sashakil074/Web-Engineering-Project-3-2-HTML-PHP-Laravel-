<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>@yield('admintitle')</title>

	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="/img/logo.png" rel="icon">
	<link href="/img/apple-touch-icon.png" rel="apple-touch-icon">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<script src="/js/modernizr.js"></script>
	<!-- Vendor CSS Files -->
	<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="/css/style2.css" rel="stylesheet">
</head>

<body>


	<!-- ====================================================
	header section -->
	<!-- ======= Top Bar ======= -->
	<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
		<div class="container d-flex">
			<div class="contact-info mr-auto">
				<i class="icofont-envelope"></i> <a href="mailto:contact@example.com">shakil.ahammed074@gmail.com</a>
				<i class="icofont-phone"></i> +8801766165877
				<i class="icofont-google-map"></i> CSE-PUST,Rajapur,Pabna
			</div>
			<div class="social-links">
				<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
				<a href="#" class="facebook"><i class="icofont-facebook"></i></a>
				<a href="#" class="instagram"><i class="icofont-instagram"></i></a>
				<a href="#" class="skype"><i class="icofont-skype"></i></a>
				<a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
			</div>
		</div>
	</div>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">

			<h1 class="logo mr-auto"><a href="/index"><img src="img/logo.png" alt="" class="img-responsive logo"></a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

			<nav class="nav-menu d-none d-lg-block">
				<ul>

					@yield('adminnavitem')

				</ul>

			</nav>
		</div>
	</header> <!-- end of header area -->



	@yield('admincontent')



	<!-- footer starts here -->
	<!-- Site footer -->

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3">
					<h6><a href="/about">About Us</a></h6>
				</div>

				<div class="col-xs-6 col-md-3">
					<h6><a href="/contact">Contact Us</a></h6>
				</div>

				<div class="col-xs-6 col-md-3">
					<h6>
						<h6><a href="/faq">FAQ</a></h6>
					</h6>
				</div>

				<div class="col-xs-6 col-md-3">
					<h6><a href="/adminfeedback">Feedbacks</a></h6>
				</div>
			</div>
			<hr>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12">
					<p style="text-align: left" class="copyright-text"> Copyright &copy; All Rights Reserved by CSE PUST
					</p>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<ul class="social-icons">
						<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>

			</div>
		</div>


	</footer>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>
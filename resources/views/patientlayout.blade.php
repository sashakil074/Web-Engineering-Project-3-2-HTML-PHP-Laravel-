<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>@yield('title')</title>

	<script>
      $(function () {
  // this will get the full URL at the address bar
  var url = window.location.href;
  // passes on every "a" tag
  $(".navbar-nav .nav-link").each(function () {
    // checks if its the same on the address bar
    if (url == (this.href)) {
      $(this).closest("li").addClass("active");
      //for making parent of submenu active
      $(this).closest("li").parent().parent().addClass("active");
    }
  });
});
</script>
	<link href="/img/logo.png" rel="icon">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="/js/modernizr.js"></script>
	<script src="js/custom.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->


</head>
<body>
	
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="/psyhome"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
							  @yield('navitem1')
					       
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

	

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/depimg3.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>Get</h1>
		               			<p>Treatments for mental health Problems</p>
		               	
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/depimg11.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>Get</h1>
		               			<p>Treatments for mental health Problems</p>
		               			
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/depimg10.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>Get</h1>
		               			<p>Treatments for mental health Problems</p>
		               			
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/depimg5.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>Get</h1>
		               			<p>Treatments for mental health Problems</p>
		               			
			                </div>
			            </div>
						<div class="item">
			            	<img src="img/depimg6.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>Get</h1>
		               			<p>Treatments for mental health Problems</p>
		               			
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->


	 @yield('content2')

	

	<!-- footer starts here -->
	 <!-- Site footer -->
	 
	 <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-3">
		  <h6><a href="#">About Us</a></h6>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6><a href="#">Contact Us</a></h6>
          </div>

          <div class="col-xs-6 col-md-3">
		  <h6> <h6><a href="#">FAQ</a></h6></h6>
		  </div>
		  
          <div class="col-xs-6 col-md-3">
		   <h6><a href="/patientfeedback">Feedbacks</a></h6>
		   </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p style="text-align: left" class="copyright-text"> Copyright &copy;  All Rights Reserved by CSE PUST
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
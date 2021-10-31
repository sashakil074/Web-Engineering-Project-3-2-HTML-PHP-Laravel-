<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/logo.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <!-- =======================================================
  * Template Name: Medilab - v2.1.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

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

      <h1 class="logo mr-auto"><a href="#"><img src="img/logo.png" alt="" class="img-responsive logo"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        @if(!empty(Session::get('user')))
        <li> <a href="/patienthome">Home</a></li>
       @elseif(!empty(Session::get('user2')))
       <li><a href="/psyhome">Home</a></li>
       @else
       <li class="inactive"><a href="/index">Index</a></li>
    @endif
          <li class="active"><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/faq">FAQ</a></li>
         <li><a href="/all_feedbacks">Feedbacks</a></li>
          <li><a href="/tac">Terms and Conditions</a></li>
          <li><a href="/pp">Privacy Policy</a></li>
          </nav>
      
</ul>

</div>
</header>
<br>
    <br>
    <br>
    <br>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
         <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
       <!--  <a src="/index_img/index_video.mp4" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true">
    
      </a>-->
      <video width="600" min-height="500"  controls>
  <source src="/index_img/index_video.mp4" type="video/mp4">

   </video>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>About E-health Care System for Mental Health Problems</h3>
            <p>“E-Health Care System for Mental Health Problems” is a web  application.
                developed to prevent mental health
                problems like depression,anxiety and remove suicide like social problems from our society.
                Mental Health problems are the main reasons of this social burden(suicide).
                So the main objective of this web application is to remove these problems from our society.
            </p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><p></p>Secure</h4>
              <p class="description">This is a secure web platform where user privacy are fully protected.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><p>Effective Treatments</p></h4>
              <p class="description">Our site provides the best and effective treatments for mental health problems.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><p>Best Results</p></h4>
              <p class="description">Our services like articles,courses and consultation with psychologists
                 gives the best results for mental health problems.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <br>
    <br>
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
              <span data-toggle="counter-up">50</span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-patient-bed"></i>
              <span data-toggle="counter-up">60</span>
              <p>Courses</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-money"></i>
              <span data-toggle="counter-up">150</span>
              <p>Starting Course Price(TK) </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-award"></i>
              <span data-toggle="counter-up">30</span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
  
    @if(!empty(Session::get('user')))
    <a href="/patienthome">Home</a>
       @elseif(!empty(Session::get('user2')))
      <a href="/psyhome">Home</a>
       @else
       <h1>Works</h1>
    @endif
               
  
</main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>E-Care For Mental Health</h3>
            <p>
            CSE-PUST,<br>
            Rajapur,Pabna,<br>
            Bangladesh
            <br>
              <strong>Phone:</strong> +8801766165877<br>
              <strong>Email:</strong> shakil.ahammed074@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="/contact">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/faq">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/all_feedbacks">Feedbacks</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Adminstration</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/adminLogin">Admin Login</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/superadminLogin">SuperAdmin Login</a></li>
             <!-- <li><i class="bx bx-chevron-right"></i> <a href="#"></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"></a></li>-->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Others</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="/tac">Terms and conditions</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/pp">Privacy policy</a></li>
        </ul>
           <!-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>-->
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>CSE-PUST</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by SA Shakil
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>
  <script src="/vendor/venobox/venobox.min.js"></script>
  <script src="/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/vendor/counterup/counterup.min.js"></script>
  <script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>


</body>

</html>
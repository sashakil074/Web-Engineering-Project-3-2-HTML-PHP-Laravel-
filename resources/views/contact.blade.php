<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us</title>
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
       <li><a href="/index">Index</a></li>
    @endif
          <li ><a href="/about">About</a></li>
          <li class="active"><a href="/contact">Contact</a></li>
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
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Our address and contacts</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.5048753248475!2d89.27621125062923!3d24.01325518438415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe84f0ec23a72b%3A0x775d6cd53cbdad8b!2z4Kaq4Ka-4Kas4Kao4Ka-IOCmrOCmv-CmnOCnjeCmnuCmvuCmqCDgppMg4Kaq4KeN4Kaw4Kav4KeB4KaV4KeN4Kak4Ka_IOCmrOCmv-CmtuCnjeCmrOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCmr-CmvA!5e0!3m2!1sbn!2sbd!4v1633503542042!5m2!1sbn!2sbd" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>CSE-PUST,Rajapur,Pabna</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>shakil.ahammed074@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+8801766165877</p>
              </div>

            </div>

          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->
               
  
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Feedbacks</title>
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
        <li><a href="/index">Index</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/faq">FAQ</a></li>
         <li class="active"><a href="/all_feedbacks">Feedbacks</a></li>
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
    <style>

/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 5px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  max-height:60px;
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.containerf {
  border-radius: 2px;
  background-color: #41DBAB;
  opacity: 80%;
  padding: 10px;

}
</style>
<br>
<br>
<br>
<br>
<div>
@if(Session::get('feedback_given'))
  <div class="alert alert-success">
    {{Session::get('feedback_given')}}
    </div>
    @endif
</div>
    <br>
<br>

<br>
<br>
<h1 style="text-align:center">Feedbacks</h1>
<div class="container" style="border-style:none;background:grey" >

<br>
<br>
@foreach($feedbackdata as $data)
<div class="container article" style="max-width:1000px;border-style:inset;border-width:2px;">
<h4  style="padding-left:90px; text-transform: uppercase;color: #fff;">
{{$data->Name}}
</h4>
<p style="padding-left:90px;color: #fff;" id="datetime">{{$data->Status}}</p>

<p style="padding-left:90px;font-size: 20px;color: #fff;">{{$data->Feedback}}</p>
</div>
<br>
<br>

@endforeach
<br>
<br>
<div div class="containerf" style="border-style:groove;">
<h1 style="text-align:center">Give Feedback</h1>
  <form action="{{route('visitor.feedback')}}" method="post">
   @csrf
    <label > Name</label>
    <input type="text"  name="Name" placeholder="Your name..">
    @if($errors->has('Name'))
     <span class="text-danger">
     <br> {{$errors->first('Name')}}
    </span>
     @endif
    <label > Email</label>
    <input type="text"  name="Email" placeholder="Your Email..">
    @if($errors->has('Email'))
     <span class="text-danger">
     <br> {{$errors->first('Email')}}
    </span>
     @endif
    <label >Write Your Feedbacks</label>
    <textarea  name="Feedback" placeholder="Write something.." style="height:200px"></textarea>
    @if($errors->has('Feedback'))
     <span class="text-danger">
     <br> {{$errors->first('Feedback')}}
    </span>
     @endif
    <button type="submit" class="btn btn-success"  style=" background-color: green;">Submit</button>

  </form>
</div>
<br>
<br>
</div>
<br>
<br>
<br>
<br>
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
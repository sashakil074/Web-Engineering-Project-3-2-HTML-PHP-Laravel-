<!DOCTYPE html>


<html>

    
    <head>
        <title>Psychologist Registration</title>
        <link href="/img/logo.png" rel="icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
    </head>
    
    <style>
    
    * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
  width: 60%;
  height: 30px;
  text-align: center;
  padding: 15px;
  margin: 10px auto;
  display: inline-block;
  border: none;
  background: white;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
body{
  background-image: url(img/depimg9.jpg);
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 20px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: black;
  text-align: center;
  height: 735px;
  width: 520px;
  opacity: 0.8;
}  
    </style>
    <body>
      
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
          <li><a href="/index">Home</a></li>
          <li><a href="/about">About</a></li>
         <li><a href="/faq">FAQ</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/all_feedbacks">Feedbacks</a></li>
          <li><a href="/tac">Terms and conditions</a></li>
          <li><a href="/pp">Privacy policy</a></li>

       <!-- .nav-menu -->
      
      </nav> 
    </div>
  </header><!-- End Header -->
  <br>
    <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
          <br>
         <br>
         <br>
         <br>
         <br>
         <div>
         @if(Session::get('error'))
         <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
            {{Session::get('error')}}
         </div>
         @endif
        </div> 
    <br>  

    <div class="container signin">
        <h1 style="color: white">Create Psychologist Account</h1>
     <form action="psyregistration" method="post" >
       @csrf
    <input type="text" name="Name" class="form-control" placeholder=" Name" >
    <br>
    <input type="text" name="NID_no" class="form-control" placeholder="NID NO" >
    <br>
    <input type="text" name="Position" class="form-control" placeholder="Position" >
    <br>
    <input type="text" name="Work_place" class="form-control" placeholder="Working Place" >
    <br>
    <input type="text" name="Division" class="form-control" placeholder="Division" >
    <br>
    <input type="text" name="District" class="form-control" placeholder="District" >
    <br>
    <input type="email" name="Email" class="form-control" placeholder="Email" >
    <br>
    <input type="text" name="Contact" class="form-control" placeholder="Contact No" >
    <br>
    <input type="text" name="Username" class="form-control" placeholder="Username" >
    <br>
    <input type="password" name="Password" class="form-control" placeholder="Password" >
    <br>
    <input type="password" name="Password_confirmation" class="form-control" placeholder="Confirm Password" >
    <br>
    <button type="submit" class="btn btn-success">SignUp</button>
    <p style="color: white">Already have an account? <a href="/psylogin">Sign in</a>.</p>
  </div>
</form>

<br>
<br>
<br>

<br>
         <br>
         <br>
         <br>
         <br>
         <br>
          <br>
         <br>
         <br>
         <br>
         <br>
 <!-- ======= Footer ======= -->
 
 <footer id="footer">

    
      
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
    </body>
</html>
<!DOCTYPE html>


<html>

    
    <head>
        <title>Patient Registration</title>
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
input[type=text], input[type=password],input[type=email],select {
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
  height: 650px;
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
         @if(Session::get('error2'))
         <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
            {{Session::get('error2')}}
         </div>
         @endif
        </div> 
    <br>        
    <div class="container signin">
        <h1 style="color: white">Create Patient Account</h1>
     <form action="patientregistration" method="post" >
       @csrf
    <input type="text" name="Name" class="form-control" placeholder=" Name" >
    <br>
    <input type="text" name="NID_no" class="form-control" placeholder="NID NO" >
    <br>
    <!--<input type="text" name="Birth_year" class="form-control" placeholder="Birth Year" >-->
    <select class="form-control" name="Birth_year" style="width: 60%;height:32px;">
    <option >Birth Year</option>
    <option value="1940">1940</option>
    <option value="1941">1941</option>
    <option value="1942">1942</option>
    <option value="1943">1943</option>
    <option value="1944">1944</option>
    <option value="1945">1945</option>
    <option value="1946">1946</option>
    <option value="1947">1947</option>
    <option value="1948">1948</option>
    <option value="1949">1949</option>
    <option value="1950">1950</option>
    <option value="1951">1951</option>
    <option value="1952">1952</option>
    <option value="1953">1953</option>
    <option value="1954">1954</option>
    <option value="1955">1955</option>
    <option value="1956">1956</option>
    <option value="1957">1957</option>
    <option value="1958">1958</option>
    <option value="1959">1959</option>
    <option value="1960">1960</option>
    <option value="1961">1961</option>
    <option value="1962">1962</option>
    <option value="1963">1963</option>
    <option value="1964">1964</option>
    <option value="1965">1965</option>
    <option value="1966">1966</option>
    <option value="1967">1967</option>
    <option value="1968">1968</option>
    <option value="1969">1969</option>
    <option value="1970">1970</option>
    <option value="1971">1971</option>
    <option value="1972">1972</option>
    <option value="1973">1973</option>
    <option value="1974">1974</option>
    <option value="1975">1975</option>
    <option value="1976">1976</option>
    <option value="1977">1977</option>
    <option value="1978">1978</option>
    <option value="1979">1979</option>
    <option value="1980">1980</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
</select>

    
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
    <p style="color: white">Already have an account? <a href="/patientlogin">Sign in</a>.</p>
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
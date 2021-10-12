<!DOCTYPE html>


<html>

    
    <head>
        <title>Patient Registration</title>
        <link href="/img/logo.png" rel="icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
  height: 650px;
  width: 520px;
  opacity: 0.8;
}  
    </style>
    <body>
    <br>        
    <div class="container signin">
        <h1 style="color: white">Create Patient Account</h1>
     <form action="patientregistration" method="post" >
       @csrf
    <input type="text" name="Name" class="form-control" placeholder=" Name" >
    <br>
    <input type="text" name="NID_no" class="form-control" placeholder="NID NO" >
    <br>
    <input type="text" name="Birth_year" class="form-control" placeholder="Birth Year" >
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
    <p style="color: white">Already have an account? <a href="/patientlogin">Sign in</a>.</p>
  </div>
</form>
<br>
<br>
<br>
    </body>
</html>
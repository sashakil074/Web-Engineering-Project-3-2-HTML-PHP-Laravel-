<!DOCTYPE html>


<html>

    
    <head>
        <title>Psychologist Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    
    <style>
    
    * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 10px;
}
body{
  background-image: url(img/depimg9.jpg);
}
/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
  width: 50%;
  height:15px;
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
  height: 240px;
  width: 550px;
  opacity: 0.8;

}  
    </style>
    <body>
    <br>
    <br>
         <br>
         <br>
         <br>
         <br> 
         <div>
         @if(Session::get('status1'))
         <div class="alert alert-success">
            {{Session::get('status1')}}
         </div>
         @endif
        </div>
         <div>
         @if(Session::get('status2'))
         <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
            {{Session::get('status2')}}
         </div>
         @endif
        </div>     
    <div class="container signin">
        <h1 style="color: white">Psychologist Login</h1>
     <form action="psyhome" method="post" >
       @csrf
    <input type="text" name="Username" class="form-control" placeholder="Username" >
    <br>
    <input type="password" name="Password" class="form-control" placeholder="Password" >
    <br> 
    <button type="submit"  class="btn btn-success">Sign In</button>
    <p style="color: white">Not a Member? <a href="/psyregistration">Register Now</a>.</p>
  </div>
</form>
    </body>
</html>
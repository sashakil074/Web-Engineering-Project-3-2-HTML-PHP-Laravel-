@extends('superadminlayout')

@section('satitle')
Super Admin Home
@stop

@section('sacontent')
<br>
<br>
<br>
<br>
<br>
<br>
<style>
    
    * {box-sizing: border-box}

body{
    background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
}


/* Set a style for the submit/register button */

.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 25px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 1;
}
    </style>

<br>
<br>
<br>
<div>
@if(Session::get('admin_added'))
  <div class="alert alert-success">
    {{Session::get('admin_added')}}
    </div>
    @endif
    </div>
    <div>
         @if(Session::get('adminIDexists'))
         <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
            {{Session::get('adminIDexists')}}
         </div>
         @endif
        </div>    
        <div>
         @if(Session::get('adminUsernameexists'))
         <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
            {{Session::get('adminUsernameexists')}}
         </div>
         @endif
        </div>    
<br>        
    <div class="container " style="border-style: none; background-color:aqua;max-width:500px;opacity:90%">
        <h1 style="color: black;text-align:center">Add Admin</h1>
     <form action="{{route('addAdmin')}}" method="post" >
       @csrf
    <input type="text" name="Name" class="form-control" placeholder=" Name" >
    <br>
    <input type="text" name="NID_no" class="form-control" placeholder="NID NO" >
    <br>
    <input type="text" name="Admin_ID" class="form-control" placeholder="Admin ID" >
    <br>
    <input type="text" name="Division" class="form-control" placeholder="Division" >
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
    <button type="submit" class="btn btn-success" style=" background-color: green;">Submit</button>
    <button type="reset" class="btn btn-outline-secondary" style=" background-color: grey;" >Cancel</button>
    <br>

</form>
<br>
</div>
<br>
<br>
<br>
@stop
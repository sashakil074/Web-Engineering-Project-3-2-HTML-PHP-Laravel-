@extends('superadminlayout')

@section('satitle')
Super Admin Add Admin
@stop
@section('sanavitem')
<li><a href="/superadminhome">Home</a></li>
<li class=" active"><a href="/saAddAdmin">Add Admin</a></li>
<li><a href="/saCourses">Courses </a></li>
<li><a href="/superadminfeedback"> Feedbacks</a></li>
<li>
  <div class="dropdown">
    <a>{{session('superadmin')}}</a>
    <div class="dropdown-content">
      <a href="/saprofile">Profile</a>
      <a href="/saProfileSetting">Setting</a>
      <a href="/logout3">Logout</a>
    </div>
  </div>
</li>
@stop
@section('sacontent')
<br>
<br>
<br>
<br>
<br>
<br>
<style>
  * {
    box-sizing: border-box
  }

  body {}


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
<br>
<br>

<br>
<br>
<br>

<div class="container shadow-lg p-6 mb-3 bg-black rounded " style="border-style: none; background: linear-gradient(to right, #25c481, #25b7c4);max-width:500px;padding-left:80px;padding-right:80px;opacity:90%">
  <br>
  <h1 style="color: black;text-align:center">Add Admin</h1>
  <form action="{{route('addAdmin')}}" method="post">
    @csrf
    <input type="text" name="Name" class="form-control" style="font-size:16px;" placeholder=" Name">
    @if($errors->has('Name'))
    <span class="text-danger">
      <br> {{$errors->first('Name')}}
    </span>
    @endif
    <br>
    <input type="text" name="NID_no" class="form-control" style="font-size:16px;" placeholder="NID NO">
    @if($errors->has('NID_no'))
    <span class="text-danger">
      <br> {{$errors->first('NID_no')}}
    </span>
    @endif
    <br>
    <input type="text" name="Admin_ID" class="form-control" style="font-size:16px;" placeholder="Admin ID">
    @if($errors->has('Admin_ID'))
    <span class="text-danger">
      <br> {{$errors->first('Admin_ID')}}
    </span>
    @endif
    <br>
    <!--<input type="text" name="Division" class="form-control" placeholder="Division" >-->
    <select class="form-control" name="Division" style="font-size:16px;width: 100%;height:32px;text-align:center">
      <option style="font-size:16px;">Division</option>
      <option style="font-size:16px;" value="Dhaka">Dhaka</option>
      <option style="font-size:16px;" value="Khulna">Khulna</option>
      <option style="font-size:16px;" value="Barisal">Barisal</option>
      <option style="font-size:16px;" value="Chittagong">Chittagong</option>
      <option style="font-size:16px;" value="Sylhet">Sylhet</option>
      <option style="font-size:16px;" value="Rangpur">Rangpur</option>
      <option style="font-size:16px;" value="Mymenshingh">Mymenshingh</option>
    </select>
    @if($errors->has('Division'))
    <span class="text-danger">
      <br> {{$errors->first('Division')}}
    </span>
    @endif
    <br>
    <input type="email" name="Email" class="form-control" style="font-size:16px;" placeholder="Email">
    @if($errors->has('Email'))
    <span class="text-danger">
      <br> {{$errors->first('Email')}}
    </span>
    @endif
    <br>
    <input type="text" name="Contact" class="form-control" style="font-size:16px;" placeholder="Contact No">
    @if($errors->has('Contact'))
    <span class="text-danger">
      <br> {{$errors->first('Contact')}}
    </span>
    @endif
    <br>
    <input type="text" name="Username" class="form-control" style="font-size:16px;" placeholder="Username">
    @if($errors->has('Username'))
    <span class="text-danger">
      <br> {{$errors->first('Username')}}
    </span>
    @endif
    <br>
    <input type="password" name="Password" class="form-control" style="font-size:16px;" placeholder="Password">
    @if($errors->has('Password'))
    <span class="text-danger">
      <br> {{$errors->first('Password')}}
    </span>
    @endif
    <br>
    <input type="password" name="Password_confirmation" class="form-control" style="font-size:16px;" placeholder="Confirm Password">
    <br>
    <button type="submit" class="btn btn-success" style="font-size:16px;background-color: green;">Submit</button>
    <button type="reset" class="btn btn-outline-secondary" style="font-size:16px;color:white; background-color: grey;">Cancel</button>
    <br>

  </form>
  <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
@stop
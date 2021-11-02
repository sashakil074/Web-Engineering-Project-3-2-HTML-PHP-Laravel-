@extends('adminlayout')

@section('admintitle')
Admin Profile Setting
@stop
@section('adminnavitem')
<li><a href="/adminAllPatients">All Patients</a></li>
<li><a href="/adminAllPsychologists">All psychologists</a></li>
<li><a href="/adminCourses">Courses </a></li>
<li><a href="/adminRecharge"> Recharge </a></li>
<li><a href="/adminfeedback"> Feedbacks</a></li>
<li>
  <div class="dropdown">
    <a>{{session('admin')}}</a>
    <div class="dropdown-content">
      <a href="/adminprofile">Profile</a>
      <a href="/adminProfileSetting">Setting</a>
      <a href="/logout4">Logout</a>
    </div>
  </div>
</li>
@stop
@section('admincontent')
<style>
  body {
    background-image: url(img/profilePagePhoto.jpg);

  }
</style>

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
  @if(Session::get('Profile_Updated'))
  <div class="alert alert-success">
    {{Session::get('Profile_Updated')}}
  </div>
  @endif
</div>
<br>
<br>

@foreach($admindata as $data)

<div class="container " style="border-style: none; background-color:aqua;max-width:500px;opacity:90%">
  <br>
  <h2 style=" text-align: center">Edit Profile</h2>
  <br>

  <form action="{{route('updateProfile4')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="id" value="{{$data->id}}" />
    <div class="form-group">
      <label style="color:black;font-size:16px;">Name: </label>
      <input type="text" name="Name" class="form-control" id="" style="color:black;font-size:16px;" value="{{$data->Name}}">
    </div>
    <div class="form-group">
      <label style="color:black;font-size:16px;">NID Number</label>
      <input type="text" name="NID_no" class="form-control" id="" style="color:black;font-size:16px;" value="{{$data->NID_no}}" readonly>
    </div>
    <div class="form-group">
      <label style="color:black;font-size:16px;">Division</label>
      <!--<input type="text" name="Division" class="form-control" id="" value="{{$data->Division}}">-->
      <select class="form-control" name="Division" style="width: 100%;height:32px;text-align:center;font-size:16px">
        <option style="color:black;font-size:16px;">{{$data->Division}}</option>
        <option style="color:black;font-size:16px;" value="Dhaka">Dhaka</option>
        <option style="color:black;font-size:16px;" value="Khulna">Khulna</option>
        <option style="color:black;font-size:16px;" value="Barisal">Barisal</option>
        <option style="color:black;font-size:16px;" value="Chittagong">Chittagong</option>
        <option style="color:black;font-size:16px;" value="Sylhet">Sylhet</option>
        <option style="color:black;font-size:16px;" value="Rangpur">Rangpur</option>
        <option style="color:black;font-size:16px;" value="Mymenshingh">Mymenshingh</option>
      </select>
    </div>
    <div class="form-group">
      <label style="color:black;font-size:16px;">Email</label>
      <input type="text" name="Email" class="form-control" id="" style="color:black;font-size:16px;" value="{{$data->Email}}">
    </div>
    <div class="form-group">
      <label style="color:black;font-size:16px;">Contact</label>
      <input type="text" name="Contact" class="form-control" id="" style="color:black;font-size:16px;" value="{{$data->Contact}}">
    </div>
    <div class="form-group">
      <label style="color:black;font-size:16px;">Password</label>
      <input type="password" name="Password" class="form-control" id="" style="color:black;font-size:16px;" value="{{$data->Password}}">
    </div>
    <div class="custom-file">
      <label style="color:black;font-size:16px;">Add Profile Photo</label>
      <input type="file" name="ProfilePic" class="form-control" style="color:black;font-size:16px;" enctype="multipart/form-data">
    </div>
    <br>
    <br>
    <br>
    <button type="submit" class="btn btn-success" style=" background-color: green;font-size:16px;">Submit</button>
    <button type="reset" class="btn btn-outline-secondary" style="color:white;font-size:16px; background-color: grey;">Cancel</button>
  </form>
  <br>
  <br>
</div>
@endforeach
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@stop
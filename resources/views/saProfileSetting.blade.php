@extends('superadminlayout')

@section('satitle')
Super Admin Profile Setting
@stop
@section('sanavitem')
<li><a href="/superadminhome">Home</a></li>
<li><a href="/saAddAdmin">Add Admin</a></li>
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

@foreach($sadata as $data)

<div class="container " style="border-style: none; background-color:aqua;max-width:500px;opacity:90%">
  <br>
  <h2 style=" text-align: center">Edit Profile</h2>
  <br>

  <form action="{{route('updateProfile3')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="id" value="{{$data->id}}" />
    <div class="form-group">
      <label style="font-size:16px;">Name: </label>
      <input type="text" name="Name" class="form-control" id="" style="font-size:16px;" value="{{$data->Name}}">
    </div>
    <div class="form-group">
      <label style="font-size:16px;">NID Number</label>
      <input type="text" name="NID_no" class="form-control" id="" style="font-size:16px;" value="{{$data->NID_no}}">
    </div>
    <div class="form-group">
      <label style="font-size:16px;">Email</label>
      <input type="text" name="Email" class="form-control" id="" style="font-size:16px;" value="{{$data->Email}}">
    </div>
    <div class="form-group">
      <label style="font-size:16px;">Contact</label>
      <input type="text" name="Contact" class="form-control" id="" style="font-size:16px;" value="{{$data->Contact}}">
    </div>
    <div class="form-group">
      <label style="font-size:16px;">Password</label>
      <input type="password" name="Password" class="form-control" id="" style="font-size:16px;" value="{{$data->Password}}">
    </div>
    <div class="custom-file">
      <label style="font-size:16px;">Add Profile Photo</label>
      <input type="file" name="ProfilePic" class="form-control" style="font-size:16px;" enctype="multipart/form-data">
    </div>
    <br>
    <br>
    <br>
    <button type="submit" class="btn btn-success" style="color:white;font-size:16px; background-color: green;">Submit</button>
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

@stop
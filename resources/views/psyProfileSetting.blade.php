@extends('psylayout2')
@section('title2')
Profile Setting
@stop
@section('psynavitem2')
<li><a class="menu" href="/psyhome">Home</a></li>
<li><a class="menu " href="/psyaddarticle">Add Articles</a></li>
<li><a class="menu" href="/psycourses">Courses </a></li>
<li><a class="menu" href="/psyaddcourse">Add Course</a></li>
<li><a class="menu" href="/psyMessages"> Messages</a></li>
<li>
  <div class="dropdown">
    <a>{{session('user2')}}</a>
    <div class="dropdown-content">
      <a href="/psyprofile">Profile</a>
      <a href="/psyProfileSetting">Setting</a>
      <a href="/logout2">Logout</a>
    </div>
  </div>
</li>
@stop
@section('content2')

<style>
  body {
    font-size: 16px;
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

@foreach($userdata as $data)

<div class="container shadow-lg p-6 mb-3 bg-black rounded " style="border-style: none; background-color:aqua;max-width:500px;opacity:90%;">
  <br>
  <h2 style=" text-align: center">Edit Profile</h2>
  <br>

  <form action="{{route('updateProfile2')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="id" value="{{$data->id}}" />
    <div class="form-group">
      <label style="font-size:16px;">Name: </label>
      <input type="text" name="Name" class="form-control" id="" style="font-size:16px;" value="{{$data->Name}}">
    </div>
    <div class="form-group">
      <label style="font-size:16px;">NID Number</label>
      <input type="text" name="NID_no" class="form-control" id="" style="font-size:16px;" value="{{$data->NID_no}}" readonly>
    </div>
    <div class="form-group">
      <label style="font-size:16px;">Position</label>
      <input type="text" name="Position" class="form-control" id="" style="font-size:16px;" value="{{$data->Position}}">
    </div>
    <div class="form-group">
      <label style="font-size:16px;">Work place</label>
      <input type="text" name="Work_place" class="form-control" id="" style="font-size:16px;" value="{{$data->Work_place}}">
    </div>
    <div class="form-group">
      <label style="font-size:16px;">Division</label>
      <!--<input type="text" name="Division" class="form-control" id="" value="{{$data->Division}}">-->
      <select class="form-control" name="Division" style="font-size:16px;width: 100%;height:32px;text-align:center">
        <option style="font-size:16px;">{{$data->Division}}</option>
        <option style="font-size:16px;" value="Dhaka">Dhaka</option>
        <option style="font-size:16px;" value="Khulna">Khulna</option>
        <option style="font-size:16px;" style="font-size:16px;" value="Barisal">Barisal</option>
        <option style="font-size:16px;" value="Chittagong">Chittagong</option>
        <option style="font-size:16px;" value="Sylhet">Sylhet</option>
        <option style="font-size:16px;" value="Rangpur">Rangpur</option>
        <option style="font-size:16px;" value="Mymenshingh">Mymenshingh</option>
      </select>
    </div>
    <div class="form-group">
      <label style="font-size:16px;">District</label>
      <input type="text" name="District" class="form-control" id="" style="font-size:16px;" value="{{$data->District}}">
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
    <button type="submit" class="btn btn-success" style="font-size:16px;background-color: green;">Submit</button>
    <button type="reset" class="btn btn-outline-secondary" style="font-size:16px;color:white;background-color: grey;">Cancel</button>
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
@extends('psylayout2')
@section('title2')
Profile Setting
@stop
@section('psynavitem2')
<li><a class="menu" href="/psyhome" >Home</a></li>
<li><a class="menu " href="/psyaddarticle">Add Articles</a></li>
<li><a class="menu" href="/psycourses">Courses </a></li>
<li><a class="menu" href="/psyaddcourse">Add Course</a></li>
<li><a class="menu" href="/psyMessages"> Messages</a></li>
<li>
<div class="dropdown">
<button class="dropbtn">{{session('user2')}}</button>
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
body{
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

<div class="container " style="border-style: none; background-color:aqua;max-width:500px;opacity:90%" >
<br>
<h2  style=" text-align: center">Edit Profile</h2>
<br>

<form action="{{route('updateProfile2')}}" method="post" enctype="multipart/form-data" >
@csrf

<input type="hidden" name="id"  value="{{$data->id}}" />
  <div class="form-group">
  <label >Name: </label>
    <input type="text" name="Name" class="form-control" id="" value="{{$data->Name}}" >
  </div>
  <div class="form-group">
    <label >NID Number</label>
    <input type="text" name="NID_no" class="form-control" id="" value="{{$data->NID_no}}">
  </div>
  <div class="form-group">
    <label >Position</label>
    <input type="text" name="Position" class="form-control" id="" value="{{$data->Position}}">
  </div>
  <div class="form-group">
  <label >Work place</label>
    <input type="text" name="Work_place" class="form-control" id="" value="{{$data->Work_place}}">
  </div>
  <div class="form-group">
  <label >Division</label>
    <input type="text" name="Division" class="form-control" id="" value="{{$data->Division}}">
  </div>
  <div class="form-group">
  <label >District</label>
    <input type="text" name="District" class="form-control" id="" value="{{$data->District}}">
  </div>
  <div class="form-group">
  <label >Email</label>
    <input type="text" name="Email" class="form-control" id="" value="{{$data->Email}}">
  </div>
  <div class="form-group">
  <label >Contact</label>
    <input type="text" name="Contact" class="form-control" id="" value="{{$data->Contact}}">
  </div>
  <div class="form-group">
  <label >Password</label>
    <input type="password" name="Password" class="form-control" id="" value="{{$data->Password}}">
  </div>
  <div class="custom-file">
    <label >Add Profile Photo</label>
    <input type="file" name="ProfilePic" class="form-control"  enctype="multipart/form-data" >
  </div>
  <br>
  <button type="submit" class="btn btn-success" style=" background-color: green;" >Submit</button>
  <button type="reset" class="btn btn-outline-secondary" style=" background-color: grey;" >Cancel</button>
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
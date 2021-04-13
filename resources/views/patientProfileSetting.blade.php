@extends('patientlayout2')
@section('title2')
Profile Setting
@stop

@section('content3')

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
@if(Session::get('Profile_Updated'))
  <div class="alert alert-success">
    {{Session::get('Profile_Updated')}}
    </div>
    @endif
<br>
<br>

   @foreach($userdata as $data)

<div class="container " style="border-style: none; background-color:aqua;max-width:500px;opacity:90%" >
<br>
<h2  style=" text-align: center">Edit Profile</h2>

<br>
<form action="{{route('updateProfile')}}" method="post" enctype="multipart/form-data" >
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
    <label >Birth Year</label>
    <input type="text" name="Birth_year" class="form-control" id="" value="{{$data->Birth_year}}">
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
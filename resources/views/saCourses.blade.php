@extends('superadminlayout')

@section('satitle')
Super Admin Courses
@stop
@section('sanavitem')
<li><a href="/superadminhome">Home</a></li>
<li><a href="/saAddAdmin">Add Admin</a></li>
<li class=" active"><a href="/saCourses">Courses </a></li>
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

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 style="text-align:center">All Courses</h1>
<br>
<div>
  @if(Session::get('Course_deleted'))
  <div class="alert alert-success">
    {{Session::get('Course_deleted')}}
  </div>
  @endif
</div>

<br>
@foreach($coursedata as $data)

<div class="container article shadow-lg p-6 mb-3 bg-black rounded" style="border-style: none;margin:auto;background: linear-gradient(to right, #25c481, #25b7c4);">
  <br>
  <br>
  <h3 style="text-transform: uppercase;color:black;font-size: 25px;text-align:center">
    {{$data->CourseTitle}}
  </h3>
  <h3 style="text-transform: uppercase;color:black;font-size: 20px;color: #fff;text-align:center">
    Course ID:{{$data->CourseID}}
  </h3>
  <h3 style="color:black; font-size: 20px;color: #fff;text-align:center">
    Course By:{{$data->PsyName}}
  </h3>
  <p style="font-size: 20px;color: #fff;text-align:center">{{$data->CourseDescription}}</p>
  <img src="{{asset('images')}}/{{$data->Files}}" style="max-width:90vh;margin-left:auto;margin-right:auto;display:block" />

  <br>
  <h3 style="font-size: 20px;color: #fff;text-align:center">
    Price: {{$data->Price}}Tk
  </h3>
  <br>
  <br>
</div>
<div class="d-flex justify-content-center mt-4">
  <a href="/deletecourse/{{$data->id}}" class="btn btn-danger" style="font-size:16px;" onclick="confirm('Are you sure?')">Delete</a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endforeach
@stop
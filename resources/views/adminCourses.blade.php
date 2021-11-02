@extends('adminlayout')

@section('admintitle')
All Courses
@stop
@section('adminnavitem')
<li><a href="/adminAllPatients">All Patients</a></li>
<li><a href="/adminAllPsychologists">All psychologists</a></li>
<li class=" active"><a href="/adminCourses">Courses </a></li>
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
  <br>
  <h3 style="font-size: 20px;color: #fff;text-align:center">
    Price: {{$data->Price}}Tk
  </h3>
  <br>
  <br>
</div>
<div class="d-flex justify-content-center mt-4">
  <a href="/deletecourse/{{$data->id}}" class="btn btn-danger" style="font-size:16px" onclick="confirm('Are you sure?')">Delete</a>

</div>
<br>
<br>
<br>
<br>
<br>
<br>

@endforeach
<br>
<br>
<br>
<br>
<br>
<br>
@stop
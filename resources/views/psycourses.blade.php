@extends('psylayout')
@section('title')
Courses
@stop

@section('psynavitem')
<li><a class="menu" href="/psyhome">Home</a></li>
<li><a class="menu " href="/psyaddarticle">Add Articles</a></li>
<li><a class="menu active" href="/psycourses">Courses </a></li>
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
@section('content')

<br>
<br>
<br>
<h1 style="text-align:center">My Courses</h1>

<div>
  @if(Session::get('Course_deleted'))
  <div class="alert alert-success">
    {{Session::get('Course_deleted')}}
  </div>
  @endif
</div>

@foreach($coursedata as $data)
@if(session('user2')==$data->PsyUsername)

<div class="container article shadow-lg p-6 mb-3 bg-black rounded display: flex;justify-content: center;" style="border-style: none;margin:auto;background: linear-gradient(to right, #25c481, #25b7c4);">
  <br>
  <h3 style="text-transform: uppercase;color:black;font-size: 25px;text-align:center">
    {{$data->CourseTitle}}
  </h3>
  <h3 style="text-transform: uppercase;color:black;font-size: 20px;color: #fff;text-align:center">
    Course ID:{{$data->CourseID}}
  </h3>
  <p style="font-size: 20px;color: #fff;text-align:center">{{$data->CourseDescription}}</p>
  <img src="{{asset('images')}}/{{$data->Files}}" style="max-width:95vh;margin-left:auto;margin-right:auto;display:block" />
  <br>
  <br>
  <h3 style="font-size: 20px;color: #fff;text-align:center">
    Price: {{$data->Price}}Tk
  </h3>
  <br>
  <br>
  <a href="/opencourse/{{$data->id}}" class="btn btn-info" style="font-size:16px;position: absolute;right: 1000px; ">Open</a>

  <a href="/editcourse/{{$data->id}}" class="btn btn-info" style="font-size:16px;position: absolute;right: 450px; ">Edit</a>
  <a href="/deletecourse/{{$data->id}}" class="btn btn-danger" style="font-size:16px;position: absolute;right: 380px;" onclick="confirm('Are you sure?')">Delete</a>
</div>
<br>
<br>
<br>
<br>
@endif
@endforeach
<br>
<br>
<br>
<br>
<br>
@stop
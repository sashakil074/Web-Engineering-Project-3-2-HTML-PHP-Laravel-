@extends('psylayout2')

@section('title2')
Course
@stop

@section('psynavitem2')
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
@section('content2')


<br>
<br>
<br>

<br>
<br>

<br>
<div>
	@if(Session::get('video_deleted'))
	<div class="alert alert-success">
		{{Session::get('video_deleted')}}
	</div>
	@endif
</div>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<h2 style=" text-align: center">Course Videos</h2>


<div class="container shadow-lg p-6 mb-3 bg-black rounded" style="border-style:none;background: linear-gradient(to right, #25c481, #25b7c4);width: 850px">
	<br>
	<br>
	<h3 style="padding-left:100px;color:black; font-size: 20px">
		{{$data->CourseTitle}}
	</h3>
	<h3 style="padding-left:100px;color:black; font-size: 18px">
		Course ID:{{$data->CourseID}}
	</h3>


	<p style="padding-left:100px;color:white; font-size: 16px">{{$data->CourseDescription}}</p>
	<br>
	<h4 style=" text-align: center;color:black;">Videos</h4>
	@foreach($videodata as $vdata)
	@if($data->CourseID==$vdata->CourseID)
	<h4 style="padding-left:100px;color:black;">
		<strong>#{{$vdata->VideoTitle}}</strong>
	</h4>
	<p style="max-width:150px; padding-left:100px;">
		<iframe src="{{asset('uploads')}}/{{$vdata->Files}}"></iframe>
		<a href="/deletevideo/{{$vdata->id}}" class="btn btn-danger" style="right: 300px;" onclick="confirm('Are you sure?')">Delete Video</a>
	</p>
	@endif
	@endforeach
	<br>
	<a href="/addvideo" class="btn btn-info" style="font-size:16px;position: absolute;right: 820px; ">Add Video</a>

</div>

<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
@stop
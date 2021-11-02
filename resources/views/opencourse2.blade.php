@extends('patientlayout2')
@section('title2')
Courses
@stop
@section('navitem2')
<li> <a class="menu" href="/patienthome">Home</a></li>
<li> <a class="menu active" href="/patientcourses">Courses</a></li>
<li><a class="menu" href="/patientPsyList">Psychologists </a></li>
<li><a class="menu" href="/patientSearchPsy">Search Psychologists</a></li>
<li><a class="menu" href="/patientMessages">Contact Psychologists</a></li>
<li>
    <div class="dropdown">
        <a>{{session('user')}}</a>
        <div class="dropdown-content">
            <a href="/patientprofile">Profile</a>
            <a href="/patientProfileSetting">Setting</a>
            <a href="/logout">Logout</a>
        </div>
    </div>
</li>
@stop
@section('content3')
<br>
<br>

<br>
<br>
<br>

<br>
<br>
<br>
<h2 style=" text-align: center">Course Videos</h2>


<div class="container shadow-lg p-6 mb-3 bg-black rounded " style="border-style:none;background: linear-gradient(to right, #25c481, #25b7c4);width: 850px">
    <br>
    <br>
    <h3 style="padding-left:100px;color:black; font-size: 20px">
        {{$coursedata->CourseTitle}} (Subscribed)
    </h3>
    <h3 style="padding-left:100px;color:black; font-size: 18px">
        Course ID:{{$coursedata->CourseID}}
    </h3>


    <p style="padding-left:100px;color:white; font-size: 16px">{{$coursedata->CourseDescription}}</p>
    <br>
    <h4 style=" text-align: center;color:black;">Videos</h4>
    @foreach($videodata as $vdata)
    @if($coursedata->CourseID==$vdata->CourseID)
    <h4 style="padding-left:100px;color:black;">
        <strong>#{{$vdata->VideoTitle}}</strong>
    </h4>
    <p style="max-width:150px; padding-left:100px;">
        <iframe src="{{asset('uploads')}}/{{$vdata->Files}}"></iframe>
    </p>
    @endif
    @endforeach
    <br>
    <br>
    <br>
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
<br>
<br>
<br>

@stop
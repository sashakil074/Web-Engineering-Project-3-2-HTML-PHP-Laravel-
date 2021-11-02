@extends('patientlayout')
@section('title')
Home
@stop
@section('navitem1')
<li class="active"> <a href="/patienthome">Home</a></li>
<li> <a href="/patientcourses">Courses</a></li>
<li><a href="/patientPsyList">Psychologists </a></li>
<li><a href="/patientSearchPsy">Search Psychologists</a></li>
<li><a href="/patientMessages">Contact Psychologists</a></li>
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
@section('content2')
<br>
<h1 style="text-align:center">Articles</h1>

<br>

@foreach($articledata as $data)
<div class="container article shadow-lg p-6 mb-3 bg-black rounded" style="padding-right:45px; border-style:none;background: linear-gradient(to right, #25c481, #25b7c4);">
    <br>

    <h3 style="padding-left:45px; text-transform: uppercase;color:black;font-size: 25px">
        {{$data->Name}}
    </h3>
    <p style="padding-left:45px;color: black;" id="datetime">{{ \Carbon\Carbon::parse($data->created_at)->format('d M, Y') }}</p>

    <h3 style="padding-left:45px;color:black; font-size: 25px">
        <strong>{{$data->Title}}</strong>
    </h3>
    <div class="d-flex flex-column flex-md-row flex-lg-row flex-sm-column">
        <div class="mr-2">
            <p style="padding-left:45px;font-size: 20px;color: #fff;">{{$data->Articles}}</p>
        </div>
        <div class="ml-2">
            <img src="{{asset('images')}}/{{$data->Files}}" style="padding-left:45px;max-width:50vh;" />
        </div>
    </div>
    <br>
    <br>
</div>
<br>
<br>
<br>
<br>
@endforeach


@stop
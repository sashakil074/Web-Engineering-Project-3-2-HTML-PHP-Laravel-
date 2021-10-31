@extends('patientlayout')
@section('title')
Courses
@stop
@section('navitem1')
<li>  <a class="menu" href="/patienthome" >Home</a></li>
					        <li> <a class="menu active" href="/patientcourses">Courses</a></li>
					        <li><a class="menu" href="/patientPsyList">Psychologists </a></li>
					        <li><a class="menu" href="/patientSearchPsy">Search Psychologists</a></li>
					        <li><a class="menu" href="/patientMessages">Contact Psychologists</a></li>
							<li>
							<div class="dropdown">
                            <button class="dropbtn">{{session('user')}}</button>
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

<br>
<br>
<br>
<div>
@if(Session::get('payment_success'))
  <div class="alert alert-success">
    {{Session::get('payment_success')}}
    </div>
    @endif
</div>
    <br>
    <div>
    @if(Session::get('CardnotExists'))
  <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
    {{Session::get('CardnotExists')}}
    </div>
    @endif
</div>
    <br>
    <div>
    @if(Session::get('balancenotsufficient'))
  <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
    {{Session::get('balancenotsufficient')}}
    </div>
    @endif
</div>
   <div>
    @if(Session::get('wrongcardno'))
  <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
    {{Session::get('wrongcardno')}}
    </div>
    @endif
</div>
<br>
<h1 style="text-align:center">Courses</h1>


<br>
@foreach($coursedata as $data)

<div class="container article" style="border-style: none;margin:auto;width:850px;background: linear-gradient(to right, #25c481, #25b7c4);"> 
<h3  style="padding-left:100px">
Course ID:{{$data->CourseID}}
</h3>
<h3  style="padding-left:100px">
Course By:{{$data->PsyName}}
</h3>  
<img  src="{{asset('images')}}/{{$data->Files}}"  style="max-width:350px; padding-left:100px;" />
<h3  style="padding-left:100px">
{{$data->CourseTitle}}
</h3>
<p style="padding-left:100px;font-size: 16px;">{{$data->CourseDescription}}</p>
<h3  style="padding-left:100px">
Price:{{$data->Price}}
</h3>
<br>
<a href= "/opencourse2/{{$data->id}}" class="btn btn-info" style="position: absolute;right: 820px; ">Open</a>

</div>
<br>
<br>
<br>
<br>
@endforeach

@stop
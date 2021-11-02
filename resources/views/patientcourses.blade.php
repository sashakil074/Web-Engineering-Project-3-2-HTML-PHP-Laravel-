@extends('patientlayout')
@section('title')
Courses
@stop
@section('navitem1')
<li> <a href="/patienthome">Home</a></li>
<li class="active"> <a href="/patientcourses">Courses</a></li>
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

@if($temp == '0')
<h2 style="text-align:center">My Subscribed Courses</h2>
<div class="container article shadow-lg p-6 mb-3 bg-black rounded" style="border-style:none;background: linear-gradient(to right, #25c481, #25b7c4);">
  <br>
  <p style="text-align:center"><strong>No Subscribed course</strong></p>
  <br>
</div>
@else
<h2 style="text-align:center">My Subscribed Courses</h2>
<br>
@foreach($subdata as $data2)

<div class="container article shadow-lg p-6 mb-3 bg-black rounded display: flex;justify-content: center; " style=" border-style:none;background: linear-gradient(to right, #25c481, #25b7c4);">
  <br>
  <h3 style="text-transform: uppercase;color:black;font-size: 25px;text-align:center">
    {{$data2->CourseTitle}}
  </h3>
  <h3 style="text-transform: uppercase;color:black;font-size: 20px;color: #fff;text-align:center">
    Course ID:{{$data2->CourseID}}
  </h3>
  <h3 style="color:black; font-size: 20px;color: #fff;text-align:center">
    Course By:{{$data2->PsyName}}
  </h3>
  <p style="font-size: 20px;color: #fff;text-align:center">{{$data2->CourseDescription}}</p>

  <img src="{{asset('images')}}/{{$data2->Files}}" style="max-width:95vh;margin-left:auto;margin-right:auto;display:block" />

  <br>
  <br>
  <br>

  <div class="">

    <h3 style="font-size: 20px;color: #fff;text-align:center">
      Price: {{$data2->Price}}Tk(Paid)
    </h3>
  </div>
  <br>



</div>
<div class="d-flex justify-content-center mt-4">
  <a href="/opencourse2/{{$data2->id}}" class="btn btn-info ">Open Course</a>
</div>
<br>
<br>
<br>
<br>
@endforeach
@endif
<br>
<br>
<br>
<div class="container article" style="border:dotted"></div>
<br>
<br>
<br>
<br>
<h2 style="text-align:center">All Courses</h2>
@foreach($coursedata as $data)

<div class="container article  display: flex;justify-content: center; " style=" border-style:none;background: linear-gradient(to right, #25c481, #25b7c4);">
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

  <img src="{{asset('images')}}/{{$data->Files}}" style="max-width:100vh;margin-left:auto;margin-right:auto;display:block" />

  <br>
  <br>
  <br>

  <div class="">

    <h3 style="font-size: 20px;color: #fff;text-align:center">
      Price: {{$data->Price}}Tk
    </h3>
  </div>
  <br>



</div>
<div class="d-flex justify-content-center mt-4">
  <a href="/opencourse2/{{$data->id}}" class="btn btn-info ">Open Course</a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
@endforeach

@stop
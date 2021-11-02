@extends('patientlayout2')
@section('title2')
Payment
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
<style>
  body {
    background: #c2dde6;
  }
</style>

<br>
<br>
<br>
<br>
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
<br>
<br>
<br>
<br>

<br>
<br><br>
<br>
<br>
<h1 style="text-align:center">Make Payment</h1>




<div class="container " style="border-style: none;width:950px;padding-left:60px;padding-right:60px;background: linear-gradient(to right, #25c481, #25b7c4);">
  <br>
  <h3 style="text-align:center">
    {{$coursedata->CourseTitle}}
  </h3>

  <form action="{{route('makepayment')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="id" value="{{$coursedata->id}}" />
    <div class="form-group">
      <label style="font-size:16px;text-align:center;">Course ID</label>
      <input type="text" name="CourseID" class="form-control" id="" style="font-size:16px;" value="{{$coursedata->CourseID}}" readonly>
    </div>
    <div class="form-group">
      <label style="font-size:16px;text-align:center;">Price</label>
      <input type="text" name="Price" class="form-control" id="" style="font-size:16px;" value="{{$coursedata->Price}}" readonly>
    </div>
    <div class="form-group">
      <label style="font-size:16px;text-align:center;">Card Number</label>

      <input type="text" name="CardNo" class="form-control" id="" style="font-size:16px;" placeholder="Enter Card Number" autocomplete="off">
      @if($errors->has('CardNo'))
      <span class="text-danger">
        <br> {{$errors->first('CardNo')}}
      </span>
      @endif
    </div>
    <div class="d-flex justify-content-center mt-4">
      <button type="submit" class="btn btn-success" style="font-size:16px; background-color: green;">Submit</button>
      <button type="reset" class="btn btn-outline-secondary" style="font-size:16px;background-color: grey;color:white">Cancel</button>
    </div>
    <br>
    <br>

  </form>

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
@stop
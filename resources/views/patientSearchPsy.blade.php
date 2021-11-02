@extends('patientlayout')
@section('title')
Search Psychologist
@stop
@section('navitem1')
<li> <a href="/patienthome">Home</a></li>
<li> <a href="/patientcourses">Courses</a></li>
<li><a href="/patientPsyList">Psychologists </a></li>
<li class="active"><a href="/patientSearchPsy">Search Psychologists</a></li>
<li><a href="/patientMessages">Contact Psychologists</a></li>
<li>
  <div class="dropdown">
    <a class="appointment-btn scrollto" style="color:white">{{session('user')}}</a>
    <div class="dropdown-content">
      <a href="/patientprofile">Profile</a>
      <a href="/patientProfileSetting">Setting</a>
      <a href="/logout">Logout</a>
    </div>
  </div>
</li>
@stop
@section('content2')
<style>
  * {
    box-sizing: border-box;
  }

  /* Style the search field */
  form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 70%;
    background: #f1f1f1;
  }

  /* Style the submit button */
  form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    /* Prevent double borders */
    cursor: pointer;
  }

  form.example button:hover {
    background: #0b7dda;
  }

  /* Clear floats */
  form.example::after {
    content: "";
    clear: both;
    display: table;
  }
</style>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container" style="background: linear-gradient(to right, #25c481, #25b7c4);margin:auto;max-width:900px">
  <br>
  <br>
  <h1 style="margin:auto;max-width:300px;color:white">Search Psychologist</h1>
  <br>

  <div>

    <form class="example" action="{{route('search.Psy')}}" method="post" style="margin:auto;max-width:400px">
      @csrf
      <input type="text" placeholder="Search.." name="searchPsy" autocomplete="off">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <br>
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
@stop
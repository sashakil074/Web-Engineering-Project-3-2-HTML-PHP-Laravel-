@extends('superadminlayout')

@section('satitle')
Feedbacks
@stop
@section('sanavitem')
<li><a href="/superadminhome">Home</a></li>
<li><a href="/saAddAdmin">Add Admin</a></li>
<li><a href="/saCourses">Courses </a></li>
<li class=" active"><a href="/superadminfeedback"> Feedbacks</a></li>
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

<style>
  /* Style inputs with type="text", select elements and textareas */
  input[type=text],
  select,
  textarea {
    width: 100%;
    /* Full width */
    padding: 5px;
    /* Some padding */
    border: 1px solid #ccc;
    /* Gray border */
    border-radius: 4px;
    /* Rounded borders */
    box-sizing: border-box;
    /* Make sure that padding and width stays in place */
    margin-top: 6px;
    /* Add a top margin */
    margin-bottom: 16px;
    /* Bottom margin */
    max-height: 60px;
    resize: vertical
      /* Allow the user to vertically resize the textarea (not horizontally) */
  }

  /* Style the submit button with a specific background color etc */
  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  /* When moving the mouse over the submit button, add a darker green color */
  input[type=submit]:hover {
    background-color: #45a049;
  }

  /* Add a background color and some padding around the form */
  .containerf {
    border-radius: 2px;
    background-color: #41DBAB;
    opacity: 80%;
    padding: 10px;

  }
</style>
<br>
<div>
  @if(Session::get('feedback_given'))
  <div class="alert alert-success">
    {{Session::get('feedback_given')}}
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
<br>
<br>
<br>
<br>
<div class="container" style="border-style:none;background:grey">
  <br>
  <br>
  <h1 style="text-align:center;color:black;">Feedbacks</h1>
  <br>
  <br>
  @foreach($feedbackdata as $data)
  <div class="container article" style="max-width:1000px;border-style:inset;border-width:2px;">
    <h4 style="padding-left:90px; text-transform: uppercase;color: #fff;">
      {{$data->Name}}
    </h4>
    <p style="padding-left:90px;color: #fff;" id="datetime">{{$data->Status}}</p>

    <p style="padding-left:90px;font-size: 20px;color: #fff;">{{$data->Feedback}}</p>
  </div>
  <br>
  <br>

  @endforeach
</div>
<br>
<br>
<br>
<br>
<br>
<br>
@stop
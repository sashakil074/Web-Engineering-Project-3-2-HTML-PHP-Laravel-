@extends('psylayout')
@section('title')
Add Course
@stop
@section('psynavitem')
<li><a class="menu" href="/psyhome">Home</a></li>
<li><a class="menu " href="/psyaddarticle">Add Articles</a></li>
<li><a class="menu" href="/psycourses">Courses </a></li>
<li><a class="menu active" href="/psyaddcourse">Add Course</a></li>
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
<style>
  .article {
    background: linear-gradient(to right, #25c481, #25b7c4);
    text-align: center;
    padding-left: 100px;
    padding-right: 100px;
    margin: auto;



  }

  .form-control-file {
    margin: auto;
    text-align: center;
  }
</style>

<br>
<br>
<br>
<div>
  @if(Session::get('Course_added'))
  <div class="alert alert-success">
    {{Session::get('Course_added')}}
  </div>
  @endif
</div>
<div>
  @if(Session::get('CourseIdExists'))
  <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
    {{Session::get('CourseIdExists')}}
  </div>
  @endif
</div>
<h2 style=" text-align: center">ADD Course</h2>
<div class="container article  shadow-lg p-6 mb-3 bg-black rounded" style="border-style:none;">
  <form action="{{route('add.course')}}" method="post" enctype="multipart/form-data">
    @csrf
    <br>
    <br>
    <div class="form-group">
      <label style="font-size:16px;text-align:center;">Course ID</label>
      <input type="text" name="CourseID" class="form-control" id="" placeholder="Enter Course_ID(ex:D101)">
      @if($errors->has('CourseID'))
      <span class="text-danger">
        <br> {{$errors->first('CourseID')}}
      </span>
      @endif
    </div>
    <div class="form-group">
      <label style="font-size:16px;text-align:center;">Title</label>
      <input type="text" name="CourseTitle" class="form-control" id="" style="font-size:16px;" placeholder="Enter Course Title">
      @if($errors->has('CourseTitle'))
      <span class="text-danger">
        <br> {{$errors->first('CourseTitle')}}
      </span>
      @endif
    </div>
    <div class="form-group">
      <label style="font-size:16px;text-align:center;">Course Description</label>
      <textarea class="form-control" id="" rows="3" name="CourseDescription" style="font-size:16px;" placeholder="Write Course Details"></textarea>
      @if($errors->has('CourseDescription'))
      <span class="text-danger">
        <br> {{$errors->first('CourseDescription')}}
      </span>
      @endif
    </div>
    <div class="form-group">
      <label style="font-size:16px;text-align:center;">Price</label>
      <input type="text" name="Price" class="form-control" style="font-size:16px;" id="" placeholder="Enter Price">
      @if($errors->has('Price'))
      <span class="text-danger">
        <br> {{$errors->first('Price')}}
      </span>
      @endif
    </div>
    <div class="custom-file">
      <label style="font-size:16px;text-align:center;">Add Photo</label>
      <input type="file" name="Files2" class="form-control" style="font-size:16px;" enctype="multipart/form-data">
      @if($errors->has('Files2'))
      <span class="text-danger">
        <br> {{$errors->first('Files2')}}
      </span>
      @endif
    </div>
    <br>
    <br>
    <br>
    <button type="submit" class="btn btn-success" style="font-size:16px; color:white;background-color: green;">Submit</button>
    <button type="reset" class="btn btn-outline-secondary" style="font-size:16px; color:white;background-color: grey;">Cancel</button>
  </form>
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
@stop
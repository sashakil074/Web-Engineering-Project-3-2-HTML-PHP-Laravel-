@extends('psylayout2')

@section('title2')
Add Course Video
@stop
@section('psynavitem2')
<li><a class="menu active" href="/psyhome">Home</a></li>
<li><a class="menu " href="/psyaddarticle">Add Articles</a></li>
<li><a class="menu" href="/psycourses">Courses </a></li>
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
<div>
  @if(Session::get('Video_added'))
  <div class="alert alert-success">
    {{Session::get('Video_added')}}
  </div>
  @endif
</div>
<div>
  @if(Session::get('CourseIdnotExists'))
  <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
    {{Session::get('CourseIdnotExists')}}
  </div>
  @endif
</div>
<br>
<br>
<br>
<h2 style=" text-align: center">ADD Course Video</h2>
<div class="container article shadow-lg p-6 mb-3 bg-black rounded" style="border-style: none;">
  <br>

  <form action="{{route('add.video')}}" method="post" enctype="multipart/form-data">
    @csrf
    <br>
    <br>
    <div class="form-group">
      <label style="font-size:16px;">Course ID</label>
      <input type="text" name="CourseID" class="form-control" id="" style="font-size:16px;" placeholder="Enter Course_ID(ex:D101)">
      @if($errors->has('CourseID'))
      <span class="text-danger">
        <br> {{$errors->first('CourseID')}}
      </span>
      @endif
    </div>
    <div class="form-group">
      <label style="font-size:16px;">Video Title</label>
      <input type="text" name="VideoTitle" class="form-control" id="" style="font-size:16px;" placeholder="Enter Video Title">
      @if($errors->has('VideoTitle'))
      <span class="text-danger">
        <br> {{$errors->first('VideoTitle')}}
      </span>
      @endif
    </div>
    <div class="custom-file">
      <label style="font-size:16px;">Add Video</label>
      <input type="file" name="Files3" class="form-control" style="font-size:16px;" enctype="multipart/form-data">
      @if($errors->has('Files3'))
      <span class="text-danger">
        <br> {{$errors->first('Files3')}}
      </span>
      @endif
    </div>
    <br>
    <br>
    <br>
    <button type="submit" class="btn btn-success" style="font-size:16px;color:white; background-color: green;">Add</button>
    <button type="reset" class="btn btn-outline-secondary" style="font-size:16px;color:white;background-color: grey;">Cancel</button>
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
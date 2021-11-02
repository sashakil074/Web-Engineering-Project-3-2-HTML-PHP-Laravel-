@extends('psylayout')


@section('title')
Add Article
@stop

@section('psynavitem')
<li><a class="menu" href="/psyhome">Home</a></li>
<li><a class="menu active" href="/psyaddarticle">Add Articles</a></li>
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
<div>
  @if(Session::get('status3'))
  <div class="alert alert-success">
    {{Session::get('status3')}}
  </div>
  @endif
</div>
<br>
<h2 style=" text-align: center">ADD Articles</h2>
<div class="container article shadow-lg p-6 mb-3 bg-black rounded" style="border-style: none;">
  <form action="{{route('addArticle')}}" method="post" enctype="multipart/form-data">
    @csrf
    <br>
    <br>
    <div class="form-group">
      <label style="font-size:16px;text-align:center;">Title</label>
      <input type="text" name="Title" class="form-control" id="" style="font-size:16px;" placeholder="Enter Title">
      @if($errors->has('Title'))
      <span class="text-danger">
        <br> {{$errors->first('Title')}}
      </span>
      @endif
    </div>
    <div class="form-group">
      <label style="font-size:16px;text-align:center;">Write Article</label>
      <textarea class="form-control" id="" rows="3" name="Articles" style="font-size:16px;" placeholder="Write your articles"></textarea>
      @if($errors->has('Articles'))
      <span class="text-danger">
        <br> {{$errors->first('Articles')}}
      </span>
      @endif
    </div>
    <div class="custom-file">
      <label style="font-size:16px;text-align:center;">Add Photo</label>
      <input type="file" name="Files" class="form-control" style="font-size:16px;" enctype="multipart/form-data">
      @if($errors->has('Files'))
      <span class="text-danger">
        <br> {{$errors->first('Files')}}
      </span>
      @endif
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-success" style="font-size:16px; color:white; background-color: green;">Submit</button>
    <button type="reset" class="btn btn-outline-secondary" style="font-size:16px;color:white; background-color: grey;">Cancel</button>
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
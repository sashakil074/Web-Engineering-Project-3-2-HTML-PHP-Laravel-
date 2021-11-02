@extends('psylayout2')

@section('title2')
Edit Article
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
  @if(Session::get('status4'))
  <div class="alert alert-success">
    {{Session::get('status4')}}
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
<h2 style=" text-align: center">Edit ArticleS</h2>
<div class="container  shadow-lg p-6 mb-3 bg-black rounded " style="border-style: none;text-align:center; padding-left:100px;padding-right:100px;background: linear-gradient(to right, #25c481, #25b7c4);">
  <br>
  <br>
  <form action="{{route('updateArticle')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="id" value="{{$data->id}}" />
    <div class="form-group">
      <label style="font-size:16px;text-align:center;">Title</label>
      <input type="text" name="Title" class="form-control" id="" style="font-size:16px;" value="{{$data->Title}}">
      @if($errors->has('Title'))
      <span class="text-danger">
        <br> {{$errors->first('Title')}}
      </span>
      @endif
    </div>
    <div class="form-group">
      <label style="font-size:16px;text-align:center;">Write Article</label>
      <textarea class="form-control" id="" rows="3" name="Articles" style="font-size:16px;" value="{{$data->Articles}}">{{$data->Articles}}</textarea>
      @if($errors->has('Articles'))
      <span class="text-danger">
        <br> {{$errors->first('Articles')}}
      </span>
      @endif
    </div>
    <div class="custom-file">
      <label style="font-size:16px;text-align:center;">Add Photo</label>
      <input type="file" name="Files" class="form-control" style="font-size:16px;" enctype="multipart/form-data">

    </div>
    <br>
    <br>
    <br>
    <button type="submit" class="btn btn-success" style="font-size:16px; color:white;background-color: green;">Submit</button>
    <button type="reset" class="btn btn-outline-secondary" style="font-size:16px;color:white; background-color: grey;">Cancel</button>
  </form>
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
@stop
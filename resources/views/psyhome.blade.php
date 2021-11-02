@extends('psylayout')
@section('title')
Home
@stop
@section('psynavitem')
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
@section('content')



<h1 style="text-align:center">My Articles</h1>

<div>
  @if(Session::get('article_deleted'))
  <div class="alert alert-success">
    {{Session::get('article_deleted')}}
  </div>
  @endif
</div>
<br>
@foreach($articledata as $data)
@if(session('user2')==$data->Username)
<div class="container article shadow-lg p-6 mb-3 bg-black rounded" style="padding-left:45px;border-style: none;background: linear-gradient(to right, #25c481, #25b7c4); margin-bottom:5px;">
  <br>
  <h2 style="padding-left:45px;color:black; font-size: 25px">
    {{$data->Title}}
  </h2>


  <p style="padding-left:45px;color:black;" id="datetime">{{\Carbon\Carbon::parse($data->created_at)->format('d M, Y')}}</p>

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
<div class="d-flex justify-content-center mt-4">
  <button class="btn btn-info"><a href="/editarticle/{{$data->id}}" style="font-size:16px;color:#fff">Edit</a></button>
  <button class="btn btn-danger"><a href="/deletearticle/{{$data->id}}" style="font-size:16px;color:#fff" onclick="confirm('Are you sure?')">Delete</a></button>
</div>
<br>
<br>
<br>
<br>
<br>
@endif
@endforeach
@stop
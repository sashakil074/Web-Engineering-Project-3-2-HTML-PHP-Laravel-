@extends('psylayout')
@section('title')
Home
@stop
@section('psynavitem')
<li><a class="menu active" href="/psyhome" >Home</a></li>
	 <li><a class="menu " href="/psyaddarticle">Add Articles</a></li>
		<li><a class="menu" href="/psycourses">Courses </a></li>
		<li><a class="menu" href="/psyaddcourse">Add Course</a></li>
		<li><a class="menu" href="/psyMessages"> Messages</a></li>
		<li>
		<div class="dropdown">
     <button class="dropbtn">{{session('user2')}}</button>
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
<div class="container article" style="border-style: none;background: linear-gradient(to right, #25c481, #25b7c4);" >  
<h2  style="padding-left:100px;color: #fff;">
{{$data->Title}}
</h2>


<p style="padding-left:100px;color: #fff;" id="datetime">{{$data->created_at}}</p>

<p style="padding-left:90px;font-size: 25px;color: #fff;">{{$data->Articles}}</p>
<img src="{{asset('images')}}/{{$data->Files}}"  style="max-width:500px; padding-left:90px"/>
<br>
<br>

<a href= "/editarticle/{{$data->id}}" class="btn btn-info" style="position: absolute;right: 150px;">Edit</a>
<a href= "/deletearticle/{{$data->id}}" class="btn btn-danger" style="position: absolute;right: 80px;">Delete</a>
</div>
<br>
<br>
<br>
<br>
@endif
@endforeach
@stop
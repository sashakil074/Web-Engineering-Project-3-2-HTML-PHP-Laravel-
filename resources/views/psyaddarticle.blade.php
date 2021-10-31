
@extends('psylayout')


@section('title')
Add Article
@stop

@section('psynavitem')
<li><a class="menu" href="/psyhome" >Home</a></li>
	 <li><a class="menu active" href="/psyaddarticle">Add Articles</a></li>
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
<style>

.article {
  background: linear-gradient(to right, #25c481, #25b7c4);
  text-align: center;
  max-width: 64em;
  margin: auto;
  text-align: center;
 

}  
.form-control-file{
    margin: auto;
    text-align: center;
}
</style>

<br>
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
<h2  style=" text-align: center">ADD Articles</h2>
<div class="container article" style="border-style: none;" >
<form action="{{route('addArticle')}}" method="post" enctype="multipart/form-data" >
@csrf
<br>
<br>
  <div class="form-group">
    <label >Title</label>
    <input type="text" name="Title" class="form-control" id="" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label >Write Article</label>
    <textarea class="form-control" id="" rows="3" name="Articles" placeholder="Write your articles"></textarea>
  </div>
  <div class="custom-file">
    <label >Add Photo</label>
    <input type="file" name="Files" class="form-control"  enctype="multipart/form-data" >
  </div>
  <br>
  <button type="submit" class="btn btn-success" style=" background-color: green;" >Submit</button>
  <button type="reset" class="btn btn-outline-secondary" style=" background-color: grey;" >Cancel</button>
</form>
<br>
<br>
</div>
<br>
<br>
<br>
@stop
@extends('psylayout')
@section('title')
Courses
@stop
@section('content')


<h1 style="text-align:center">My Courses</h1>

@if(Session::get('Course_deleted'))
  <div class="alert alert-success">
    {{Session::get('Course_deleted')}}
    </div>
    @endif
<br>
@foreach($coursedata as $data)
@if(session('user2')==$data->PsyUsername)

<div class="container article" style="border-style: none;margin:auto;width:850px;background: linear-gradient(to right, #25c481, #25b7c4);"> 
<h3  style="padding-left:100px">
Course ID:{{$data->CourseID}}
</h3> 
<img  src="{{asset('images')}}/{{$data->Files}}"  style="max-width:350px; padding-left:100px;" />
<h3  style="padding-left:100px">
{{$data->CourseTitle}}
</h3>
<p style="padding-left:100px;font-size: 16px;">{{$data->CourseDescription}}</p>
<h3  style="padding-left:100px">
Price:{{$data->Price}}
</h3>
<br>
<br>
<a href= "/opencourse/{{$data->id}}" class="btn btn-info" style="position: absolute;right: 820px; ">Open</a>

<a href= "/editcourse/{{$data->id}}" class="btn btn-info" style="position: absolute;right: 350px; ">Edit</a>
<a href= "/deletecourse/{{$data->id}}" class="btn btn-danger" style="position: absolute;right: 280px;">Delete</a>
</div>
<br>
<br>
<br>
<br>
@endif
@endforeach
@stop
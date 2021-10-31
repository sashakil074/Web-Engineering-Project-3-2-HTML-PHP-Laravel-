@extends('adminlayout')

@section('admintitle')
All Courses
@stop

@section('admincontent')
<br>
<br>
<br>
<br>
<br>
<br>

<h1 style="text-align:center">All Courses</h1>
<div>
@if(Session::get('Course_deleted'))
  <div class="alert alert-success">
    {{Session::get('Course_deleted')}}
    </div>
    @endif
</div>
<br>
@foreach($coursedata as $data)

<div class="container article" style="border-style: none;margin:auto;width:850px;background: linear-gradient(to right, #25c481, #25b7c4);"> 
<h3  style="padding-left:100px">
Course ID:{{$data->CourseID}}
</h3> 
<h3  style="padding-left:100px">
Course By:{{$data->PsyName}}
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
<a href= "/deletecourse/{{$data->id}}" class="btn btn-danger" style="position: absolute;left: 350px;">Delete</a>
</div>
<br>
<br>
<br>
<br>

@endforeach

@stop
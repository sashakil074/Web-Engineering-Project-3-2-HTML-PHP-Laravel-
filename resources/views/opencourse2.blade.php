@extends('patientlayout2')
@section('title2')
Courses
@stop

@section('content3')
<br>
<br>

<br>
<br>
<br>
<h2  style=" text-align: center">Course Videos</h2>


<div class="container " style="border-style: outset;background-color:skyblue;width: 850px"> 
<h3  style="padding-left:100px">
Course ID:{{$coursedata->CourseID}}(Subscribed)
</h3> 

<h3  style="padding-left:100px">
{{$coursedata->CourseTitle}}
</h3>
<p style="padding-left:100px;font-size: 16px;">{{$coursedata->CourseDescription}}</p>
<br>
<h4  style=" text-align: center">Videos</h4>
@foreach($videodata as $vdata)
@if($coursedata->CourseID==$vdata->CourseID)
<h4  style="padding-left:100px">
<strong>#{{$vdata->VideoTitle}}</strong>
</h4>
<p style="max-width:150px; padding-left:100px;">
<iframe src="{{asset('uploads')}}/{{$vdata->Files}}"   ></iframe>
</p>
@endif
@endforeach
<br>
</div>

<br>
<br>
<br>
@stop
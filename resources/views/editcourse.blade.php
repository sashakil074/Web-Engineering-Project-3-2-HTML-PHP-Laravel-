@extends('psylayout2')

@section('title2')
Edit Course
@stop
@section('content2')

<br>
<br>

<br>
<br>
<br>
<div>
@if(Session::get('Course_Updated'))
  <div class="alert alert-success">
    {{Session::get('Course_Updated')}}
    </div>
    @endif
</div>
    <br>
<br>
<br>

<br>
<br>
<br>
<h2  style=" text-align: center">Edit Course</h2>
<div class="container " style="border-style: none; background: linear-gradient(to right, #25c481, #25b7c4);" >
<form action="{{route('updateCourse')}}" method="post" enctype="multipart/form-data" >
@csrf

<input type="hidden" name="id"  value="{{$data->id}}" />
  <div class="form-group">
  <label >Course ID</label>
    <input type="text" name="CourseID" class="form-control" id="" value="{{$data->CourseID}}">
  </div>
  <div class="form-group">
    <label >Title</label>
    <input type="text" name="CourseTitle" class="form-control" id="" value="{{$data->CourseTitle}}">
  </div>
  <div class="form-group">
    <label >Course Description</label>
    <textarea class="form-control" id="" rows="3" name="CourseDescription" value="{{$data->CourseDescription}}">{{$data->CourseDescription}}</textarea>
  </div>
  <div class="form-group">
  <label >Price</label>
    <input type="text" name="Price" class="form-control" id="" value="{{$data->Price}}">
  </div>
  <div class="custom-file">
    <label >Add Photo</label>
    <input type="file" name="Files2" class="form-control"  enctype="multipart/form-data" >
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


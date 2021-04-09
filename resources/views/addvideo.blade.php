@extends('psylayout2')

@section('title2')
Add Course Video
@stop

@section('content2')
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
<h2  style=" text-align: center">ADD Course Video</h2>
<div class="container article" style="border-style: none;" >
<form action="{{route('add.video')}}" method="post" enctype="multipart/form-data" >
@csrf
<br>
<br>
<div class="form-group">
    <label >Course ID</label>
    <input type="text" name="CourseID" class="form-control" id="" placeholder="Enter Course_ID(ex:D101)">
  </div>
  <div class="form-group">
    <label >Video Title</label>
    <input type="text" name="VideoTitle" class="form-control" id="" placeholder="Enter Video Title">
  </div>
  <div class="custom-file">
    <label >Add Video</label>
    <input type="file" name="Files3" class="form-control"  enctype="multipart/form-data" >
  </div>
  <br>
  <button type="submit" class="btn btn-success" style=" background-color: green;" >Add</button>
  <button type="reset" class="btn btn-outline-secondary" style=" background-color: grey;" >Cancel</button>
</form>
<br>
<br>
</div>
<br>
<br>
<br>
@stop
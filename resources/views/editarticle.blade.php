@extends('psylayout2')

@section('title2')
Edit Article
@stop
@section('content2')

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
<h2  style=" text-align: center">Edit ArticleS</h2>
<div class="container " style="border-style: none; background: linear-gradient(to right, #25c481, #25b7c4);" >
<form action="{{route('updateArticle')}}" method="post" enctype="multipart/form-data" >
@csrf

<input type="hidden" name="id"  value="{{$data->id}}" />
  <div class="form-group">
    <label >Title</label>
    <input type="text" name="Title" class="form-control" id=""  value="{{$data->Title}}" >
  </div>
  <div class="form-group">
    <label >Write Article</label>
    <textarea class="form-control" id="" rows="3" name="Articles"  value="{{$data->Articles}}" >{{$data->Articles}}</textarea>
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


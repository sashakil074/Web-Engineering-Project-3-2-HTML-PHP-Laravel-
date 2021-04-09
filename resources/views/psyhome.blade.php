@extends('psylayout')
@section('title')
Home
@stop

@section('content')



<h1 style="text-align:center">My Articles</h1>

@if(Session::get('article_deleted'))
  <div class="alert alert-success">
    {{Session::get('article_deleted')}}
    </div>
    @endif
<br>
@foreach($articledata as $data)
@if(session('user2')==$data->Username)
<div class="container article" style="border-style: none;background: linear-gradient(to right, #25c481, #25b7c4);" >  
<h2  style="padding-left:100px">
{{$data->Title}}
</h2>


<p style="padding-left:100px" id="datetime">{{$data->created_at}}</p>

<p style="padding-left:90px;font-size: 25px;">{{$data->Articles}}</p>
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
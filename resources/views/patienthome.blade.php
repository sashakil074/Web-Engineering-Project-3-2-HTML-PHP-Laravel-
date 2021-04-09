@extends('patientlayout')
@section('title')
Home
@stop

@section('content2')
<br>
<h1 style="text-align:center">Articles</h1>

<br>
@foreach($articledata as $data)
<div class="container article" style="border-style:none;background: linear-gradient(to right, #25c481, #25b7c4);">
<h3  style="padding-left:90px; text-transform: uppercase;color: #fff;">
{{$psyname}}
</h3>
<p style="padding-left:90px;color: #fff;" id="datetime">{{$data->created_at}}</p>

<h3  style="padding-left:90px;color: #fff;">
<strong>{{$data->Title}}</strong>
</h3>


<p style="padding-left:90px;font-size: 25px;color: #fff;">{{$data->Articles}}</p>
<img src="{{asset('images')}}/{{$data->Files}}"  style="max-width:500px; padding-left:90px"/>
<br>
<br>
</div>
<br>
<br>
<br>
<br>
@endforeach
@stop
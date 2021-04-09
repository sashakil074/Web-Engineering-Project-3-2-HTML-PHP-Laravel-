@extends('patientlayout')
@section('title')
Courses
@stop
@section('content2')


<br>

<br>
<br>
<br>
@if(Session::get('payment_success'))
  <div class="alert alert-success">
    {{Session::get('payment_success')}}
    </div>
    @endif
    <br>
    @if(Session::get('CardnotExists'))
  <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
    {{Session::get('CardnotExists')}}
    </div>
    @endif
    <br>
    @if(Session::get('balancenotsufficient'))
  <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
    {{Session::get('balancenotsufficient')}}
    </div>
    @endif

    @if(Session::get('wrongcardno'))
  <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
    {{Session::get('wrongcardno')}}
    </div>
    @endif
<br>
<h1 style="text-align:center">Courses</h1>


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
<a href= "/opencourse2/{{$data->id}}" class="btn btn-info" style="position: absolute;right: 820px; ">Open</a>

</div>
<br>
<br>
<br>
<br>
@endforeach
@stop
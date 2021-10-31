@extends('patientlayout2')
@section('title2')
Payment
@stop

@section('content3')


<br>
<br>
<br>
<br>
<br>
<div>
@if(Session::get('CardnotExists'))
  <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
    {{Session::get('CardnotExists')}}
    </div>
    @endif
</div>
    <br>
    <div>
    @if(Session::get('balancenotsufficient'))
  <div class="alert alert-danger" role="alert" style="text-align: center;color:red">
    {{Session::get('balancenotsufficient')}}
    </div>
    @endif
</div>
<br>
<br>
<h1 style="text-align:center">Make Payment</h1>



<br>
<br>


<div class="container" style="border-style: none;margin:auto;width:850px;background: linear-gradient(to right, #25c481, #25b7c4);"> 

<h3  style="text-align:center">
{{$coursedata->CourseTitle}}
</h3>
<form action="{{route('makepayment')}}" method="post" enctype="multipart/form-data" >
@csrf

<input type="hidden" name="id"  value="{{$coursedata->id}}" />
  <div class="form-group">
  <label >Course ID</label>
    <input type="text" name="CourseID" class="form-control" id="" value="{{$coursedata->CourseID}}">
  </div>
  <div class="form-group">
  <label >Price</label>
    <input type="text" name="Price" class="form-control" id="" value="{{$coursedata->Price}}">
  </div>
  <div class="form-group">
  <label >Card Number</label>
    <input type="text" name="CardNo" class="form-control" id="" placeholder="Enter Card Number">
  </div>
  <button type="submit" class="btn btn-success"  style=" background-color: green;">Submit</button>
  <button type="reset" class="btn btn-outline-secondary" style=" background-color: grey;" >Cancel</button>
  <br>
  <br>
</form>
</div>
<br>
<br>
<br>
<br>

@stop
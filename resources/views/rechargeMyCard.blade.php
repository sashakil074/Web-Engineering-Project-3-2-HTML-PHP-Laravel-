@extends('patientlayout2')
@section('title2')
Recharge My Card
@stop

@section('content3')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
@if(Session::get('recharge_requested'))
  <div class="alert alert-success">
    {{Session::get('recharge_requested')}}
    </div>
    @endif
<h2  style=" text-align: center">Recharge My Card</h2>
<div class="container article" style="border-style: none;" >
<form action="{{route('recharge.card')}}" method="post" enctype="multipart/form-data" >
@csrf
<br>

  <div class="form-group">
    <label >Card Number</label>
    <input type="text" name="Card_no" class="form-control" id="" value="{{$card_no}}">
  </div>
  <div class="form-group">
    <label >Recharge Amount</label>
    <input type="text" name="Amount" class="form-control" id="" placeholder="Enter Recharge Amount">
  </div>
  <br>
  <button type="submit" class="btn btn-success" style=" background-color: green;" >Submit</button>
  <button type="reset" class="btn btn-outline-secondary" style=" background-color: grey;" >Cancel</button>
</form>
<br>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@stop
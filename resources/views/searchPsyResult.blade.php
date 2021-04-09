@extends('patientlayout')
@section('title')
Psychologist Search Result
@stop

@section('content2')
<style>
    table{
  width:100%;
  table-layout: fixed;
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: center;
  font-weight: 500;
  font-size: 20px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: center;
  vertical-align:middle;
  font-weight: 300;
  font-size: 16px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);




/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}



    </style>
<br>
<br>
<h1 style="text-align:center">Seach Results</h1>

<section>
  <!--for demo wrap-->
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Working Place</th>
          <th>Contact</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
    @foreach($searchResult as $data)
      <tbody>
        <tr>
        
          <td>{{$data->Name}} </td>
          <td>{{$data->Position}}</td>
          <td>{{$data->Work_place}}</td>
          <td><a href="/patientMessages" style="color:blue">Contact</a></td>
         
        </tr>
      </tbody>
      @endforeach
    </table>
   
  </div>
  <button onclick="window.location.href='/patientSearchPsy'" style="align:center;background: linear-gradient(to right, #25c481, #25b7c4);position: absolute;right: 550px; text-transform: uppercase;
  letter-spacing: 2px;padding:16px">Search Again<i class="fa fa-search"></i></button>
</section>

<br>
<br>


<br>
<br>

@stop
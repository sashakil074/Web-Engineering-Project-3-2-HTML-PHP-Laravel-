@extends('adminlayout')

@section('admintitle')
All Psychologists
@stop
@section('adminnavitem')
<li><a href="/adminAllPatients">All Patients</a></li>
<li class=" active "><a href="/adminAllPsychologists">All psychologists</a></li>
<li><a href="/adminCourses">Courses </a></li>
<li><a href="/adminRecharge"> Recharge </a></li>
<li><a href="/adminfeedback"> Feedbacks</a></li>
<li>
  <div class="dropdown">
    <a>{{session('admin')}}</a>
    <div class="dropdown-content">
      <a href="/adminprofile">Profile</a>
      <a href="/adminProfileSetting">Setting</a>
      <a href="/logout4">Logout</a>
    </div>
  </div>
</li>
@stop
@section('admincontent')
<br>
<br>
<br>
<br>
<br>
<br>
<style>
  table {
    width: 100%;
    table-layout: fixed;
    background: -webkit-linear-gradient(left, #25c481, #25b7c4);
    background: linear-gradient(to right, #25c481, #25b7c4);
  }

  .tbl-header {
    background-color: rgba(255, 255, 255, 0.3);
  }

  .tbl-content {
    height: 300px;
    overflow-x: auto;
    margin-top: 0px;
    border: 1px solid rgba(255, 255, 255, 0.3);
  }

  th {
    padding: 20px 15px;
    text-align: center;
    font-weight: 500;
    font-size: 20px;
    color: #fff;
    text-transform: uppercase;
  }

  td {
    padding: 15px;
    text-align: center;
    vertical-align: middle;
    font-weight: 300;
    font-size: 16px;
    color: #fff;
    border-bottom: solid 1px rgba(255, 255, 255, 0.1);
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
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  }

  ::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  }
</style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div>
  @if(Session::get('psy_deleted'))
  <div class="alert alert-success">
    {{Session::get('psy_deleted')}}
  </div>
  @endif
</div>
<br>
<h1 style="text-align:center">All Psychologists</h1>

<section>
  <!--for demo wrap-->
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Name</th>
          <th>NID Number</th>
          <th>Position</th>
          <th>Work Place</th>
          <th>Username</th>
          <th>Delete User</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      @foreach($userdata as $data)
      <tbody>
        <tr>

          <td>{{$data->Name}} </td>
          <td>{{$data->NID_no}}</td>
          <td>{{$data->Position}}</td>
          <td>{{$data->Work_place}}</td>
          <td>{{$data->Username}}</td>
          <td><a href="/deletePsychologist/{{$data->id}}" style="color:blue" onclick="confirm('Are you sure?')">Delete</a></td>

        </tr>
      </tbody>
      @endforeach
    </table>

  </div>
  <br>
  <br>
  <br>
  <br>
</section>

<br>
<br>
<br>
<br>
@stop
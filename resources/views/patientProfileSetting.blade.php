@extends('patientlayout2')
@section('title2')
Profile Setting
@stop
@section('navitem2')
<li><a class="menu " href="/patienthome">Home</a></li>
<li><a class="menu " href="/patientcourses">Courses</a></li>
<li><a class="menu" href="/patientPsyList">Psychologists </a></li>
<li><a class="menu" href="/patientSearchPsy">Search Psychologists</a></li>
<li><a class="menu" href="/patientMessages">Contact Psychologists</a></li>
<li>
  <div class="dropdown" style="color:blue">
    <a>{{session('user')}}</a>
    <div class="dropdown-content">
      <a href="/patientprofile">Profile</a>
      <a href="/patientProfileSetting">Setting</a>
      <a href="/logout">Logout</a>
    </div>
  </div>
</li>
@stop
@section('content3')

<style>
  body {
    background-image: url(img/profilePagePhoto.jpg);

  }
</style>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div>
  @if(Session::get('Profile_Updated'))
  <div class="alert alert-success">
    {{Session::get('Profile_Updated')}}
  </div>
  @endif
</div>
<br>
<br>

@foreach($userdata as $data)

<div class="container " style="border-style: none; background-color:aqua;max-width:510px;opacity:90%">
  <br>
  <h2 style=" text-align: center;color:black;">Edit Profile</h2>

  <br>
  <form action="{{route('updateProfile')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="id" value="{{$data->id}}" />
    <div class="form-group">
      <label style="font-size:16px;">Name: </label>
      <input type="text" name="Name" class="form-control" id="" style="font-size:16px;" value="{{$data->Name}}">
    </div>
    <div class="form-group">
      <label style="font-size:16px;">NID Number</label>
      <input type="text" name="NID_no" class="form-control" id="" style="font-size:16px;" value="{{$data->NID_no}}" readonly>
    </div>
    <div class="form-group">
      <label style="font-size:16px;">Birth Year</label>
      <!--<input type="text" name="Birth_year" class="form-control" id="" value="{{$data->Birth_year}}">-->
      <select class="form-control" name="Birth_year" style="font-size:16px;width: 100%;height:32px;text-align:center">
        <option style="font-size:16px;">{{$data->Birth_year}}</option>
        <option value="1940">1940</option>
        <option value="1941">1941</option>
        <option value="1942">1942</option>
        <option value="1943">1943</option>
        <option value="1944">1944</option>
        <option value="1945">1945</option>
        <option value="1946">1946</option>
        <option value="1947">1947</option>
        <option value="1948">1948</option>
        <option value="1949">1949</option>
        <option value="1950">1950</option>
        <option value="1951">1951</option>
        <option value="1952">1952</option>
        <option value="1953">1953</option>
        <option value="1954">1954</option>
        <option value="1955">1955</option>
        <option value="1956">1956</option>
        <option value="1957">1957</option>
        <option value="1958">1958</option>
        <option value="1959">1959</option>
        <option value="1960">1960</option>
        <option value="1961">1961</option>
        <option value="1962">1962</option>
        <option value="1963">1963</option>
        <option value="1964">1964</option>
        <option value="1965">1965</option>
        <option value="1966">1966</option>
        <option value="1967">1967</option>
        <option value="1968">1968</option>
        <option value="1969">1969</option>
        <option value="1970">1970</option>
        <option value="1971">1971</option>
        <option value="1972">1972</option>
        <option value="1973">1973</option>
        <option value="1974">1974</option>
        <option value="1975">1975</option>
        <option value="1976">1976</option>
        <option value="1977">1977</option>
        <option value="1978">1978</option>
        <option value="1979">1979</option>
        <option value="1980">1980</option>
        <option value="1981">1981</option>
        <option value="1982">1982</option>
        <option value="1983">1983</option>
        <option value="1984">1984</option>
        <option value="1985">1985</option>
        <option value="1986">1986</option>
        <option value="1987">1987</option>
        <option value="1988">1988</option>
        <option value="1989">1989</option>
        <option value="1990">1990</option>
        <option value="1991">1991</option>
        <option value="1992">1992</option>
        <option value="1993">1993</option>
        <option value="1994">1994</option>
        <option value="1995">1995</option>
        <option value="1996">1996</option>
        <option value="1997">1997</option>
        <option value="1998">1998</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
      </select>
    </div>
    <div class="form-group">
      <label style="font-size:16px;">Division</label>
      <!-- <input type="text" name="Division" class="form-control" id="" value="{{$data->Division}}">-->
      <select class="form-control" name="Division" style="font-size:16px;width: 100%;height:32px;text-align:center">
        <option style="font-size:16px;">{{$data->Division}}</option>
        <option style="font-size:16px;" value="Dhaka">Dhaka</option>
        <option style="font-size:16px;" value="Khulna">Khulna</option>
        <option style="font-size:16px;" value="Barisal">Barisal</option>
        <option style="font-size:16px;" value="Chittagong">Chittagong</option>
        <option style="font-size:16px;" value="Sylhet">Sylhet</option>
        <option style="font-size:16px;" value="Rangpur">Rangpur</option>
        <option style="font-size:16px;" value="Mymenshingh">Mymenshingh</option>
      </select>
    </div>

    <div class="form-group">
      <label style="font-size:16px;">District</label>
      <input type="text" name="District" class="form-control" id="" style="font-size:16px;" value="{{$data->District}}">
    </div>
    <div class="form-group">
      <label style="font-size:16px;">Email</label>
      <input type="text" name="Email" class="form-control" id="" style="font-size:16px;" value="{{$data->Email}}">
    </div>
    <div class="form-group">
      <label style="font-size:16px;">Contact</label>
      <input type="text" name="Contact" class="form-control" id="" style="font-size:16px;" value="{{$data->Contact}}">
    </div>
    <div class="form-group">
      <label style="font-size:16px;">Password</label>
      <input type="password" name="Password" class="form-control" id="" style="font-size:16px;" value="{{$data->Password}}">
    </div>
    <div class="custom-file">
      <label style="font-size:16px;">Add Profile Photo</label>
      <input type="file" name="ProfilePic" class="form-control" style="font-size:16px;" enctype="multipart/form-data">
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-success" style="font-size:16px; background-color: green;">Submit</button>
    <button type="reset" class="btn btn-outline-secondary" style="font-size:16px; background-color: grey;color:white">Cancel</button>
  </form>
  <br>
  <br>
</div>
@endforeach
<br>
<br>
<br>
<br>
<br>
<br>

@stop
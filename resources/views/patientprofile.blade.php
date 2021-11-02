@extends('patientlayout2')
@section('title2')
Patient Profile
@stop
@section('navitem2')
<li><a class="menu " href="/patienthome">Home</a></li>
<li><a class="menu " href="/patientcourses">Courses</a></li>
<li><a class="menu" href="/patientPsyList">Psychologists </a></li>
<li><a class="menu" href="/patientSearchPsy">Search Psychologists</a></li>
<li><a class="menu" href="/patientMessages">Contact Psychologists</a></li>
<li>
  <div class="dropdown">
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
  input.hidden {
    position: absolute;
    left: -9999px;
  }

  #profile-image1 {
    cursor: pointer;

    width: 100px;
    height: 100px;
    border: 2px solid #03b1ce;
  }

  .tital {
    font-size: 16px;
    font-weight: 500;
  }

  .bot-border {
    border-bottom: 1px #f8f8f8 solid;
    margin: 5px 0 5px 0
  }

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
@foreach($userdata as $data)
<div class="container" style="margin:auto;width:850px;background: transparent">
  <div class="row">


    <div class="col-md-7 ">
      <br>
      <br>
      <div class="panel panel-default" style="background: aqua;position:relative;left: 180px;opacity:90%">
        <div class="panel-heading">
          <h4 align="center" style="font-size:16px;color:black;">My Profile</h4>
        </div>
        <div class="panel-body" style="background: aqua;">

          <div class="box box-info" style="background: aqua;">

            <div class="box-body">
              <div class="col-sm-6">
                <div align="center"> <img alt="User Pic" src="{{asset('images')}}/{{$data->ProfilePic}}" id="profile-image1" class="img-circle img-responsive">

                  <!--  <input id="profile-image-upload" class="hidden" type="file">
<div style="color:#999;" >click here to change profile image</div>-->
                  <!--Upload Image Js And Css-->







                </div>

                <br>

                <!-- /input-group -->
              </div>
              <div class="col-sm-6">
                <h4 style="color:black;">{{$data->Name}}</h4></span>
                <span>
                  <p style="font-size:16px;">{{$data->Username}}</p>
                </span>
              </div>
              <div class="clearfix"></div>
              <hr style="margin:5px 0 5px 0;">


              <div class="col-sm-5 col-xs-6 tital " style="font-size:16px;">Name:</div>
              <div class="col-sm-7 col-xs-6 " style="font-size:16px;">{{$data->Name}}</div>
              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " style="font-size:16px;">Username:</div>
              <div class="col-sm-7" style="font-size:16px;"> {{$data->Username}}</div>
              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " style="font-size:16px;">NID Number:</div>
              <div class="col-sm-7" style="font-size:16px;"> {{$data->NID_no}}</div>
              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " style="font-size:16px;">Birth Year:</div>
              <div class="col-sm-7" style="font-size:16px;">{{$data->Birth_year}}</div>

              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " style="font-size:16px;">Division:</div>
              <div class="col-sm-7" style="font-size:16px;">{{$data->Division}}</div>

              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " style="font-size:16px;">District:</div>
              <div class="col-sm-7" style="font-size:16px;">{{$data->District}}</div>

              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " style="font-size:16px;">Email:</div>
              <div class="col-sm-7" style="font-size:16px;">{{$data->Email}}</div>

              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " style="font-size:16px;">Contact:</div>
              <div class="col-sm-7" style="font-size:16px;">{{$data->Contact}}</div>

              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " style="font-size:20px;"><strong>My Card:</strong></div>
              <div class="col-sm-7"></div>
              <div class="clearfix"></div>
              <div class="col-sm-5 col-xs-6 tital " style="font-size:16px;">Card Number:</div>
              <div class="col-sm-7" style="font-size:16px;">{{$data->NID_no}}</div>
              <div class="clearfix"></div>
              <div class="col-sm-5 col-xs-6 tital " style="font-size:16px;">Balance:</div>
              <div class="col-sm-7" style="font-size:16px;">{{$cardbalance}}Tk</div>
              <div class="clearfix"></div>
              <div class="col-sm-5 col-xs-6 tital "><button onclick="window.location.href='/rechargeMyCard'" style="font-size:16px;background-color:skyblue;padding:3px">Recharge My Card</button></div>


              <!-- /.box-body -->
            </div>
            <!-- /.box -->

          </div>


        </div>
      </div>
    </div>
    <script>
      $(function() {
        $('#profile-image1').on('click', function() {
          $('#profile-image-upload').click();
        });
      });
    </script>









  </div>
</div>
@endforeach
<br>
<br>
<br>
<br>
<br>
<br>
@stop
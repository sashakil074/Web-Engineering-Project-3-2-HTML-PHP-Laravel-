@extends('superadminlayout')

@section('satitle')
Super Admin Profile
@stop
@section('sanavitem')
<li><a href="/superadminhome">Home</a></li>
<li><a href="/saAddAdmin">Add Admin</a></li>
<li><a href="/saCourses">Courses </a></li>
<li><a href="/superadminfeedback"> Feedbacks</a></li>
<li>
  <div class="dropdown">
    <a>{{session('superadmin')}}</a>
    <div class="dropdown-content">
      <a href="/saprofile">Profile</a>
      <a href="/saProfileSetting">Setting</a>
      <a href="/logout3">Logout</a>
    </div>
  </div>
</li>
@stop
@section('sacontent')
<br>
<br>
<br>
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

@foreach($sadata as $data)
<div class="container" style="margin:auto;width:850px;background: transparent">
  <div class="row">


    <div class="col-md-7 ">
      <br>
      <br>
      <div class="panel panel-default" style="background: aqua;position:relative;left: 180px;opacity:90%">
        <div class="panel-heading">
          <h4 align="center" style="color:black;">My Profile</h4>
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



                <!-- /input-group -->
              </div>
              <div class="col-sm-6">
                <h4 style="font-size:16px;color:black;">{{$data->Name}}</h4></span>
                <span>
                  <p style="font-size:14px;color:black">Super Admin</p>
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


              <div class="col-sm-5 col-xs-6 tital " style="font-size:16px;">Email:</div>
              <div class="col-sm-7" style="font-size:16px;">{{$data->Email}}</div>

              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " style="font-size:16px;">Contact:</div>
              <div class="col-sm-7" style="font-size:16px;">{{$data->Contact}}</div>




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
<br>
<br>
<br>

@stop
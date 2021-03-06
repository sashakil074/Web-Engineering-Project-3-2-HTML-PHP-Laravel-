@extends('psylayout2')
@section('title2')
Psychologist Profile
@stop
@section('psynavitem2')
<li><a class="menu" href="/psyhome">Home</a></li>
<li><a class="menu " href="/psyaddarticle">Add Articles</a></li>
<li><a class="menu" href="/psycourses">Courses </a></li>
<li><a class="menu" href="/psyaddcourse">Add Course</a></li>
<li><a class="menu" href="/psyMessages"> Messages</a></li>
<li>
  <div class="dropdown">
    <a>{{session('user2')}}</a>
    <div class="dropdown-content">
      <a href="/psyprofile">Profile</a>
      <a href="/psyProfileSetting">Setting</a>
      <a href="/logout2">Logout</a>
    </div>
  </div>
</li>
@stop
@section('content2')

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
    font-size: 16px;
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
@foreach($userdata as $data)
<div class="container" style="margin:auto;width:850px;background: transparent">
  <div class="row">


    <div class="col-md-7 ">
      <br>
      <br>
      <div class="panel panel-default" style="background: aqua;position:relative;left: 180px;opacity:90%">
        <div class="panel-heading">
          <h4 align="center">My Profile</h4>
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
                  <p>{{$data->Position}}</p>
                </span>
              </div>
              <div class="clearfix"></div>
              <hr style="margin:5px 0 5px 0;">


              <div class="col-sm-5 col-xs-6 tital ">Name:</div>
              <div class="col-sm-7 col-xs-6 ">{{$data->Name}}</div>
              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital ">Username:</div>
              <div class="col-sm-7"> {{$data->Username}}</div>
              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital ">NID Number:</div>
              <div class="col-sm-7"> {{$data->NID_no}}</div>
              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital ">Position:</div>
              <div class="col-sm-7"> {{$data->Position}}</div>
              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital ">Working Place:</div>
              <div class="col-sm-7">{{$data->Work_place}}</div>



              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital ">Division:</div>
              <div class="col-sm-7">{{$data->Division}}</div>

              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital ">District:</div>
              <div class="col-sm-7">{{$data->District}}</div>

              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital ">Email:</div>
              <div class="col-sm-7">{{$data->Email}}</div>

              <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital ">Contact:</div>
              <div class="col-sm-7">{{$data->Contact}}</div>




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
@stop
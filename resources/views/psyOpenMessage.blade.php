@extends('psylayout3')
@section('title3')
Messages with Patient
@stop

@section('psynavitem3')
<li><a class="menu" href="/psyhome">Home</a></li>
<li><a class="menu " href="/psyaddarticle">Add Articles</a></li>
<li><a class="menu" href="/psycourses">Courses </a></li>
<li><a class="menu" href="/psyaddcourse">Add Course</a></li>
<li><a class="menu active" href="/psyMessages"> Messages</a></li>
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
@section('content3')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet' type='text/css'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js' rel='stylesheet' type='text/css'>
<style>
    /* Chat containers */
    .container2 {
        border: 2px solid #dedede;
        background-color: #f1f1f1;
        border-radius: 5px;
        padding: 10px;

    }

    /* Darker chat container */
    .darker {
        border-color: #ccc;
        background-color: #ddd;
    }

    /* Clear floats */
    .container2::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Style images */
    .container2 img {
        float: left;
        max-width: 60px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
    }

    /* Style the right image */
    .container2 img.right {
        float: right;
        margin-left: 20px;
        margin-right: 0;
    }

    /* Style time text */
    .time-right {
        float: right;
        color: #aaa;
    }

    /* Style time text */
    .time-left {
        float: left;
        color: #999;
    }

    .card-bordered {
        border: 1px solid #ebebeb
    }

    .card {
        border: 0;
        border-radius: 0px;
        margin-bottom: 30px;
        -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);
        -webkit-transition: .5s;
        transition: .5s
    }

    .padding {
        padding: 3rem !important
    }

    body {
        background-color: lightgrey;
    }

    .card-header:first-child {
        border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
    }

    .card-header {
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        padding: 15px 20px;
        background-color: transparent;
        border-bottom: 1px solid rgba(77, 82, 89, 0.07)
    }

    .card-header .card-title {
        padding: 0;
        border: none
    }

    h4.card-title {
        font-size: 17px
    }

    .card-header>*:last-child {
        margin-right: 0
    }

    .card-header>* {
        margin-left: 8px;
        margin-right: 8px
    }

    .btn-secondary {
        color: #4d5259 !important;
        background-color: #e4e7ea;
        border-color: #e4e7ea;
        color: #fff
    }

    .btn-xs {
        font-size: 11px;
        padding: 2px 8px;
        line-height: 18px
    }

    .btn-xs:hover {
        color: #fff !important
    }

    .card-title {
        font-family: Roboto, sans-serif;
        font-weight: 300;
        line-height: 1.5;
        margin-bottom: 0;
        padding: 15px 20px;
        border-bottom: 1px solid rgba(77, 82, 89, 0.07)
    }

    .ps-container {
        position: relative
    }

    .ps-container {
        -ms-touch-action: auto;
        touch-action: auto;
        overflow: hidden !important;
        -ms-overflow-style: none
    }

    .media-chat {
        padding-right: 64px;
        margin-bottom: 0
    }

    .media {
        padding: 16px 12px;
        -webkit-transition: background-color .2s linear;
        transition: background-color .2s linear
    }

    .media .avatar {
        flex-shrink: 0
    }

    .avatar {
        position: relative;
        display: inline-block;
        width: 36px;
        height: 36px;
        line-height: 36px;
        text-align: center;
        border-radius: 100%;
        background-color: #f5f6f7;
        color: #8b95a5;
        text-transform: uppercase
    }

    .media-chat .media-body {
        -webkit-box-flex: initial;
        flex: initial;
        display: table
    }

    .media-body {
        min-width: 0
    }

    .media-chat .media-body p {
        position: relative;
        padding: 6px 8px;
        margin: 4px 0;
        background-color: #f5f6f7;
        border-radius: 3px;
        font-weight: 100;
        color: #9b9b9b
    }

    .media>* {
        margin: 0 8px
    }

    .media-chat .media-body p.meta {
        background-color: transparent !important;
        padding: 0;
        opacity: .8
    }

    .media-meta-day {
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        margin-bottom: 0;
        color: #8b95a5;
        opacity: .8;
        font-weight: 400
    }

    .media {
        padding: 16px 12px;
        -webkit-transition: background-color .2s linear;
        transition: background-color .2s linear
    }

    .media-meta-day::before {
        margin-right: 16px
    }

    .media-meta-day::before,
    .media-meta-day::after {
        content: '';
        -webkit-box-flex: 1;
        flex: 1 1;
        border-top: 1px solid #ebebeb
    }

    .media-meta-day::after {
        content: '';
        -webkit-box-flex: 1;
        flex: 1 1;
        border-top: 1px solid #ebebeb
    }

    .media-meta-day::after {
        margin-left: 16px
    }

    .media-chat.media-chat-reverse {
        padding-right: 12px;
        padding-left: 64px;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: reverse;
        flex-direction: row-reverse
    }

    .media-chat {
        padding-right: 64px;
        margin-bottom: 0
    }

    .media {
        padding: 16px 12px;
        -webkit-transition: background-color .2s linear;
        transition: background-color .2s linear
    }

    .media-chat.media-chat-reverse .media-body p {
        float: right;
        clear: right;
        background-color: #48b0f7;
        color: #fff
    }

    .media-chat .media-body p {
        position: relative;
        padding: 10px 20px;
        margin: 4px 0;
        background-color: #f5f6f7;
        border-radius: 3px
    }

    .border-light {
        border-color: #f1f2f3 !important
    }

    .bt-1 {
        width: 50%;
        border-top: 1px solid #ebebeb !important
    }

    .publisher {
        margin: auto;
        width: 40%;
        border: 3px solid green;
        padding: 10px;
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        padding: 12px 20px;
        background-color: #f9fafb
    }

    .publisher>*:first-child {

        margin-left: 0
    }

    .publisher>* {

        margin: 0 8px;
    }

    .publisher-input {

        -webkit-box-flex: 1;
        flex-grow: 1;
        border: none;
        outline: none !important;
        background-color: transparent;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        font-family: Roboto, sans-serif;
        font-weight: 300;
    }

    .publisher-btn {
        position: relative;
        background-color: transparent;
        border: none;
        color: #8b95a5;
        font-size: 16px;
        cursor: pointer;
        overflow: -moz-hidden-unscrollable;
        -webkit-transition: .2s linear;
        transition: .2s linear;
    }

    .file-group {

        border: 3px solid green;
        position: relative;
        overflow: hidden;
    }

    .publisher-btn {

        position: relative;
        background-color: transparent;
        border: none;
        color: #cac7c7;
        font-size: 16px;
        cursor: pointer;
        overflow: -moz-hidden-unscrollable;
        -webkit-transition: .2s linear;
        transition: .2s linear;
    }

    .file-group input[type="file"] {
        position: absolute;

        opacity: 0;
        z-index: -1;
        width: 200px;
    }

    .text-info {
        color: #48b0f7 !important;
    }

    .box-shadow {
        rgba (6, 24, 44, 0.4) 0px 0px 0px 2px,
        rgba(6, 24, 44, 0.65) 0px 4px 6px -1px,
        rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
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


@if( $temp=="0")
<div class="box-shadow">
    <div class="container" style="background-color:white;margin: auto;width: 50%;border-style:outset;">

        <div class="container">
            <br>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li style="text-align:center">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h4 class="card-title" style="text-align:center"><strong>{{$picdata[0]->Name}}</strong></h4>
            <div class="media media-chat">
                <a class="btn btn-xs btn-secondary" href="/psyMessages" data-abc="true">Back</a>
                <br>
                <br>

                <div class="container2">

                    <p>No Message history...</p>

                </div>



            </div>
            <div class="publisher bt-1 border-light"> <img class="avatar avatar-xs" src="{{asset('images')}}/{{$picdata2[0]->ProfilePic}}" alt="...">
                <form action="{{route('send.Message2')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="PtUsername" value="{{$picdata[0]->Username}}" />
                    <input class="publisher-input" type="text" placeholder="Write something" name="PsyMessage">
                    <span class="publisher-btn file-group"> <label for="file">
                            <i class="fa fa-paperclip"></i>
                        </label>
                        <input id="file" name="Files5" type="file" multiple hidden />
                    </span>
                    <button class="publisher-btn text-info" type="submit" data-abc="true"><i class="fa fa-paper-plane"></i></button>
                </form>
                <br>
                <br>
            </div>
        </div>

        <br>
        <br>
        <br>
    </div>
</div>
@else

<div class="container" style="background-color:white;display: flex;">

    <div class="container">
        <br>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li style="text-align:center">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <h4 class="card-title" style="text-align:center"><strong>{{$picdata[0]->Name}}</strong></h4>
        <div class="media media-chat">
            <a class="btn btn-xs btn-secondary" href="/psyMessages" data-abc="true">Back</a>
            <br>
            <br>
            @foreach($Msgdata as $data)

            @if(($data->Read1) == "0")
            @if(($data->Read2) == "1")
            <br>
            <div class="container2">
                <img src="{{asset('images')}}/{{$picdata[0]->ProfilePic}}" alt="Avatar">

                <p>{{$data->PtMessage}}</p>
                <iframe src="{{asset('uploads')}}/{{$data->Files}}" align="left" style="border:none;" height="300" width="500" allowfullscreen></iframe>
                <span class="time-left">{{$data->created_at}}</span>
            </div>
            @else
            <br>
            <div class="container2">
                <img src="{{asset('images')}}/{{$picdata[0]->ProfilePic}}" alt="Avatar">
                <p>{{$data->PtMessage}}</p>
                <span class="time-left">{{$data->created_at}}</span>
            </div>
            @endif
            @elseif(($data->Read1) == "1")
            @if(($data->Read2) == "1")
            <br>
            <div class="container2 darker">
                <img src="{{asset('images')}}/{{$picdata2[0]->ProfilePic}}" alt="Avatar" class="right">

                <p style="text-align:right">{{$data->PsyMessage}}</p>
                <iframe src="{{asset('uploads')}}/{{$data->Files}}" align="right" style="border:none;" height="300" width="500" allowfullscreen>
                    <img src="{{asset('uploads')}}/{{$data->Files}}" class="right"></iframe>

                <span class="time-right">{{$data->created_at}}</span>
            </div>
            @else
            <br>
            <div class="container2 darker">
                <img src="{{asset('images')}}/{{$picdata2[0]->ProfilePic}}" alt="Avatar" class="right">
                <p style="text-align:right">{{$data->PsyMessage}}</p>
                <span class="time-right">{{$data->created_at}}</span>
            </div>
            @endif
            @endif
            @endforeach

        </div>
        <div class="publisher bt-1 border-light"> <img class="avatar avatar-xs" src="{{asset('images')}}/{{$picdata2[0]->ProfilePic}}" alt="...">
            <form action="{{route('send.Message2')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="PtUsername" value="{{$Msgdata[0]->PtUsername}}" />
                <input class="publisher-input" type="text" placeholder="Write something" name="PsyMessage">
                <span class="publisher-btn file-group"> <label for="file">
                        <i class="fa fa-paperclip"></i>
                    </label>
                    <input id="file" name="Files5" type="file" multiple hidden />
                </span>
                <button class="publisher-btn text-info" type="submit" data-abc="true"><i class="fa fa-paper-plane"></i></button>
                <br>
                <br>
            </form>

        </div>
        <br>
        <br>
    </div>

    <br>
    <br>
    <br>

</div>

@endif
<br>
<br>
<br>
<br>
<br>
<br>

@stop
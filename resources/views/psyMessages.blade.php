@extends('psylayout2')
@section('title2')
Messages
@stop

@section('psynavitem2')
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
@section('content2')


<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<link href='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js' rel='stylesheet' type='text/css'>
<link href='https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' rel='stylesheet' type='text/css'>

<br>
<br>
<br>
<br>
<br>
<br>

@if( $Msgdata=="0")

<div class="py-10 h-screen bg-gray-300 px-2">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg overflow-hidden md:max-w-lg">
        <div class="md:flex">
            <div class="w-full p-4">
                <div class="relative">
                    <p style="text-align: center;font-size:14px; "> My Inbox<i class="fa fa-sms absolute right-3 top-4 text-gray-300">Search...</i></p>
                </div>
                <br>
                <br>
                <h1 style="text-align: center">No Messages</h1>
                <br>
                <br>
                <ul>
                    <div class="flex flex-col ml-2"> <span class="text-sm text-gray-400 truncate w-32">No Message History</span> </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@else


<div class="py-10 h-screen bg-gray-300 px-2">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg overflow-hidden md:max-w-lg">
        <div class="md:flex">
            <div class="w-full p-4">
                <div class="relative">
                    <p style="text-align: center;font-size:14px;"> My Inbox<i class="fa fa-sms absolute right-3 top-4 text-gray-300"></i></p>
                </div>
                <ul>
                    @foreach($Msgdata as $data)
                    <li class="flex justify-between items-center bg-white mt-2 p-2 hover:shadow-lg rounded cursor-pointer transition" onclick="location.href = '/psyOpenMessage/{{$data->PtUsername}}';">
                        <div class="flex ml-2"> <img src="{{asset('images')}}/{{$data->ProfilePic}}" width="40" height="40" class="rounded-full">
                            <div class="flex flex-col ml-2"> <span class="font-medium text-black">{{$data->PtName}}</span> <span class="text-sm text-gray-400 truncate w-32">{{$data->PtMessage}}</span> </div>
                        </div>
                        <div class="flex flex-col items-center"> <span class="text-gray-300">{{$data->created_at}}</span> <i class="fa fa-star text-green-400"></i> </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endif




@stop
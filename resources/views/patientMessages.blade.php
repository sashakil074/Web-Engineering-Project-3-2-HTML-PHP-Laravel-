@extends('patientlayout2')
@section('title2')
Contact Psychologist
@stop
@section('navitem2')
<li> <a href="/patienthome">Home</a></li>
<li> <a href="/patientcourses">Courses</a></li>
<li><a href="/patientPsyList">Psychologists </a></li>
<li><a href="/patientSearchPsy">Search Psychologists</a></li>
<li class="active"><a href="/patientMessages">Contact Psychologists</a></li>
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
<br>

<br>
@if( $Msgdata=="0")

<div class="py-10 h-screen bg-gray-300 px-2">
    <br>
    <br>

    <br>
    <br>
    <br>
    <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg overflow-hidden md:max-w-lg">
        <div class="md:flex">
            <div class="w-full p-4">
                <div class="relative"> <a href="/patientSearchPsy" class="w-full h-12 rounded focus:outline-none px-3 focus:shadow-md"> <i class="fa fa-search absolute right-3 top-4 text-gray-300">Search...</i></a> </div>
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
    <h1 style="text-align: center;font-size:14px;">All Messages</h1>
    <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg overflow-hidden md:max-w-lg">
        <div class="md:flex">
            <div class="w-full p-4">
                <div class="relative"> <a href="/patientSearchPsy" class="w-full h-12 rounded focus:outline-none px-3 focus:shadow-md"> <i class="fa fa-search absolute right-3 top-4 text-gray-300">Search...</i></a> </div>
                <ul>
                    @foreach($Msgdata as $data)
                    <li class="flex justify-between items-center bg-white mt-2 p-2 hover:shadow-lg rounded cursor-pointer transition" onclick="location.href = '/patientOpenMessage/{{$data->PsyUsername}}';">
                        <div class="flex ml-2"> <img src="{{asset('images')}}/{{$data->ProfilePic}}" width="40" height="40" class="rounded-full">
                            <div class="flex flex-col ml-2"> <span class="font-medium text-black">{{$data->PsyName}}</span> <span class="text-sm text-gray-400 truncate w-32">{{$data->PsyMessage}}</span> </div>
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
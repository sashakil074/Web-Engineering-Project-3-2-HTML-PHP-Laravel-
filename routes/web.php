<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientRegController;
use App\Http\Controllers\PatientLoginController;
use App\Http\Controllers\PsyRegController;
use App\Http\Controllers\PsyLoginController;
use App\Http\Controllers\PsyController;
use App\Http\Controllers\PatientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Patient Registration and Login
Route::get('/patientregistration', [PatientRegController::class,'viewload']);
Route::post('patientregistration', [PatientRegController::class,'store'])->name('store');

Route::post('patienthome', [PatientLoginController::class,'patientLogin']);
//Route::view('patienthome','patienthome');
Route::get('/patienthome',[PatientController::class,'showArticle']);

Route::get('/patientlogin', function () {

    if(session()->has('user'))
    {
        return redirect('patienthome');
    }
    return view('patientlogin');
    
});

Route::get('/logout', function () {

    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('patientlogin');
    
});

//Psychologist Registration and Login
Route::get('/psyregistration',[PsyRegController::class,'viewload']);
Route::post('psyregistration', [PsyRegController::class,'store'])->name('store');



Route::post('psyhome', [PsyLoginController::class,'psyLogin']);


//Psychologist Home show article
Route::get('/psyhome',[PsyController::class,'showArticle']);


Route::get('/psylogin', function () {

    if(session()->has('user2'))
    {
        return redirect('psyhome');
    }
    return view('psylogin');
    
});

Route::get('/logout2', function () {

    if(session()->has('user2'))
    {
        session()->pull('user2');
    }
    return redirect('psylogin');
    
});

//Psychologist Add Article
//Route::view('psyaddarticle','psyaddarticle');
Route::get('/psyaddarticle', [PsyController::class,'viewload']);
Route::post('psyaddarticle', [PsyController::class,'addArticle'])->name('addArticle');

//Psychologist courses page
//Route::view('psycourses','psycourses');
Route::get('/psycourses',[PsyController::class,'showCourse']);

//Psychologist Add courses page
//Route::view('psyaddcourse','psyaddcourse');
Route::get('/psyaddcourse', [PsyController::class,'viewAddCourse']);
Route::post('psyaddcourse', [PsyController::class,'addCourse'])->name('add.course');
//Psychologist Messages page
Route::view('psyMessages','psyMessages');

//Patient courses page
//Route::view('patientcourses','patientcourses');
Route::get('/patientcourses',[PatientController::class,'showCourse']);

//Patient Psychologists List page
//Route::view('patientPsyList','patientPsyList');
Route::get('/patientPsyList',[PatientController::class,'showPsyList']);
//Patient Search Psychologists page
//Route::view('patientSearchPsy','patientSearchPsy');
Route::get('/patientSearchPsy', [PatientController::class,'viewSearchPsy']);
Route::post('patientSearchPsy', [PatientController::class,'searchPsy'])->name('search.Psy');
//Patient contact Psychologists page
Route::view('patientMessages','patientMessages');


//Psychologist  Edit article,delete article
Route::get('/editarticle/{id}',[PsyController::class,'editArticle']);

Route::post('updatearticle', [PsyController::class,'updateArticle'])->name('updateArticle');
Route::get('/deletearticle/{id}',[PsyController::class,'deleteArticle']);

//Psychologist  open course,add videos
Route::get('/opencourse/{id}',[PsyController::class,'openCourse']);

Route::get('/addvideo', [PsyController::class,'viewAddVideo']);
Route::post('addvideo', [PsyController::class,'addVideo'])->name('add.video');

//Route::get('/opencourse',[PsyController::class,'showVideo']);

//Psychologist  Edit Course,delete Course,delete video
Route::get('/editcourse/{id}',[PsyController::class,'editCourse']);
Route::post('updatecourse', [PsyController::class,'updateCourse'])->name('updateCourse');
Route::get('/deletecourse/{id}',[PsyController::class,'deleteCourse']);
Route::get('/deletevideo/{id}',[PsyController::class,'deleteVideo']);


//Patient  open course,payment
Route::get('/opencourse2/{id}',[PatientController::class,'openCourse']);

Route::post('makepayment', [PatientController::class,'makePayment'])->name('makepayment');


//Patient profile page,profile setting
//Route::view('patientprofile','patientprofile');
Route::get('/patientprofile', [PatientController::class,'viewPatientProfile']);
Route::get('/patientProfileSetting', [PatientController::class,'viewPatientProfileSetting']);
Route::post('updateProfile', [PatientController::class,'updateProfile'])->name('updateProfile');

//Psychologist profile page,profile setting
Route::get('/psyprofile', [PsyController::class,'viewPsyProfile']);
Route::get('/psyProfileSetting', [PsyController::class,'viewPsyProfileSetting']);
Route::post('updateProfile2', [PsyController::class,'updateProfile'])->name('updateProfile2');
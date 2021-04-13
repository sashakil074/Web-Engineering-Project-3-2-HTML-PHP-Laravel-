<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientRegController;
use App\Http\Controllers\PatientLoginController;
use App\Http\Controllers\PsyRegController;
use App\Http\Controllers\PsyLoginController;
use App\Http\Controllers\PsyController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
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
//Route::view('rechargeMyCard','rechargeMyCard');
Route::get('/rechargeMyCard', [PatientController::class,'showRechargeMyCard']);
Route::post('rechargeMyCard', [PatientController::class,'rechargeMyCard'])->name('recharge.card');

//Psychologist profile page,profile setting
Route::get('/psyprofile', [PsyController::class,'viewPsyProfile']);
Route::get('/psyProfileSetting', [PsyController::class,'viewPsyProfileSetting']);
Route::post('updateProfile2', [PsyController::class,'updateProfile'])->name('updateProfile2');


//super admin
//Route::view('superadminLogin','superadminLogin');
Route::post('superadminhome', [SuperAdminController::class,'superadminLogin']);
Route::get('/superadminLogin', function () {

    if(session()->has('superadmin'))
    {
        return redirect('superadminhome');
    }
    return view('superadminLogin');
    
});

Route::get('/logout3', function () {

    if(session()->has('superadmin'))
    {
        session()->pull('superadmin');
    }
    return redirect('superadminLogin');
    
});

Route::view('superadminhome','superadminhome');
//Admin
//Route::view('superadminLogin','superadminLogin');
Route::post('adminhome', [AdminController::class,'adminLogin']);
Route::get('/adminLogin', function () {

    if(session()->has('admin'))
    {
        return redirect('adminhome');
    }
    return view('adminLogin');
    
});

Route::get('/logout4', function () {

    if(session()->has('admin'))
    {
        session()->pull('admin');
    }
    return redirect('adminLogin');
    
});


//Super Admin
Route::get('/superadminhome',[SuperAdminController::class,'showAdmin']);
Route::get('/saAddAdmin',[SuperAdminController::class,'showaddAdmin']);
Route::post('saAddAdmin', [SuperAdminController::class,'addAdmin'])->name('addAdmin');
Route::get('/saCourses',[SuperAdminController::class,'showCourse']);
Route::get('/deleteAdmin/{id}',[SuperAdminController::class,'deleteAdmin']);
Route::get('/deleteCourse/{id}',[SuperAdminController::class,'deleteCourse']);

//Super Admin profile page,profile setting
Route::get('/saprofile', [SuperAdminController::class,'viewSaProfile']);
Route::get('/saProfileSetting', [SuperAdminController::class,'viewSaProfileSetting']);
Route::post('updateProfile3', [SuperAdminController::class,'updateProfile'])->name('updateProfile3');

//Admin
Route::get('/adminAllPatients',[AdminController::class,'showPatients']);
Route::get('/adminAllPsychologists',[AdminController::class,'showPsychologists']);
Route::get('/adminCourses',[AdminController::class,'showCourse']);
Route::get('/deletePatient/{id}',[AdminController::class,'deletePatient']);
Route::get('/deletePsychologist/{id}',[AdminController::class,'deletePsychologist']);
Route::get('/deleteCourse/{id}',[AdminController::class,'deleteCourse']);
Route::get('/adminRecharge',[AdminController::class,'showRechargeRequests']);
Route::get('/rechargeCard/{id}',[AdminController::class,'rechargeCard']);

//Admin profile page,profile setting
Route::get('/adminprofile', [AdminController::class,'viewAdminProfile']);
Route::get('/adminProfileSetting', [AdminController::class,'viewAdminProfileSetting']);
Route::post('updateProfile4', [AdminController::class,'updateProfile'])->name('updateProfile4');
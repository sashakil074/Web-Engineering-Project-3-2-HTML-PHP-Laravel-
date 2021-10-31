<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Card;
class PatientRegController extends Controller
{
    //
    public function viewload()
    {
        return view('patientregistration');
    }
    public function store(Request $request)
    {
      // return $request->input(); 
      $request->validate(
        [
           'Name'=>'required' ,
           'NID_no'=>'required' ,
           'Birth_year'=>'required' ,
           'Division'=>'required' ,
           'District'=>'required' ,
           'Email'=>'required' ,
           'Contact'=>'required' ,
           'Username'=>'required' ,
           'Password'=>'required|confirmed|min:4',
           'Password_confirmation' => 'required|min:4'
        ]
        );
      $data= new Patient;
      $data->Name=$request->input('Name');
      $data->NID_no=$request->input('NID_no');
      $data->Birth_year=$request->input('Birth_year');
      $data->Division=$request->input('Division');
      $data->District=$request->input('District');
      $data->Email=$request->input('Email');
      $data->Contact=$request->input('Contact');
      $data->Username=$request->input('Username');
      $data->Password=$request->input('Password');
      

      $cardData= new Card;
      $cardData->Name=$request->input('Name');
      $cardData->Username=$request->input('Username');
      $cardData->CardNo=$request->input('NID_no');
      $cardData->Balance='0';

      if(Patient::where('NID_no', $data->NID_no)->exists()){
        return back()->with('error2','This NID number already exists,try another!');
      }
      else if(Patient::where('Username', $data->Username)->exists())
      {
        return back()->with('error2','This username already exists,try another!');
      }
      else if(Patient::where('Username', $data->Username)->exists())
      {
        return back()->with('error2','This email already exists,try another!');
      }
      else
      {
      $data->save();
      $cardData->save();

      $request->session()->flash('status1','Patient Registration Successful');
      return redirect('patientlogin');
      }
}
}
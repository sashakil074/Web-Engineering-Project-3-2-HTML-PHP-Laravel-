<?php

namespace App\Http\Controllers;
use App\Models\Psychologist;
use Illuminate\Http\Request;

class PsyRegController extends Controller
{
    //
    public function viewload()
    {
        return view('psyregistration');
    }
    public function store(Request $request)
    {
      // return $request->input(); 
      $request->validate(
        [
           'Name'=>'required' ,
           'NID_no'=>'required' ,
           'Position'=>'required' ,
           'Work_place'=>'required',
           'Division'=>'required' ,
           'District'=>'required' ,
           'Email'=>'required' ,
           'Contact'=>'required' ,
           'Username'=>'required' ,
           'Password'=>'required|confirmed|min:4',
           'Password_confirmation' => 'required|min:4'
        ]
        );
      $data= new Psychologist;
      $data->Name=$request->input('Name');
      $data->NID_no=$request->input('NID_no');
      $data->Position=$request->input('Position');
      $data->Work_place=$request->input('Work_place');
      $data->Division=$request->input('Division');
      $data->District=$request->input('District');
      $data->Email=$request->input('Email');
      $data->Contact=$request->input('Contact');
      $data->Username=$request->input('Username');
      $data->Password=$request->input('Password');
      $data->save();

      $request->session()->flash('status1','Psychologist Registration Successful');
      return redirect('psylogin');
    }
}

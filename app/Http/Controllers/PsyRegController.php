<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
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
        'Name' => 'required',
        'NID_no' => 'required',
        'Position' => 'required',
        'Work_place' => 'required',
        'Division' => 'required',
        'District' => 'required',
        'Email' => 'required',
        'Contact' => 'required',
        'Username' => 'required',
        'Password' => 'required|confirmed|min:4',
        'Password_confirmation' => 'required|min:4'
      ]
    );
    $data = new Psychologist;
    $data->Name = $request->input('Name');
    $data->NID_no = $request->input('NID_no');
    $data->Position = $request->input('Position');
    $data->Work_place = $request->input('Work_place');
    $data->Division = $request->input('Division');
    $data->District = $request->input('District');
    $data->Email = $request->input('Email');
    $data->Contact = $request->input('Contact');
    $data->Username = $request->input('Username');
    $data->Password = Hash::make($request->input('Password'));

    if (Psychologist::where('NID_no', $data->NID_no)->exists()) {
      return back()->with('error', 'This NID number already exists,try another!');
    } else if (Psychologist::where('Username', $data->Username)->exists()) {
      return back()->with('error', 'This username already exists,try another!');
    } else if (Psychologist::where('Username', $data->Username)->exists()) {
      return back()->with('error', 'This email already exists,try another!');
    } else {
      $data->save();

      $request->session()->flash('status1', 'Psychologist Registration Successful');
      return redirect('psylogin');
    }
  }
}

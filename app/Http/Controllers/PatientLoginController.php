<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Patient;
use Auth;

class PatientLoginController extends Controller
{

  public function patientLogin(Request $request)
  {
    // return $request->input(); 

    $request->validate(
      [

        'Username' => 'required',
        'Password' => 'required',
      ]
    );
    $logindata = $request->input();

    $data1 = $request->input('Username');

    if (Patient::where('Username', $data1)->doesntExist()) {
      $request->session()->flash('status', 'Wrong Username');
      return redirect('patientlogin');
    } else {

      $data = Patient::where('Username', $request->input('Username'))->first();

      if (Hash::check($request->input('Password'), $data->Password)) {
        $request->session()->put('user', $logindata['Username']);
        return redirect('patienthome');
      } else {
        $request->session()->flash('status', 'Wrong Password');
        return redirect('patientlogin');
      }
    }
  }
}

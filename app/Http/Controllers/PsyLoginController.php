<?php

namespace App\Http\Controllers;
use App\Models\Psychologist;
use Illuminate\Http\Request;

class PsyLoginController extends Controller
{
    //
    public function psyLogin(Request $request)
    {
      // return $request->input(); 

      $request->validate(
        [
           
         'Username'=>'required' ,
        'Password'=>'required',
        ]
        );
     $logindata=$request->input();
      
     $data1=$request->input('Username');

   if(Psychologist::where('Username' , $data1)->doesntExist())
   {
    $request->session()->flash('status2','Wrong Username');
     return redirect('psylogin');
   }
   else{
   
     $data=Psychologist::where('Username',$request->input('Username'))->first();

     if($request->input('Password')==$data->Password){
     $request->session()->put('user2',$logindata['Username']);
     return redirect('psyhome');
     }
     else
     {
      $request->session()->flash('status2','Wrong Password');
      return redirect('psylogin');
     }
    }

    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Psychologist;
use App\Models\Patient;
use App\Models\Course;
use App\Models\Coursevideo;
use App\Models\Payment;
use App\Models\Card;
use App\Models\Admin;
use App\Models\Recharge;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function adminLogin(Request $request)
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

   if(Admin::where('Username' , $data1)->doesntExist())
   {
    $request->session()->flash('status','Wrong Username');
     return redirect('adminLogin');
   }
   else{
   
     $data=Admin::where('Username',$request->input('Username'))->first();

     if($request->input('Password')==$data->Password){
     $request->session()->put('admin',$logindata['Username']);
     return redirect('adminAllPatients');
     }
     else
     {
      $request->session()->flash('status','Wrong Password');
      return redirect('adminLogin');
     }
    }

    }

    public function showPatients()
    {
     $userdata=Patient::all();

    return view('adminAllPatients',compact('userdata'));
    }

    public function showPsychologists()
    {
     $userdata=Psychologist::all();

    return view('adminAllPsychologists',compact('userdata'));
    }

    public function showCourse()
    {
     $coursedata=Course::all();
    

    return view('adminCourses',compact('coursedata'));
    }

    public function deletePatient($id)
    {
     $data=Patient::find($id);

     unlink(public_path('images').'/'.$data->ProfilePic);
     
     $data->delete();

     return back()->with('patient_deleted','Patient deleted successfully');
    }

    public function deletePsychologist($id)
    {
     $data=Psychologist::find($id);

     unlink(public_path('images').'/'.$data->ProfilePic);
     
     $data->delete();

     return back()->with('psy_deleted','Psychologist deleted successfully');
    }

    public function deleteCourse($id)
    {
     $data=Course::find($id);

     unlink(public_path('images').'/'.$data->Files);
     
     $data->delete();

     return back()->with('Course_deleted','Course deleted successfully');
    }

    public function viewAdminProfile(Request $request)
    {
        $admindata=Admin::where('Username',$request->session()->get('admin'))
        ->get('*');
        
        return view('adminprofile',compact('admindata'));
    }

    public function viewAdminProfileSetting(Request $request)
    {
        $admindata=Admin::where('Username',$request->session()->get('admin'))
        ->get('*');

        return view('adminProfileSetting',compact('admindata'));
    }

    public function updateProfile(Request $request)
    {
      $image = $request->file('ProfilePic');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

      $Name=$request->input('Name');
      $NID_no=$request->input('NID_no');
      $Division=$request->input('Division');
      $Email=$request->input('Email');
      $Contact=$request->input('Contact');
      $Password=$request->input('Password');

      $data=Admin::find($request->id);
      $data->Name=$Name;
      $data->NID_no=$NID_no;
      $data->Division=$Division;
      $data->Email=$Email;
      $data->Contact=$Contact;
      $data->Password=$Password;
      $data->ProfilePic=$imageName;

      $data->save();
     

      return back()->with('Profile_Updated','Profile Updated successfully');

    }

    public function showRechargeRequests(Request $request)
    {
        $rechargedata=Recharge::where('Status','0')
        ->get('*');

        return view('adminRecharge',compact('rechargedata'));
    }

    public function rechargeCard($id)
    {
     $data=Recharge::find($id);
      $carddata=Card::where('CardNo',$data->Card_no)->first();

      $carddata->Balance=$carddata->Balance+$data->Amount;
      $data->Status='1';
     $data->save();
     $carddata->save();

     return back()->with('recharge_success','Card Recharge Successfull');
    }
}

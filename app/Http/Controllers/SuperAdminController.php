<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Psychologist;
use App\Models\Patient;
use App\Models\Course;
use App\Models\Coursevideo;
use App\Models\Payment;
use App\Models\Card;
use App\Models\Superadmin;
use App\Models\Admin;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    //
    public function superadminLogin(Request $request)
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

   if(Superadmin::where('Username' , $data1)->doesntExist())
   {
    $request->session()->flash('status','Wrong Username');
     return redirect('superadminLogin');
   }
   else{
   
     $data=Superadmin::where('Username',$request->input('Username'))->first();

     if($request->input('Password')==$data->Password){
     $request->session()->put('superadmin',$logindata['Username']);
     return redirect('superadminhome');
     }
     else
     {
      $request->session()->flash('status','Wrong Password');
      return redirect('superadminLogin');
     }
    }

    }

    public function showAdmin()
    {
     $admindata=Admin::all();

    return view('superadminhome',compact('admindata'));
    }
    public function showaddAdmin()
    {
  
    return view('saAddAdmin');
    }
    public function addAdmin(Request $request)
    {
    
      $request->validate(
        [
           'Name'=>'required' ,
           'NID_no'=>'required' ,
           'Admin_ID'=>'required' ,
           'Division'=>'required' ,
           'Email'=>'required' ,
           'Contact'=>'required' ,
           'Username'=>'required' ,
           'Password'=>'required|confirmed|min:4',
           'Password_confirmation' => 'required|min:4'
        ]
        );

        
       
       if(Admin::where('Admin_ID' , $request->input('Admin_ID'))->exists()){
        $request->session()->flash('adminIDexists','This Admin ID already exists,try different!');
        return redirect('saAddAdmin');
       }
       else if(Admin::where('Username' , $request->input('Username'))->exists())
       {
      $request->session()->flash('adminUsernameexists','This Username already exists,try different!');
       return redirect('saAddAdmin');
      }
       else{
      $data= new Admin;
      $data->Name=$request->input('Name');
      $data->NID_no=$request->input('NID_no');
      $data->Admin_ID=$request->input('Admin_ID');
      $data->Division=$request->input('Division');
      $data->Email=$request->input('Email');
      $data->Contact=$request->input('Contact');
      $data->Username=$request->input('Username');
      $data->Password=$request->input('Password');
      $data->save();

      $request->session()->flash('admin_added','Admin added Successfully');
      return redirect('saAddAdmin');
       }
    }

    public function showCourse()
    {
     $coursedata=Course::all();
    

    return view('saCourses',compact('coursedata'));
    }


    public function deleteAdmin($id)
    {
     $data=Admin::find($id);

     unlink(public_path('images').'/'.$data->ProfilePic);
     
     $data->delete();

     return back()->with('admin_deleted','Admin deleted successfully');
    }
    public function deleteCourse($id)
    {
     $data=Course::find($id);

     unlink(public_path('images').'/'.$data->Files);
     
     $data->delete();

     return back()->with('Course_deleted','Course deleted successfully');
    }

    public function viewSaProfile(Request $request)
    {
        $sadata=Superadmin::where('Username',$request->session()->get('superadmin'))
        ->get('*');
        
        return view('saprofile',compact('sadata'));
    }

    public function viewSaProfileSetting(Request $request)
    {
        $sadata=Superadmin::where('Username',$request->session()->get('superadmin'))
        ->get('*');

        return view('saProfileSetting',compact('sadata'));
    }

    public function updateProfile(Request $request)
    {
      $image = $request->file('ProfilePic');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

      $Name=$request->input('Name');
      $NID_no=$request->input('NID_no');
      $Email=$request->input('Email');
      $Contact=$request->input('Contact');
      $Password=$request->input('Password');

      $data=Superadmin::find($request->id);
      $data->Name=$Name;
      $data->NID_no=$NID_no;
      $data->Email=$Email;
      $data->Contact=$Contact;
      $data->Password=$Password;
      $data->ProfilePic=$imageName;

      $data->save();
     

      return back()->with('Profile_Updated','Profile Updated successfully');

    }
}

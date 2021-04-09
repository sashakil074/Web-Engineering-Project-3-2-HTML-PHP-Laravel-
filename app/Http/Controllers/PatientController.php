<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Psychologist;
use App\Models\Patient;
use App\Models\Course;
use App\Models\Coursevideo;
use App\Models\Payment;
use App\Models\Card;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    public function showArticle()
    {
     $articledata=Article::all();

     $psyname = Psychologist::join('articles', 'psychologists.Username', '=', 'articles.Username')->first()->Name;
               //->get(['psychologists.Name']);

 
    //$articledata->Name=$psyname;
   
    return view('patienthome',compact('articledata','psyname'));
    }

    //course sectoion
    public function showCourse()
    {
     $coursedata=Course::all();
    

    return view('patientcourses',compact('coursedata'));
    }

    public function openCourse($id,Request $request)
    {
        $coursedata=Course::find($id);

        $paymentdata=Payment::all();

       // $pCourseID=Payment::where('CourseID' , $data->CourseID)->first()
                     //  ->where('PtUsername' , $request->session()->get('user'));

        if(Payment::where('CourseID' , $coursedata->CourseID)
        ->where('PtUsername' , $request->session()->get('user'))->exists())
        {

           
               
               $videodata=Coursevideo::all();

              return view('opencourse2',compact('coursedata','videodata'));     
         }
         else{

            return view('makepayment',compact('coursedata'));
         }
     

    }

    public function makePayment(Request $request)
    {
      // return $request->input(); 
      $request->validate(
        [
           'CardNo'=>'required'  
           
        ]
        );
        
        $carddata=Card::where('CardNo',$request->input('CardNo'))->first();
        //$userdata=Card::where('username',$request->session()->get('user'))->first();
        
        
        if(Card::where('CardNo' , $request->input('CardNo'))->doesntExist())
         {
        $request->session()->flash('CardnotExists','This Card number is not available,try different!');
         return redirect('patientcourses');
        }
        else {
            $username=Card::where('CardNo',$request->input('CardNo'))->first()->Username;
        if($request->session()->get('user') !=  $username)
        {
            $request->session()->flash('wrongcardno','This Card number is Wrong,try different!');
             return redirect('patientcourses');
            }
        
        else if($carddata->Balance < $request->input('Price')){
            $request->session()->flash('balancenotsufficient','Your Card dont have enough balance,please reacharge!');
            return redirect('patientcourses');
        }

        else{
        
        $data= new Payment;
        $data->CourseID=$request->input('CourseID');
        $data->PtUsername=$request->session()->get('user');
        $data->CardNo=$request->input('CardNo');
        $data->Price=$request->input('Price');

        $data->Status='paid';

        $carddata->Balance=$carddata->Balance-$data->Price;
     
        $carddata->save();
        $data->save();
      
      $request->session()->flash('payment_success','Your Course Payment Successful');
      return redirect('patientcourses');
   }
    }
}

public function showPsyList()
    {
     $psydata=Psychologist::all();
    

    return view('patientPsyList',compact('psydata'));
    }

    public function viewSearchPsy()
    {
        return view('patientSearchPsy');
    }
    public function searchPsy(Request $request)
    {

        $searchdata=$request->input('searchPsy');

        $searchResult=Psychologist::where('Name', 'like', '%' . $searchdata . '%')
                                    ->orWhere('Work_place', 'like', '%' . $searchdata . '%')
                                    ->get('*');

         return view('searchPsyResult',compact('searchResult')) ;                      

    }

    public function viewPatientProfile(Request $request)
    {
        $userdata=Patient::where('Username',$request->session()->get('user'))
        ->get('*');
        $cardbalance=Card::where('Username',$request->session()->get('user'))
        ->first()->Balance;

        return view('patientprofile',compact('cardbalance','userdata'));
    }

    public function viewPatientProfileSetting(Request $request)
    {
        $userdata=Patient::where('Username',$request->session()->get('user'))
        ->get('*');

        return view('patientProfileSetting',compact('userdata'));
    }

    public function updateProfile(Request $request)
    {
      $image = $request->file('ProfilePic');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

      $Name=$request->input('Name');
      $NID_no=$request->input('NID_no');
      $Birth_year=$request->input('Birth_year');
      $Division=$request->input('Division');
      $District=$request->input('District');
      $Email=$request->input('Email');
      $Contact=$request->input('Contact');
      $Password=$request->input('Password');

      $data=Patient::find($request->id);
      $data->Name=$Name;
      $data->NID_no=$NID_no;
      $data->Birth_year=$Birth_year;
      $data->Division=$Division;
      $data->District=$District;
      $data->Email=$Email;
      $data->Contact=$Contact;
      $data->Password=$Password;
      $data->ProfilePic=$imageName;

      $cid=Card::where('Username',$request->session()->get('user'))->first()->id;
      $cardData=Card::find($cid);
      $cardData->Name=$Name;
      $cardData->CardNo=$NID_no;

      $data->save();
      $cardData->save();

      return back()->with('Profile_Updated','Profile Updated successfully');

    }
}

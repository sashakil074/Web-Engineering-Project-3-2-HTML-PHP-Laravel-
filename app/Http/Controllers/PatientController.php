<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Article;
use App\Models\Psychologist;
use App\Models\Patient;
use App\Models\Course;
use App\Models\Coursevideo;
use App\Models\Payment;
use App\Models\Card;
use App\Models\Recharge;
use App\Models\Feedback;
use App\Models\Message;
use Illuminate\Http\Request;

class PatientController extends Controller
{
  //
  public function showArticle()
  {
    //$articledata=Article::all();

    //$psyname = Psychologist::join('articles', 'psychologists.Username', '=', 'articles.Username')->first();
    //->get(['psychologists.Name']);
    $articledata = Psychologist::join('articles', 'psychologists.Username', '=', 'articles.Username')
      ->get(['articles.*', 'psychologists.Name']);

    //$articledata->Name=$psyname;

    return view('patienthome', compact('articledata'));
  }

  //course sectoion
  public function showCourse(Request $request)
  {
    $coursedata = Course::all();
    $temp = 0;

    if (Payment::where('PtUsername', $request->session()->get('user'))->exists()) {

      $subdata = Course::where('CourseID', $coursedata->CourseID)->get('*');
      $temp = 1;
      return view('patientcourses', compact('coursedata', 'subdata', 'temp'));
    } else {
      return view('patientcourses', compact('coursedata', 'temp'));
    }
  }

  public function openCourse($id, Request $request)
  {
    $coursedata = Course::find($id);

    $paymentdata = Payment::all();

    // $pCourseID=Payment::where('CourseID' , $data->CourseID)->first()
    //  ->where('PtUsername' , $request->session()->get('user'));

    if (Payment::where('CourseID', $coursedata->CourseID)
      ->where('PtUsername', $request->session()->get('user'))->exists()
    ) {



      $videodata = Coursevideo::all();

      return view('opencourse2', compact('coursedata', 'videodata'));
    } else {

      return view('makepayment', compact('coursedata'));
    }
  }

  public function makePayment(Request $request)
  {
    // return $request->input(); 
    $request->validate(
      [
        'CardNo' => 'required'

      ]
    );

    $carddata = Card::where('CardNo', $request->input('CardNo'))->first();
    //$userdata=Card::where('username',$request->session()->get('user'))->first();


    if (Card::where('CardNo', $request->input('CardNo'))->doesntExist()) {
      $request->session()->flash('CardnotExists', 'This Card number is not available,try different!');
      return redirect('patientcourses');
    } else {
      $username = Card::where('CardNo', $request->input('CardNo'))->first()->Username;
      if ($request->session()->get('user') !=  $username) {
        $request->session()->flash('wrongcardno', 'This Card number is Wrong,try different!');
        return redirect('patientcourses');
      } else if ($carddata->Balance < $request->input('Price')) {
        $request->session()->flash('balancenotsufficient', 'Your Card dont have enough balance,please reacharge!');
        return redirect('patientcourses');
      } else {

        $data = new Payment;
        $data->CourseID = $request->input('CourseID');
        $data->PtUsername = $request->session()->get('user');
        $data->CardNo = $request->input('CardNo');
        $data->Price = $request->input('Price');

        $data->Status = 'paid';

        $carddata->Balance = $carddata->Balance - $data->Price;

        $carddata->save();
        $data->save();

        $request->session()->flash('payment_success', 'Your Course Payment Successful');
        return redirect('patientcourses');
      }
    }
  }

  public function showPsyList()
  {
    $psydata = Psychologist::all();


    return view('patientPsyList', compact('psydata'));
  }

  public function viewSearchPsy()
  {
    return view('patientSearchPsy');
  }
  public function searchPsy(Request $request)
  {

    $searchdata = $request->input('searchPsy');

    $searchResult = Psychologist::where('Name', 'like', '%' . $searchdata . '%')
      ->orWhere('Work_place', 'like', '%' . $searchdata . '%')
      ->get('*');

    return view('searchPsyResult', compact('searchResult'));
  }

  public function viewPatientProfile(Request $request)
  {
    $userdata = Patient::where('Username', $request->session()->get('user'))
      ->get('*');
    $cardbalance = Card::where('Username', $request->session()->get('user'))
      ->first()->Balance;

    return view('patientprofile', compact('cardbalance', 'userdata'));
  }

  public function viewPatientProfileSetting(Request $request)
  {
    $userdata = Patient::where('Username', $request->session()->get('user'))
      ->get('*');

    return view('patientProfileSetting', compact('userdata'));
  }

  public function updateProfile(Request $request)
  {
    if (file_exists($request->file('ProfilePic'))) {
      $image = $request->file('ProfilePic');
      $imageName = time() . '.' . $image->extension();
      $image->move(public_path('images'), $imageName);

      $Name = $request->input('Name');
      $NID_no = $request->input('NID_no');
      $Birth_year = $request->input('Birth_year');
      $Division = $request->input('Division');
      $District = $request->input('District');
      $Email = $request->input('Email');
      $Contact = $request->input('Contact');
      $Password = Hash::make($request->input('Password'));

      $data = Patient::find($request->id);
      $data->Name = $Name;
      $data->NID_no = $NID_no;
      $data->Birth_year = $Birth_year;
      $data->Division = $Division;
      $data->District = $District;
      $data->Email = $Email;
      $data->Contact = $Contact;
      $data->Password = $Password;
      $data->ProfilePic = $imageName;

      $cid = Card::where('Username', $request->session()->get('user'))->first()->id;
      $cardData = Card::find($cid);
      $cardData->Name = $Name;
      $cardData->CardNo = $NID_no;

      $data->save();
      $cardData->save();

      return back()->with('Profile_Updated', 'Profile Updated successfully');
    } else {
      $Name = $request->input('Name');
      $NID_no = $request->input('NID_no');
      $Birth_year = $request->input('Birth_year');
      $Division = $request->input('Division');
      $District = $request->input('District');
      $Email = $request->input('Email');
      $Contact = $request->input('Contact');
      $Password = Hash::make($request->input('Password'));

      $data = Patient::find($request->id);
      $data->Name = $Name;
      $data->NID_no = $NID_no;
      $data->Birth_year = $Birth_year;
      $data->Division = $Division;
      $data->District = $District;
      $data->Email = $Email;
      $data->Contact = $Contact;
      $data->Password = $Password;
      //$data->ProfilePic = $imageName;

      $cid = Card::where('Username', $request->session()->get('user'))->first()->id;
      $cardData = Card::find($cid);
      $cardData->Name = $Name;
      $cardData->CardNo = $NID_no;

      $data->save();
      $cardData->save();

      return back()->with('Profile_Updated', 'Profile Updated successfully');
    }
  }

  public function showRechargeMyCard(Request $request)
  {
    $card_no = Card::where('Username', $request->session()->get('user'))->first()->CardNo;

    return view('rechargeMyCard', compact('card_no'));
  }

  public function rechargeMyCard(Request $request)
  {

    $request->validate(
      [
        'Card_no' => 'required',
        'Amount' => 'required'
      ]
    );

    $rechargeData = new Recharge;

    $Name = Patient::where('Username', $request->session()->get('user'))->first()->Name;
    $rechargeData->Name = $Name;
    $rechargeData->Username = $request->session()->get('user');
    $rechargeData->Card_no = $request->input('Card_no');
    $rechargeData->Amount = $request->input('Amount');
    $rechargeData->Status = '0';

    $rechargeData->save();

    return back()->with('recharge_requested', 'Recharge request has been sent successfully');
  }


  public function showFeedbacks()
  {
    $feedbackdata = Feedback::all();


    return view('patientfeedback', compact('feedbackdata'));
  }


  public function addFeedback(Request $request)
  {
    // return $request->input(); 
    $request->validate(
      [
        'Name' => 'required',
        'Email' => 'required',
        'Feedback' => 'required'


      ]
    );


    $data = new Feedback;
    $data->Name = $request->input('Name');
    $data->Status = 'Patient';
    $data->Username = $request->session()->get('user');
    $data->Email = $request->input('Email');
    $data->Feedback = $request->input('Feedback');
    $data->save();

    $request->session()->flash('feedback_given', 'Your feedback has been submitted');
    return redirect('patientfeedback');
  }

  public function showPatientInbox(Request $request)
  {

    //$Msgdata=Message::all();
    $picdata = Psychologist::join('messages', 'psychologists.Username', '=', 'messages.PsyUsername')
      ->get(['psychologists.ProfilePic']);

    if (Message::where('PtUsername', $request->session()->get('user'))->exists()) {
      $Msgdata = Psychologist::join('messages', 'psychologists.Username', '=', 'messages.PsyUsername')
        ->where('messages.PtUsername', $request->session()->get('user'))->orderBy('id', 'DESC')->get(['messages.*', 'psychologists.ProfilePic']);
      $Msgdata = $Msgdata->unique('PsyUsername');

      return view('patientMessages', compact('Msgdata', 'picdata'));
    } else {
      $Msgdata = '0';
      return view('patientMessages', compact('Msgdata', 'picdata'));
    }
  }
  public function openMessage($PsyUsername, Request $request)
  {
    //$Msgdata=Message::all();
    $temp = '1';
    $picdata = Psychologist::where('Username', '=', $PsyUsername)->get('*');
    $picdata2 = Patient::where('Username', '=', $request->session()->get('user'))->get('*');

    if (Message::where('PsyUsername', $PsyUsername)->exists()) {


      if (Message::where('PtUsername', $request->session()->get('user'))->exists()) {


        $Msgdata = Message::where('PtUsername', $request->session()->get('user'))
          ->where('messages.PsyUsername', $PsyUsername)
          ->get(['*']);
        return view('patientOpenMessage', compact('Msgdata', 'temp', 'picdata', 'picdata2'));
      } else {
        $temp = '0';
        return view('patientOpenMessage', compact('temp', 'picdata', 'picdata2'));
      }
    } else {
      // $Msgdata=Message::where('Username',$PsyUsername)->get('*');
      $temp = '0';
      return view('patientOpenMessage', compact('picdata', 'temp', 'picdata2'));
    }
  }

  public function sendMessage(Request $request)
  {
    if (file_exists($request->file('Files4'))) {
    } else {
      $request->validate(
        [

          'PtMessage' => 'required'
          // 'Files4'=> 'required | mimes:jpg,png,jpeg,mp4,m4v,pdf,xls,txt,docx,ppt'

        ]
      );
    }
    $data = new Message;
    $data->Read2 = '0';
    if (file_exists($request->file('Files4'))) {
      $data->Read2 = '1';
      $files = $request->file('Files4');
      $fileName = time() . '.' . $files->extension();
      $files->move(public_path('uploads'), $fileName);
      $data->Files = $fileName;
    }


    $PtMessage = $request->input('PtMessage');


    $data->PtUsername = $request->session()->get('user');
    $data->PtName = Patient::where('Username', $data->PtUsername)->first()->Name;
    $data->PsyUsername = $request->input('PsyUsername');
    $data->PsyName = Psychologist::where('Username', $data->PsyUsername)->first()->Name;
    $data->PtMessage = $PtMessage;
    $data->Read1 = '0';



    $data->save();

    return redirect('patientMessages');
  }
}

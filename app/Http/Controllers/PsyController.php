<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Course;
use App\Models\Psychologist;
use App\Models\Patient;
use App\Models\Coursevideo;
use App\Models\Feedback;
use App\Models\Message;
use Illuminate\Http\Request;

class PsyController extends Controller
{



    //Article section

    public function viewload()
    {
        return view('psyaddarticle');
    }
    public function addArticle(Request $request)
    {
      // return $request->input(); 
      $request->validate(
        [
           'Title'=>'required' ,
           'Articles'=>'required'
           //'Files'=> 'required | mimes:jpg,png,jpeg'
           
        ]
        );

        $image = $request->file('Files');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
       
      $data= new Article;
      $data->Username=$request->session()->get('user2');
      $data->Title=$request->input('Title');
      $data->Articles=$request->input('Articles');
      $data->Files=$imageName;
     
      $data->save();
      
      $request->session()->flash('status3','Article Added Successfully');
      return redirect('psyaddarticle');
    }

    public function showArticle()
    {
     $articledata=Article::all();

    return view('psyhome',compact('articledata'));
    }

    public function editArticle($id)
    {
     $data=Article::find($id);

    return view('editarticle',compact('data'));
    }

    public function updateArticle(Request $request)
    {
     
      $image = $request->file('Files');
      $imageName=time().'.'.$image->extension();
      $image->move(public_path('images'),$imageName);

      $Title=$request->input('Title');
      $Articles=$request->input('Articles');

      $data=Article::find($request->id);
      $data->Title=$Title;
      $data->Articles=$Articles;
      $data->Files=$imageName;
     
      $data->save();

      return back()->with('status4','Articles Updated successfully');

    }

    public function deleteArticle($id)
    {
     $data=Article::find($id);

     unlink(public_path('images').'/'.$data->Files);
     $data->delete();

     return back()->with('article_deleted','Article deleted successfully');
    }



    //Course section
    public function viewAddCourse()
    {
        return view('psyaddcourse');
    }
    

    public function addCourse(Request $request)
    {
      // return $request->input(); 
      $request->validate(
        [
           'CourseID'=>'required' ,
           'CourseTitle'=>'required',
           'CourseDescription'=>'required'
           //'Files'=> 'required | mimes:jpg,png,jpeg'
           
        ]
        );


        
         if(Course::where('CourseID' , $request->input('CourseID'))->exists())
         {
        $request->session()->flash('CourseIdExists','This Course Id already exists,try different!');
         return redirect('psyaddcourse');
        }

        else{
        $image = $request->file('Files2');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
       
        $data= new Course;
        $data->PsyUsername=$request->session()->get('user2');
        
        $data->PsyName = Psychologist::where('Username',$data->PsyUsername)->first()->Name;

        $data->CourseID=$request->input('CourseID');

        $data->CourseTitle=$request->input('CourseTitle');
        $data->CourseDescription=$request->input('CourseDescription');
        $data->Price=$request->input('Price');
        $data->Files=$imageName;
     
        $data->save();
      
      $request->session()->flash('Course_added','Course added Successfully');
      return redirect('psyaddcourse');
   }
    }

    public function showCourse()
    {
     $coursedata=Course::all();

    return view('psycourses',compact('coursedata'));
    }

    public function openCourse($id)
    {
     
      $data=Course::find($id);

      $videodata=Coursevideo::all();

      return view('opencourse',compact('data','videodata'));

    }

    public function viewAddVideo()
    {
        return view('addvideo');
    }
    
    public function addVideo(Request $request)
    {
      // return $request->input(); 
      $request->validate(
        [
           'CourseID'=>'required' ,
           'VideoTitle'=>'required'
           //'Files'=> 'required | mimes:jpg,png,jpeg'
           
        ]
        );


        
         if(Course::where('CourseID' , $request->input('CourseID'))->doesntExist())
         {
        $request->session()->flash('CourseIdnotExists','This Course Id is not available,try different!');
         return redirect('addvideo');
        }

        else{
        $video = $request->file('Files3');
        $videoName=time().'.'.$video->extension();
        $video->move(public_path('uploads'),$videoName);
       
        $data= new Coursevideo;
        //$data->PsyUsername=$request->session()->get('user2');
        
       // $data->PsyName = Psychologist::where('Username',$data->PsyUsername)->get(['Name']);

        $data->CourseID=$request->input('CourseID');
        $data->VideoTitle=$request->input('VideoTitle');
        $data->Files=$videoName;
     
        $data->save();
      
      $request->session()->flash('Video_added','Video added Successfully');
      return redirect('addvideo');
   }
    }

    public function editCourse($id)
    {
     $data=Course::find($id);

    return view('editcourse',compact('data'));
    }
    
    public function updateCourse(Request $request)
    {
      $image = $request->file('Files2');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

      $CourseID=$request->input('CourseID');
      $CourseTitle=$request->input('CourseTitle');
      $CourseDescription=$request->input('CourseDescription');
      $Price=$request->input('Price');

      $data=Course::find($request->id);
      $data->CourseID=$CourseID;
      $data->CourseTitle=$CourseTitle;
      $data->CourseDescription=$CourseDescription;
      $data->Price=$Price;
      $data->Files=$imageName;
     
      $data->save();

      return back()->with('Course_Updated','Course Updated successfully');

    }

    public function deleteCourse($id)
    {
     $data=Course::find($id);

     unlink(public_path('images').'/'.$data->Files);
     
     $data->delete();

     return back()->with('Course_deleted','Course deleted successfully');
    }

    public function deleteVideo($id)
    {
     $videodata=Coursevideo::find($id);

     unlink(public_path('uploads').'/'.$videodata->Files);
     $videodata->delete();

     return back()->with('video_deleted','Video deleted successfully');
    }

    public function viewPsyProfile(Request $request)
    {
        $userdata=Psychologist::where('Username',$request->session()->get('user2'))
        ->get('*');
        
        return view('psyprofile',compact('userdata'));
    }

    public function viewPsyProfileSetting(Request $request)
    {
        $userdata=Psychologist::where('Username',$request->session()->get('user2'))
        ->get('*');

        return view('psyProfileSetting',compact('userdata'));
    }

    public function updateProfile(Request $request)
    {
      $image = $request->file('ProfilePic');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

      $Name=$request->input('Name');
      $NID_no=$request->input('NID_no');
      $Position=$request->input('Position');
      $Work_place=$request->input('Work_place');
      $Division=$request->input('Division');
      $District=$request->input('District');
      $Email=$request->input('Email');
      $Contact=$request->input('Contact');
      $Password=$request->input('Password');

      $data=Psychologist::find($request->id);
      $data->Name=$Name;
      $data->NID_no=$NID_no;
      $data->Position=$Position;
      $data->Work_place=$Work_place;
      $data->Division=$Division;
      $data->District=$District;
      $data->Email=$Email;
      $data->Contact=$Contact;
      $data->Password=$Password;
      $data->ProfilePic=$imageName;

      $data->save();
     

      return back()->with('Profile_Updated','Profile Updated successfully');

    }


    
    public function showFeedbacks()
    {
     $feedbackdata=Feedback::all();
    

    return view('psyfeedback',compact('feedbackdata'));
    }


    public function addFeedback(Request $request)
    {
      // return $request->input(); 
      $request->validate(
        [
           'Name'=>'required' ,
           'Email'=>'required' ,
           'Feedback'=>'required'

           
        ]
        );
        
     
        $data= new Feedback;
        $data->Name=$request->input('Name');
        $data->Status='Psychologist';
        $data->Username=$request->session()->get('user2');
        $data->Email=$request->input('Email');
        $data->Feedback=$request->input('Feedback');
        $data->save();
      
      $request->session()->flash('feedback_given','Your feedback has been submitted');
      return redirect('psyfeedback');
}


public function showPsyInbox(Request $request)
    {
    
     //$Msgdata=Message::all();
     $picdata = Patient::join('messages', 'patients.Username', '=', 'messages.PtUsername')
                                 ->get(['patients.ProfilePic']);
 
    if(Message::where('PsyUsername' , $request->session()->get('user2'))->exists()){
      $Msgdata=Patient::join('messages', 'patients.Username', '=', 'messages.PtUsername')
      ->where('messages.PsyUsername' , $request->session()->get('user2'))->orderBy('id', 'DESC')->get(['messages.*','patients.ProfilePic']);
      $Msgdata=$Msgdata->unique('PtUsername');

      return view('psyMessages',compact('Msgdata','picdata'));
    }
    else
    {
      $Msgdata='0';
      return view('patientMessages',compact('Msgdata','picdata'));
    }
    }


    public function openMessage($PtUsername,Request $request)
    {
    //$Msgdata=Message::all();
    $temp='1';
    $picdata=Patient::where('Username' ,'=', $PtUsername)->get('*');
    $picdata2=Psychologist::where('Username' ,'=', $request->session()->get('user2'))->get('*');

    if(Message::where('PtUsername' , $PtUsername)->exists()){

      
    if(Message::where('PsyUsername' , $request->session()->get('user2'))->exists()){
      

      $Msgdata = Message::where('PsyUsername' , $request->session()->get('user2'))
                                  ->where('messages.PtUsername',$PtUsername)
                                 ->get(['*']);
      return view('psyOpenMessage',compact('Msgdata','temp','picdata','picdata2'));
  }
  else
  {
   $temp='0';
    return view('psyOpenMessage',compact('temp','picdata','picdata2'));
  }
}
else
  {
   // $Msgdata=Message::where('Username',$PsyUsername)->get('*');
   $temp='0';
    return view('psyOpenMessage',compact('picdata','temp','picdata2'));
  }
    
    
    }

    public function sendMessage(Request $request)
    {
      if(file_exists($request->file('Files5'))){}
          else{
      $request->validate(
        [
          
           'PsyMessage'=>'required'
          // 'Files4'=> 'required | mimes:jpg,png,jpeg,mp4,m4v,pdf,xls,txt,docx,ppt'
        
        ]
        );
      }
      
      //$files = $request->file('Files5');
       // $fileName=time().'.'.$files->extension();
      //  $files->move(public_path('images'),$fileName);

      $data=new Message;
      $data->Read2='0';
      if(file_exists($request->file('Files5'))){
        $data->Read2='1';
        $files = $request->file('Files5');
        $fileName=time().'.'.$files->extension();
        $files->move(public_path('uploads'),$fileName);
        $data->Files=$fileName;
      }

      $PsyMessage=$request->input('PsyMessage');

      
      $data->PsyUsername=$request->session()->get('user2');
      $data->PsyName = Psychologist::where('Username',$data->PsyUsername)->first()->Name;
      $data->PtUsername=$request->input('PtUsername');
      $data->PtName = Patient::where('Username',$data->PtUsername)->first()->Name;
      $data->PsyMessage=$PsyMessage;
      $data->Read1='1';
     
      $data->save();

      return redirect('psyMessages');

    }


}

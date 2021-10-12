<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Course;
use App\Models\Psychologist;
use App\Models\Coursevideo;
use App\Models\Feedback;

class IndexController extends Controller
{
    //
    
    public function viewload()
    {
        return view('index');
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
        $data->Status='Visitor';
        $data->Email=$request->input('Email');
        $data->Feedback=$request->input('Feedback');
        $data->save();
      // $request->session()->flash('feedback_given','Your feedback has been submitted');
       return redirect('index');
}
}

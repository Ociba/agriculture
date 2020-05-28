<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Feedback;

class FeedbackController extends Controller
{
    //
    public function displayFrontFeedbackPage(){
        return view('front.feedback-form');
    }
    public function createFeedback(Request $request){
        if($request->hasFile('image')) {

            $files = $request->file('image');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/assets/images/';
            $files->move($folderpath, $file_name);
        Feedback::create(array(
            'name'=>$request->name,
            'email'=>$request->email,
            'feedback'=>$request->feedback,
            'image'=>$file_name
        ));
        return Redirect()->back()->withErrors("Feedback has been sent successfully");
    }else{
        return Redirect()->back()->withErrors("Image has not been uploaded successfully"); 
    }
   }
   public function displayFeedback(){
    if(in_array('Can edit feedback', auth()->user()->getUserPermisions())){
       $display_feedback =Feedback::where('status','approve')->paginate('10');
       return view('admin.feedback', compact('display_feedback'));
    }else{
        return redirect('/404');
    }
   }
   public function approveFeedback($id){
       Feedback::where('id',$id)->update(array('status'=>'active'));
       return Redirect()->back()->withErrors("Feedback has been approved successfully");

   }
   public function deleteFeedback($id){
    Feedback::where('id',$id)->update(array('status'=>'deleted'));
    return Redirect()->back()->withErrors("Feedback has been deleted successfully");

}
}

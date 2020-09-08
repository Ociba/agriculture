<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Faq;

class FaqController extends Controller
{
    //
    public function faqForm(){
        if(in_array('Can add question', auth()->user()->getUserPermisions())){
        return view('admin.faq-form');
        }else{
            return redirect('/404');
        }
    }
    public function createFaqQuestion(Request $request){
        if(empty($request->question)){
            return Redirect()->back()->withInput()->withErrors("Question cannot be empty");
        }
        if(Faq::where('question', $request->question)->exists()){
            return Redirect()->back()->withErrors("Question already exists");
        }
        Faq::create(array(
            'user_id'=>Auth::user()->id,
            'question'=>$request->question
        ));
        return Redirect()->back()->with('message',"Question has been created successfully");
    }
    public function displayFaqQuestion(){
        if(in_array('Can view faq', auth()->user()->getUserPermisions())){
        $display_frequently_asked_questions =Faq::join('users','faqs.user_id','users.id')
        ->where('faqs.status','active')
        ->select('faqs.question','users.name','faqs.id','faqs.reply')
        ->get();
        return view('admin.questions',compact('display_frequently_asked_questions'));
        }else{
            return redirect('/404');
        }
    }
    public function editFaqQuestion($id){
        if(in_array('Can edit question', auth()->user()->getUserPermisions())){
        $get_faq_question =Faq::where('id',$id)->get();
            return view('admin.edit-faq-questions', compact('get_faq_question'));
        }else{
            return redirect('/404');
        }
        }
    public function replyFaqQuestion($id){
            if(in_array('Can reply question', auth()->user()->getUserPermisions())){
            $reply_faq_question =Faq::where('id',$id)->get();
                return view('admin.reply-question', compact('reply_faq_question'));
            }else{
                return redirect('/404');
            }
            }
    public function saveFaqReply($id,Request $request){
        Faq::where('id',$id)->update(array(
            'reply'=>$request->reply
        ));
        return Redirect()->back()->with('message',"You have Replied Question successfully");
    }
    public function updateFaqQuestions($id,Request $request){
        Faq::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'question'=>$request->question
        ));
        return Redirect()->back()->with('message',"Question has been updated successfully");
    }
    public function deleteQuestion($id){
        Faq::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Question has been deleted successfully");
    }
}

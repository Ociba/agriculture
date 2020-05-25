<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Faq;

class FaqController extends Controller
{
    //
    public function faqForm(){
        return view('admin.faq-form');
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
        $display_frequently_asked_questions =Faq::join('users','faqs.user_id','users.id')
        ->where('faqs.status','active')
        ->select('faqs.question','users.name','faqs.id')
        ->paginate('10');
        return view('admin.questions',compact('display_frequently_asked_questions'));
    }
    public function editFaqQuestion($id){
        $get_faq_question =Faq::where('id',$id);
            return view('admin.edit-faq-questions', compact('get_faq_question'));
        }
    public function updateFaqQuestions($id,Request $request){
        Faq::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'question'=>$request->question
        ));
        return Redirect()->back()->withErrors("Question has been updated successfully");
    }
    public function deleteQuestion($id){
        Faq::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Question has been deleted successfully");
    }
}

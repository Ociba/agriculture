<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contact;

class ContactController extends Controller
{
    //
    public function displayContact(){
        $display_contact_messages =Contact::where('status','active')->get();
        return view('front.contact', compact('display_contact_messages'));
    }
    public function createMessage(Request $request){
      Contact::create(array(
          'name'=>$request->name,
          'email'=>$request->email,
          'subject'=>$request->subject,
          'message'=>$request->message
      ));
      return Redirect()->back()->withErrors("You have sent your Message Successfully");
    }
    public function displayMessages(){
        if(in_array('Can view messages', auth()->user()->getUserPermisions())){
        $display_contact_messages =Contact::where('status','active')->paginate('10');
        return view('admin.messages', compact('display_contact_messages'));
        }else{
            return redirect('/404');
        }
    }
    public function deleteMessages($id){
        Contact::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("You have deleted  Message Successfully");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Reply;

class ReplyController extends Controller
{
    //
    // public function ReplyForm(){
    //     return view('admin.Reply-form');
    // }
    public function createReply(Request $request){
        if($request->hasFile('photo')) {

            $files = $request->file('photo');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/assets/images/';
            $files->move($folderpath, $file_name);
            Reply::create(array(
            'comment_id'=>$request->comment,
            'reply'=>$request->reply,
            'photo'=>$file_name
        ));
        return Redirect()->back()->withErrors("Reply details has been created successfully");
    }else{
        return Redirect()->back()->withErrors("Photo has not been created successfully");
    }
}
 public function displayReply(){
     $show_reply =Reply::join('comments','replies.comment_id','comments.id')
     ->where('replies.status','active')
     ->select('replies.reply','replies.photo','comments.comment','replies.id')
     ->get();
     return view('admin.reply',compact('show_reply'));
 }
 public function deleteReply($id){
     Reply::where('id',$id)->update(array('status'=>'deleted'));
     return Redirect()->back()->withErrors("Reply has been deleted successfully");
 }
}

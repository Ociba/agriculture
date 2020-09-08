<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;

class CommentController extends Controller
{
    //
    public function createComment(Request $request){
        if($request->hasFile('photo')) {

            $files = $request->file('photo');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/assets/images/';
            $files->move($folderpath, $file_name);
        Comment::create(array(
         'name'=>$request->name,
         'email'=>$request->email,
         'contact'=>$request->contact,
         'comment'=>$request->comment,
         'photo'=>$file_name
        ));
        return Redirect()->back()->withErrors("You have sent your comment successfully");
    }else{
        return Redirect()->back()->withErrors("It seems your photo was not successfully sent");
    }
}
     public function displayComments(){
        if(in_array('Can view comments', auth()->user()->getUserPermisions())){
         $display_comments =Comment::where('status','approve')
         ->orwhere('status','active')
         ->get();
         return view('admin.comments', compact('display_comments'));
        }else{
            return redirect('/404');
        }
     }
     public function approveComment($id, Request $request){
         Comment::where('id',$id)->update(array('status'=>'active'));
         return Redirect()->back()->with("message","Comment has been approved successfully");
     }
     public function replyCommentForm($id){
        $reply_comment=Comment::where('id',$id)->get();
        return view('admin.reply-comment',compact('reply_comment'));
    }
    public function saveReply($id,Request $request){
        Comment::where('id',$id)->update(array(
            'reply'=>$request->reply
        ));
        return redirect()->back()->with('message',"Your have Reply Comment successfully");
    }
     public function deleteComment($id){
         Comment::where('id',$id)->update(array('status'=>'deleted'));
         return Redirect()->back()->withErrors("Comment has been deleted successfully");
     }
}

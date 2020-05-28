<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\News;

class NewsController extends Controller
{
    //
    public function newsForm(){
        if(in_array('Can add news', auth()->user()->getUserPermisions())){
        return view('admin.news-form');
       }else{
            return redirect('/404');
    }
    }
    public function createNews(Request $request){
        if(empty($request->subject)){
            return Redirect()->back()->withInput()->withErrors("Subject cannot be empty");
        }
        if(News::where('subject', $request->subject)->exists()){
            return Redirect()->back()->withErrors("Subject already exists");
        }
        if(empty($request->image)){
            return Redirect()->back()->withInput()->withErrors("Image cannot be empty");
        }
        if($request->hasFile('image')) {

            $files = $request->file('image');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/assets/images/';
            $files->move($folderpath, $file_name);
            News::create(array(
            'user_id'=>Auth::user()->id,
            'subject'=>$request->subject,
            'image'=>$file_name
        ));
        return Redirect()->back()->withErrors("News details has been created successfully");
    }else{
        return Redirect()->back()->withErrors("Image has not been created successfully");
    }
}
 public function displayNews(){
    if(in_array('Can view news', auth()->user()->getUserPermisions())){
     $show_news =News::join('users','news.user_id','users.id')
     ->where('news.status','active')
     ->select('news.subject','news.image','users.name','news.id')
     ->paginate('10');
     return view('admin.news',compact('show_news'));
    }else{
        return redirect('/404');
    }
 }
 public function editNews($id){
    if(in_array('Can edit news', auth()->user()->getUserPermisions())){
     $get_news =News::where('id',$id)->get();
     return view('admin.edit-news-form', compact('get_news'));
    }else{
        return redirect('/404');
    }
 }
 public function updateNews($id,Request $request){
     News::where('id',$id)->update(array(
        'user_id'=>Auth::user()->id,
        'subject'=>$request->subject,
        'image'=>$request->image
     ));
     return Redirect()->back()->with('message',"News has been updated successfully");
 }
 public function deleteNews($id){
     News::where('id',$id)->update(array('status'=>'deleted'));
     return Redirect()->back()->withErrors("News has been deleted successfully");
 }

}

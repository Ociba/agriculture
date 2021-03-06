<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\RecentNews;

class RecentNewsController extends Controller
{
    //
    public function RecentNewsForm(){
        if(in_array('Can add recent news', auth()->user()->getUserPermisions())){
        return view('admin.recent-news-form');
        }else{
            return redirect('/404');
        }
    }
    public function createRecentNews(Request $request){
        if($request->hasFile('image')) {

            $files = $request->file('image');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/assets/images/';
            $files->move($folderpath, $file_name);
            RecentNews::create(array(
            'user_id'=>Auth::user()->id,
            'title'=>$request->title,
            'image'=>$file_name
        ));
        return Redirect()->back()->withErrors("Recent News details has been created successfully");
    }else{
        return Redirect()->back()->withErrors("Image has not been created successfully");
    }
}
 public function displayRecentNews(){
    if(in_array('Can view recent news', auth()->user()->getUserPermisions())){
     $show_recent_news =RecentNews::join('users','recent_news.user_id','users.id')
     ->where('recent_news.status','active')
     ->select('recent_news.title','recent_news.image','users.name','recent_news.id')
     ->get();
     return view('admin.recent-news',compact('show_recent_news'));
    }else{
        return redirect('/404');
    }
 }
 public function editRecentNews($id){
    if(in_array('Can edit recent news', auth()->user()->getUserPermisions())){
     $get_recent_news =RecentNews::where('id',$id)->get();
     return view('admin.edit-recent-news-form', compact('get_recent_news'));
    }else{
        return redirect('/404');
    }
 }
 public function updateRecentNews($id,Request $request){
    RecentNews::where('id',$id)->update(array(
        'user_id'=>Auth::user()->id,
        'title'=>$request->title,
        'image'=>$request->image
     ));
     return Redirect()->back()->with('message',"News has been updated successfully");
 }
 public function deleteRecentNews($id){
    RecentNews::where('id',$id)->update(array('status'=>'deleted'));
     return Redirect()->back()->withErrors("News has been deleted successfully");
 }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Gallery;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function galleryForm(){
        if(in_array('Can add gallery', auth()->user()->getUserPermisions())){
        return view('admin.gallery-form');
        }else{
            return redirect('/404');
        }
    }
    public function createGallery(Request $request){
        if(empty($request->title)){
            return Redirect()->back()->withInput()->withErrors("Title cannot be empty");
        }
        if(Gallery::where('title', $request->title)->exists()){
            return Redirect()->back()->withErrors("Title already exists");
        }
        if(empty($request->message)){
            return Redirect()->back()->withInput()->withErrors("Message cannot be empty");
        }
        if(Gallery::where('message', $request->message)->exists()){
            return Redirect()->back()->withErrors("Message already exists");
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
            Gallery::create(array(
            'user_id'=>Auth::user()->id,
            'title'=>$request->title,
            'message'=>$request->message,
            'image'=>$file_name
        ));
        return Redirect()->back()->with('message',"Gallery details has been created successfully");
    }else{
        return Redirect()->back()->withErrors("Image has not been created successfully");
    }
}
 public function displayGallery(){
    if(in_array('Can view gallery', auth()->user()->getUserPermisions())){
     $show_gallery =Gallery::join('users','galleries.user_id','users.id')
     ->where('galleries.status','active')
     ->select('galleries.title','galleries.message','galleries.image','users.name','galleries.id')
     ->paginate('10');
     return view('admin.gallery',compact('show_gallery'));
    }else{
        return redirect('/404');
    }
 }
 public function editGallery($id){
    if(in_array('Can edit gallery', auth()->user()->getUserPermisions())){
     $get_galleries =Gallery::where('id',$id)->get();
     return view('admin.edit-gallery', compact('get_galleries'));
    }else{
        return redirect('/404');
    }
 }
 public function updateGallery($id,Request $request){
     Gallery::where('id',$id)->update(array(
        'user_id'=>Auth::user()->id,
        'title'=>$request->title,
        'message'=>$request->message,
        'image'=>$request->image
     ));
     return Redirect()->back()->with('message',"Gallery has been updated successfully");
 }
 public function deleteGallery($id){
     Gallery::where('id',$id)->update(array('status'=>'deleted'));
     return Redirect()->back()->withErrors("Gallery has been deleted successfully");
 }
}

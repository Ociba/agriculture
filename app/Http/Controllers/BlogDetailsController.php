<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BlogDetails;

class BlogDetailsController extends Controller
{
    //
    public function addBlogDetailsForm(){
        if(in_array('Can add blog detail', auth()->user()->getUserPermisions())){
        return view('admin.blog-detail-form');
        }else{
            return redirect('/404');
        }   
    }
    public function createBlogDetail(Request $request){
        if(empty($request->title)){
            return Redirect()->back()->withInput()->withErrors("Title cannot be empty");
        }
        if(empty($request->statement)){
            return Redirect()->back()->withInput()->withErrors("Statement cannot be empty");
        }
        if(empty($request->facebook)){
            return Redirect()->back()->withInput()->withErrors("Facebook cannot be empty");
        }
        if(BlogDetails::where('facebook',$request->facebook)->exists()){
            return Redirect()->back()->withErrors("Facebook Account already exists");
        }
        if(empty($request->twitter)){
            return Redirect()->back()->withInput()->withErrors("Twitter cannot be empty");
        }
        if(BlogDetails::where('twitter',$request->twitter)->exists()){
            return Redirect()->back()->withErrors("Twitter Account already exists");
        }
        if(empty($request->google)){
            return Redirect()->back()->withInput()->withErrors("Gmail google cannot be empty");
        }
        if(BlogDetails::where('google',$request->google)->exists()){
            return Redirect()->back()->withErrors("Gmail google account already exist");
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
        BlogDetails::create(array(
         'user_id'=>Auth::user()->id,
         'title'=>$request->title,
         'statement'=>$request->statement,
         'facebook'=>$request->facebook,
         'twitter'=>$request->twitter,
         'google'=>$request->google,
         'image'=>$file_name
        ));
        return Redirect()->back()->with('message',"You have successfully created Blog Details");
    }else{
        return Redirect()->back()->withErrors("Seems the image was not Uploaded Successfully");
    }
}
    public function displayBlogDetail(){
        $display_blog_detail =BlogDetails::join('users','blog_details.user_id','users.id')
        ->where('blog_details.status','active')
        ->select('users.name','blog_details.title','blog_details.statement','blog_details.image',
                 'blog_details.facebook','blog_details.google','blog_details.twitter','blog_details.image','blog_details.created_at')
        ->paginate('10');
        return view('admin.blog-detail', compact('display_blog_detail'));
    }
    public function editBlogDetailForm($id){
        if(in_array('display-edit-blog', auth()->user()->getUserPermisions())){
        $get_blog_detail =BlogDetails::where('id',$id)->get();
        return view('admin.edit-blog-detail',compact('get_blog_detail'));
        }else{
            return redirect('/404');
        }
    }
    public function updateBlogDetails($id, Request $request){
        BlogDetails::where('id', $id)->update(array(
            'user_id'=>Auth::user()->id,
            'title'=>$request->title,
            'statement'=>$request->statement,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'google'=>$request->google,
            'image'=>$request->image
        ));
        return Redirect()->back()->with('message',"Blog Details has been updated Successfully");
    }
    public function deleteBlogDetail($id){
        BlogDetails::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Blog Details has been deleted Successfully");
    }
}

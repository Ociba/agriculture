<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Profiles;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    protected function addProfileForm(){
        return view('admin.profile-form');
    }
    protected function showChangeProfileForm()
    {
        return view('admin.edit-profile-form');
    }
    protected function createEditedPicture(Request $request)
    {
        //
        if(empty($request->image)){
            return Redirect()->back()->withInput()->withErrors("Image cannot be empty");
        }
        if(Profiles::where('image', $request->image)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Image already exists, please enter a new image');

        }

        $profile_picture_name=$request->image;
        $original_name=$profile_picture_name->getClientOriginalName();
        $request->file('image')->move('images/profile_pictures/',$original_name);
        if(Profiles::where('user_id',Auth::user()->id)->exists()){
        Profiles::where('user_id',Auth::user()->id)->update(array(
        'image'=>$original_name,
        'user_id'=>Auth::user()->id
        ));
    }
    else{
        Profiles::create(array(
            'image'=>$original_name,
            'user_id'=>Auth::user()->id,
            ));
    }
       return Redirect()->back()->withErrors(['Profile picture has been updated successfully','']);
    }
    protected function createProfile(Request $request){
        if(empty($request->image)){
            return Redirect()->back()->withInput()->withErrors("Image cannot be empty");
        }
        if(Profiles::where('user_id',Auth::user()->id ,$request->user_id)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('You profile image already exists.');

        }
        $files = $request->file('image');;
        $file_name = $files->getClientOriginalName();
        $files->move('images/profile_pictures/',$file_name);
        
        // $extension = $files->getClientOriginalExtension();
        // $file_name = $files->getClientOriginalName();
        // $folderpath = protected_path().'/images/profile_pictures/';
        // $files->move($folderpath, $file_name);
        Profiles::create(array(
            'user_id'=>Auth::user()->id,
            'image'=>$file_name
        ));
        return redirect()->back()->with('message',"Profile Details has been Saved successfully");
    }
    protected function displayProfile(){
        $show_all_profiles =Profiles::join('users','profiles.user_id','users.id')
        ->where('user_id',Auth::user()->id)
        ->select('users.name','profiles.image','profiles.id')
        ->get();
        return view('admin.profile-table',compact('show_all_profiles'));
    }
    protected function updateProfileInformation($id, Request $request){
       
        Profiles::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'image'=>$request->image
        ));
        return Redirect()->back()->with('message',"Profile details has been updated Succesfully");
    }
    protected function deleteProfile($id){
        Profiles::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->with('message',"Profile details has been deleted Succesfully");
    }
}

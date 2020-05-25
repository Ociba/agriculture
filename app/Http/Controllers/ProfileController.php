<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Profiles;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function addProfileForm(){
        return view('admin.profile-form');
    }
    public function showChangeProfileForm()
    {
        return view('admin.edit-profile-form');
    }
    public function createEditedPicture(Request $request)
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
    public function createProfile(Request $request){
        if(empty($request->image)){
            return Redirect()->back()->withInput()->withErrors("Image cannot be empty");
        }
        if(Profiles::where('user_id',Auth::user()->id ,$request->user_id)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('You profile image already exists.');

        }
        $files = $request->file('image');
        $extension = $files->getClientOriginalExtension();
        $file_name = $files->getClientOriginalName();
        $folderpath = public_path().'/images/profile_pictures/';
        $files->move($folderpath, $file_name);
        Profiles::create(array(
            'user_id'=>Auth::user()->id,
            'image'=>$file_name
        ));
        return redirect()->back()->with('message',"Profile Details has been Saved successfully");
    }
    public function displayProfile(){
        $show_all_profiles =Profiles::join('users','profiles.user_id','users.id')
        ->where('user_id',Auth::user()->id)
        ->select('users.name','profiles.image','profiles.id')
        ->paginate('10');
        return view('admin.profile-table',compact('show_all_profiles'));
    }
    public function searchProfile(Request $request){
        $show_all_profiles =Profiles::join('users','profiles.user_id','users.id')
        ->where('profiles.status','active')
        ->where('users.name',$request->name)
        ->orwhere('profiles.image',$request->name)
        ->select('users.name','profiles.image','profiles.id')
        ->paginate('10');
        return view('admin.profile-table',compact('show_all_profiles'));
    }
    public function updateProfileInformation($id, Request $request){
       
        Profiles::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'image'=>$request->image
        ));
        return Redirect()->back()->with('message',"Profile details has been updated Succesfully");
    }
    public function deleteProfile($id){
        Profiles::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->with('message',"Profile details has been deleted Succesfully");
    }
}

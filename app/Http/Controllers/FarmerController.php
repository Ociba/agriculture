<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Farmer;
use App\Profiles;
use App\User;

class FarmerController extends Controller
{
    //
    public function farmerForm(){
        if(in_array('Can add farmers', auth()->user()->getUserPermisions())){
        $select_username =User::select('name','id')->get();
        $select_profile_image =Profiles::select('image','id')->get();
        return view('admin.farmers-form', compact('select_username','select_profile_image'));
        }else{
            return redirect('/404');
        }
    }
    public function createFarmer(Request $request){
        // // if(empty($request->user_id)){
        // //     return Redirect()->back()->withErrors("Users name can not be empty");
        // // }
        // if(Farmer::where('user_id', $request->user_id)->exists()){
        //     return Redirect()->back()->withErrors("User name already exists");
        // }
        // // if(empty($request->profile_id)){
        // //     return Redirect()->back()->withErrors("Image can not be empty");
        // // }
        // if(Farmer::where('profile_id', $request->profile_id)->exists()){
        //     return Redirect()->back()->withErrors("Image already exists");
        // }
        Farmer::create(array(
        'user_id'=>$request->name,
        'profile_id'=>$request->image 
    )); 
    return Redirect()->back()->with('message',"Farmers details created Successfully"); 
     }
     public function displayFarmer(){
        if(in_array('Can view farms', auth()->user()->getUserPermisions())){
         $show_farmer_detail =Farmer::join('users','famers.user_id','users.id')
         ->join('profiles','famers.profile_id','profiles.id','famers.id')
         ->where('famers.status','active')
         ->select('users.name','profiles.image','famers.id')
         ->paginate('10');
         return view('admin.farmers',compact('show_farmer_detail'));
        }else{
            return redirect('/404');
         }
     }
     public function editFarmerForm($id){
        if(in_array('Can edit farmers', auth()->user()->getUserPermisions())){
         $get_farmer =Farmer::where('id',$id)->get();
         return view('admin.edit-farmer', compact('get_farmer'));
        }else{
            return redirect('/404');
        }
     }
     public function updateFarmerDetail($id, Request $request){
         Farmer::where('id',$id)->update(array(
            'user_id'=>$request->name,
            'profile_id'=>$request->image   
         ));
         return Redirect()->back()->with('message',"Farmers Details has been updated successfully");
     }
     public function deleteFarmer($id){
         Farmer::where('id',$id)->update(array('status'=>'deleted'));
         return Redirect()->back()->withErrors("Farmers Details has been deleted successfully");
     }
}

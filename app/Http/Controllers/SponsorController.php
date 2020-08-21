<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Sponsor;

class SponsorController extends Controller
{
    //
    public function SponsorForm(){
        if(in_array('Can add sponsor', auth()->user()->getUserPermisions())){
        return view('admin.sponsor-form');
        }else{
            return redirect('/404');
        }
    }
    public function createSponsor(Request $request){
        if($request->hasFile('image')) {

            $files = $request->file('image');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/assets/images/';
            $files->move($folderpath, $file_name);
            Sponsor::create(array(
            'user_id'=>Auth::user()->id,
            'sponsor'=>$request->sponsor,
            'image'=>$file_name
        ));
        return Redirect()->back()->withErrors("Sponsor details has been created successfully");
    }else{
        return Redirect()->back()->withErrors("Image has not been created successfully");
    }
}
 public function displaySponsor(){
    if(in_array('Can view sponsors', auth()->user()->getUserPermisions())){
     $show_sponsors =Sponsor::join('users','sponsors.user_id','users.id')
     ->where('sponsors.status','active')
     ->select('sponsors.sponsor','sponsors.image','users.name','sponsors.id')
     ->get();
     return view('admin.sponsor',compact('show_sponsors'));
    }else{
        return redirect('/404');
    }
 }
 public function editSponsor($id){
    if(in_array('Can edit sponsor', auth()->user()->getUserPermisions())){
     $get_sponsors =Sponsor::where('id',$id)->get();
     return view('admin.edit-sponsors-form', compact('get_sponsors'));
    }else{
        return redirect('/404');
    }
 }
 public function updateSponsor($id,Request $request){
    Sponsor::where('id',$id)->update(array(
        'user_id'=>Auth::user()->id,
        'sponsor'=>$request->sponsor,
        'image'=>$request->image
     ));
     return Redirect()->back()->with('message',"Sponsor has been updated successfully");
 }
 public function deleteSponsor($id){
    Sponsor::where('id',$id)->update(array('status'=>'deleted'));
     return Redirect()->back()->withErrors("Sponsor has been deleted successfully");
 }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Feature;

class FeaturesController extends Controller
{
    //
    public function featureForm(){
        return view('admin.feature-form');
    }
    public function createFeature(Request $request){
        if(empty($request->heading)){
            return Redirect()->back()->withInput()->withErrors("Heading cannot be empty");
        }
        if(Feature::where('heading', $request->heading)->exists()){
            return Redirect()->back()->withErrors("Heading already exists");
        }
        if(empty($request->statement)){
            return Redirect()->back()->withInput()->withErrors("Statement cannot be empty");
        }
        if(Feature::where('statement', $request->statement)->exists()){
            return Redirect()->back()->withErrors("Statement already exists");
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
        Feature::create(array(
            'user_id'=>Auth::user()->id,
            'heading'=>$request->heading,
            'statement'=>$request->statement,
            'image'=>$file_name
        ));
        return Redirect()->back()->with('message',"Feature details has been created successfully");
    }else{
        return Redirect()->back()->withErrors("Image has not been created successfully");
    }
}
    public function displayFeature(){
        $show_feature =Feature::join('users','features.user_id','users.id')
        ->where('features.status','active')
        ->select('users.name','features.id','features.heading','features.statement','features.image')
        ->paginate('10');
        return view('admin.features',compact('show_feature'));
    }
    public function editFeaturesForm($id){
        $get_features=Feature::where('id',$id)->get();
        return view('admin.edit-feature', compact('get_features'));
    }
    public function updateFeature($id,Request $request){
        Feature::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'heading'=>$request->heading,
            'statement'=>$request->statement,
            'image'=>$request->image
        ));
        return Redirect()->back()->withErrors("Feature has been updated successfully");
    }
    public function deleteFeature($id){
        Feature::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Feature has been deleted successfully");
    }
}

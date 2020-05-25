<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ServiceFeature;
use App\Services;

class ServicesController extends Controller
{
    //
    public function displayServices(){
        $features_services =ServiceFeature::join('users','service_features.user_id','users.id')
        ->where('service_features.status','active')
        ->select('service_features.title','service_features.statement','service_features.image','service_features.id','users.name')
        ->get();
        $we_do_services =Services::join('users','services.user_id','users.id')
        ->where('services.status','active')
        ->select('services.subject','services.statement','services.image','services.id','users.name')
        ->get();
        return view('front.services', compact('features_services','we_do_services'));
    }
    public function featureServiceForm(){
        return view('admin.feature-service-form');
    }
    public function displayFeatureService(){
        $features_services =ServiceFeature::join('users','service_features.user_id','users.id')
        ->where('service_features.status','active')
        ->select('service_features.title','service_features.statement','service_features.image','service_features.id','users.name')
        ->paginate('10');
        return view('admin.service', compact('features_services'));
    }
    public function weDoServiceForm(){
        return view('admin.we-do-service-form');
    }
    public function createFeatureService(Request $request){
        if($request->hasFile('image')) {

            $files = $request->file('image');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/assets/images/';
            $files->move($folderpath, $file_name);
            ServiceFeature::create(array(
            'user_id'=>Auth::user()->id,
            'title'=>$request->title,
            'statement'=>$request->statement,
            'image'=>$file_name
        ));
        return Redirect()->back()->withErrors("Service Feature details has been created successfully");
    }else{
        return Redirect()->back()->withErrors("Image has not been created successfully");
    }
    }
    public function editFeatureForm($id){
        $get_service_feature =ServiceFeature::where('id',$id)->get();
        return view('admin.edit-service-feature',compact('get_service_feature'));
    }
    public function updateServiceFeature($id, Request $request){
        ServiceFeature::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'title'=>$request->title,
            'statement'=>$request->statement,
            'image'=>$request->image
        ));
        return Redirect()->back()->withErrors("Service has  been updated successfully");
    }
    public function deleteServiceFeature($id){
        ServiceFeature::where('id',$id)->update(array("status"=>'deleted'));
        return Redirect()->back()->withErrors("Service has  been deleted successfully");
    }
    //we do
    public function displayWedoService(){
        $we_do_services =Services::join('users','services.user_id','users.id')
        ->where('services.status','active')
        ->select('services.subject','services.statement','services.image','services.id','users.name')
        ->paginate('10');
        return view('admin.service-we-do', compact('we_do_services'));
    }
    public function createWedoService(Request $request){
        if($request->hasFile('image')) {

            $files = $request->file('image');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/assets/images/';
            $files->move($folderpath, $file_name);
            Services::create(array(
            'user_id'=>Auth::user()->id,
            'subject'=>$request->subject,
            'statement'=>$request->statement,
            'image'=>$file_name
        ));
        return Redirect()->back()->withErrors("Service Feature details has been created successfully");
    }else{
        return Redirect()->back()->withErrors("Image has not been created successfully");
    }
    }
    public function editServiceForm($id){
        $get_service=Services::where('id',$id)->get();
        return view('admin.edit-service-we-do',compact('get_service'));
    }
    public function updateService($id, Request $request){
        Services::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'subject'=>$request->subject,
            'statement'=>$request->statement,
            'image'=>$request->image
        ));
        return Redirect()->back()->withErrors("Service has been updated successfully");
    }
    public function deleteService($id){
        Services::where('id',$id)->update(array("status"=>'deleted'));
        return Redirect()->back()->withErrors("Service has been deleted successfully");
    }
}

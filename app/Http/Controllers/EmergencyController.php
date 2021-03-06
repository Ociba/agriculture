<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Emergency;
use App\Product;
use App\Role;
use App\SignsSymptoms;
use App\District;
use App\County;
use App\Subcounty;
use App\Http\Resources\Emergency as EmergencyResource;

class EmergencyController extends Controller
{
    //
    public function addEmergency(){
        $pick_product =Product::select('product','id')->get();
        $pick_role =Role::select('role','id')->get();
        $pick_district =District::select('district','id')->get();
        $pick_county =County::select('county','id')->get();
        $pick_village =Subcounty::select('subcounty','id')->get();
        return view('admin.emergency-form', compact('pick_product','pick_role','pick_district',
                                                   'pick_county','pick_village'));
    }
    public function displayEmergency(){
        //$display_all_emergencies_reported = EmergencyResource::collection(Emergency::where('users.id',auth()->user()->id)
        $display_all_emergencies_reported = Emergency::join('users','emergencies.user_id','users.id')
        ->join('roles','emergencies.role_id','roles.id')
        ->join('districts','emergencies.district_id','districts.id')
        ->join('counties','emergencies.county_id','counties.id')
        ->join('subcounties','emergencies.subcounty_id','subcounties.id')
        ->join('products','emergencies.product_id','products.id')
        ->where('emergencies.status','active')
        ->where('users.id',auth()->user()->id)
        ->select('roles.role','districts.district','counties.county','subcounties.subcounty','products.product','emergencies.*')
        ->orderBy('emergencies.created_at','desc')->get();
        return view('admin.emergency-table', compact('display_all_emergencies_reported'));
    }
    public function displayAllEmergency(){
      //$display_all_emergencies_reported = EmergencyResource::collection(Emergency::where('users.id',auth()->user()->id)
      $display_all_emergencies_reported = Emergency::join('users','emergencies.user_id','users.id')
      ->join('roles','emergencies.role_id','roles.id')
      ->join('districts','emergencies.district_id','districts.id')
      ->join('counties','emergencies.county_id','counties.id')
      ->join('subcounties','emergencies.subcounty_id','subcounties.id')
      ->join('products','emergencies.product_id','products.id')
      ->where('emergencies.status','active')
      ->select('roles.role','districts.district','counties.county','subcounties.subcounty','products.product','emergencies.*')
      ->orderBy('emergencies.created_at','desc')->get();
      return view('admin.all-emergency-table', compact('display_all_emergencies_reported'));
  }
    public function editEmergencyForm($id){
        $edit_emergency=Emergency::where('id',$id)->get();
        $pick_product =Product::select('product','id')->get();
        $pick_role =Role::select('role','id')->get();
        $pick_district =District::select('district','id')->get();
        $pick_county =County::select('county','id')->get();
        $pick_village =Subcounty::select('subcounty','id')->get();
        return view('admin.edit-emergency-form', compact('pick_product','pick_role','pick_district',
                                                         'pick_county','pick_village','edit_emergency'));
    }
    public function createEmergency(Request $request){
        // if(empty($request->image)){
        //     return Redirect()->back()->withInput()->withErrors("image cannot be empty");
        // }
        if(empty($request->affected_number)){
            return Redirect()->back()->withInput()->withErrors("Affected number cannot be empty");
        }
        if(District::where(\strtolower('district'), strtolower($request->district))->exists()){
            $get_district= District::where("district", $request->district)->value('id');
          }
          else{
           District::create(array('district'=>$request->district,
                   'user_id'=>Auth::user()->id
           ));
           
          } 
          if(County::where(\strtolower('county'), strtolower($request->county))->exists()){
           $get_county= County::where("county", $request->county)->value('id');
         }
         else{
           County::create(array('county'=>$request->county
          ));
          
         }
         if(Subcounty::where(\strtolower('subcounty'), strtolower($request->subcounty))->exists()){
           $get_village= Subcounty::where("subcounty", $request->subcounty)->value('id');
         }
         else{
           Subcounty::create(array('subcounty'=>$request->subcounty
          ));
          
         }
         if(Product::where(\strtolower('product'), strtolower($request->product))->exists()){
            $get_district= Product::where("product", $request->product)->value('id');
          }
          else{
           Product::create(array('product'=>$request->product,
                   'user_id'=>Auth::user()->id
           ));
           
          } 
         if(Role::where(\strtolower('role'), strtolower($request->role))->exists()){
           $get_village= Role::where("role", $request->role)->value('id');
         }
         else{
           Role::create(array('role'=>$request->role,
                                'user_id'=>Auth::user()->id
          ));
          
         }
          $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
          $get_county_id= County::where(\strtolower("county"), strtolower($request->county))->value('id');
          $get_village_id= Subcounty::where(\strtolower("subcounty"), strtolower($request->subcounty))->value('id');
          $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
          $get_role_id= Role::where(\strtolower("role"), strtolower($request->role))->value('id');
        if($request->hasFile('image')) {

            $files = $request->file('image');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/items/images/';
            $files->move($folderpath, $file_name);
        
            Emergency::create(array(
                'user_id'=>Auth::user()->id,
                'product_id'=>$get_product_id,
                'role_id' =>$get_role_id,
                'problem'=>$request->problem,
                'district_id' =>$get_district_id,
                'county_id' =>$get_county_id,
                'subcounty_id' =>$get_village_id,
                'affected_number' =>$request->affected_number,
                'image' =>$file_name
                
            ));
            return Redirect()->back()->with('message',"You have created your item(s) Successfully");
        }
        else {
            return Redirect()->back()->withErrors("Error, seems like the file wasn't uploaded");
        }
    }
    public function updateEmergency(Request $request,$id){
        $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
          $get_county_id= County::where(\strtolower("county"), strtolower($request->county))->value('id');
          $get_village_id= Subcounty::where(\strtolower("subcounty"), strtolower($request->subcounty))->value('id');
          $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
          $get_role_id= Role::where(\strtolower("role"), strtolower($request->role))->value('id');
        if($request->hasFile('image')) {
            $files = $request->file('image');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/items/images/';
            $files->move($folderpath, $file_name);

            Emergency::where('id',$id)->update(array(
                'user_id'=>Auth::user()->id,
                'product_id'=>$get_product_id,
                'role_id' =>$get_role_id,
                'problem'=>$request->problem,
                'district_id' =>$get_district_id,
                'county_id' =>$get_county_id,
                'subcounty_id' =>$get_village_id,
                'affected_number' =>$request->affected_number,
                'image' =>$file_name
        ));
        return Redirect()->back()->with('message',"You Item(s) details updated successfully");
     }else{
     return Redirect()->back()->withInput()->withErrors("Image has not been created successfully");
     }
    }
    public function deleteEmergency($id){
        Emergency::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors('Emergency has been deleted successfully');
    }
}

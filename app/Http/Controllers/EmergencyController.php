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
use App\Village;
use App\Http\Resources\Emergency as EmergencyResource;

class EmergencyController extends Controller
{
    //
    public function addEmergency(){
        $pick_product =Product::select('product','id')->get();
        $pick_role =Role::select('role','id')->get();
        $pick_signs =SignsSymptoms::select('signs_symptoms','id')->get();
        $pick_district =District::select('district','id')->get();
        $pick_county =County::select('county','id')->get();
        $pick_village =Village::select('village','id')->get();
        return view('admin.emergency-form', compact('pick_product','pick_role','pick_signs','pick_district',
                                                   'pick_county','pick_village'));
    }
    public function displayEmergency(){
        $display_all_emergencies_reported = EmergencyResource::collection(Emergency::paginate(10));
        //return $display_all_emergencies_reported;
        return view('admin.emergency-table', compact('display_all_emergencies_reported'));
    }
    public function editEmergencyForm($id){
        $edit_emergency=Emergency::where('id',$id)->get();
        $pick_product =Product::select('product','id')->get();
        $pick_role =Role::select('role','id')->get();
        $pick_signs =SignsSymptoms::select('signs_symptoms','id')->get();
        $pick_district =District::select('district','id')->get();
        $pick_county =County::select('county','id')->get();
        $pick_village =Village::select('village','id')->get();
        return view('admin.edit-emergency-form', compact('pick_product','pick_role','pick_signs','pick_district',
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
         if(Village::where(\strtolower('village'), strtolower($request->village))->exists()){
           $get_village= Village::where("village", $request->village)->value('id');
         }
         else{
           Village::create(array('village'=>$request->village
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
          if(SignsSymptoms::where(\strtolower('signs_symptoms'), strtolower($request->signs_symptoms))->exists()){
           $get_sign= SignsSymptoms::where("signs_symptoms", $request->signs_symptoms)->value('id');
         }
         else{
            SignsSymptoms::create(array('signs_symptoms'=>$request->signs_symptoms,
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
          $get_village_id= Village::where(\strtolower("village"), strtolower($request->village))->value('id');
          $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
          $get_role_id= Role::where(\strtolower("role"), strtolower($request->role))->value('id');
          $get_sign_id= SignsSymptoms::where(\strtolower("signs_symptoms"), strtolower($request->signs_symptoms))->value('id');
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
                'signs_symptom_id'=>$get_sign_id,
                'district_id' =>$get_district_id,
                'county_id' =>$get_county_id,
                'village_id' =>$get_village_id,
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
          $get_village_id= Village::where(\strtolower("village"), strtolower($request->village))->value('id');
          $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
          $get_role_id= Role::where(\strtolower("role"), strtolower($request->role))->value('id');
          $get_sign_id= SignsSymptoms::where(\strtolower("signs_symptoms"), strtolower($request->signs_symptoms))->value('id');
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
                'signs_symptom_id'=>$get_sign_id,
                'district_id' =>$get_district_id,
                'county_id' =>$get_county_id,
                'village_id' =>$get_village_id,
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

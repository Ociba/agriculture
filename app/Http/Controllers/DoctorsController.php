<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Doctors;
use App\District;
use App\Role;

class DoctorsController extends Controller
{
    //
    public function addDoctorsForm(){
        $get_district =District::select('district','id')->get();
        $get_role     =Role::select('role','id')->get();
        return view('admin.doctors-form', compact('get_district','get_role'));
    }
    public function createDoctor(Request $request){
        if(District::where(\strtolower('district'), strtolower($request->district))->exists()){
            $get_district= District::where("district", $request->district)->value('id');
          }
          else{
           District::create(array('district'=>$request->district
           ));
           
          } 
          if(Doctors::where(\strtolower('phone_number_1'), strtolower($request->phone_number_1))->exists()){
              return redirect()->back()->withErrors("Phone number Already exists");
          }
          if(Doctors::where(\strtolower('names'), strtolower($request->names))->exists()){
            return redirect()->back()->withErrors("Name already exists");
        }
          $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
          $get_role_id= Role::where(\strtolower("role"), strtolower($request->role))->value('id');
        Doctors::create(array(
            'user_id'=>Auth::user()->id,
            'role_id'=>$get_role_id,
            'district_id'=>$get_district_id,
            'names'=>$request->names,
            'phone_number_1'=>$request->phone_number_1,
            'phone_number_2'=>$request->phone_number_2
        ));
        return redirect()->back()->with('message',"You have added {$request->names} as {$request->role} for {$request->district} district successfully");
    }
    public function displayDoctor(){
        $display_doctors_details =Doctors::join('users','doctors.user_id','users.id')
        ->join('districts','doctors.district_id','districts.id')
        ->join('roles','doctors.role_id','roles.id')
        ->where('doctors.status','active')
        ->where('doctors.role_id', 5)
        ->select('doctors.names','doctors.id','roles.role','doctors.phone_number_1','doctors.phone_number_2','districts.district','users.name')
        ->get();
        return view('admin.doctors-table', compact('display_doctors_details'));
    }
    public function displayAgricOfficers(){
        $display_doctors_details =Doctors::join('users','doctors.user_id','users.id')
        ->join('districts','doctors.district_id','districts.id')
        ->join('roles','doctors.role_id','roles.id')
        ->where('doctors.status','active')
        ->where('doctors.role_id', 6)
        ->select('doctors.names','doctors.id','roles.role','doctors.phone_number_1','doctors.phone_number_2','districts.district','users.name')
        ->get();
        return view('admin.agric-officers', compact('display_doctors_details'));
    }
    public function displayFisheryOfficers(){
        $display_doctors_details =Doctors::join('users','doctors.user_id','users.id')
        ->join('districts','doctors.district_id','districts.id')
        ->join('roles','doctors.role_id','roles.id')
        ->where('doctors.status','active')
        ->where('doctors.role_id', 7)
        ->select('doctors.names','doctors.id','roles.role','doctors.phone_number_1','doctors.phone_number_2','districts.district','users.name')
        ->get();
        return view('admin.fisheries-officers', compact('display_doctors_details'));
    }
    public function editDoctor($id){
        $edit_doctor =Doctors::where('id',$id)->get();
        $get_district =District::select('district','id')->get();
        return view('admin.edit-doctor', compact('edit_doctor','get_district'));
    }
    public function updateDoctorsInformation(Request $request,$id){
        if(District::where(\strtolower('district'), strtolower($request->district))->exists()){
            $get_district= District::where("district", $request->district)->value('id');
          }
          else{
           District::create(array('district'=>$request->district,
                   'user_id'=>Auth::user()->id
           ));
           
          } 
          $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
        Doctors::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'district_id'=>$get_district_id,
            'role_id' =>$request->role,
            'names'=>$request->names,
            'phone_number_1'=>$request->phone_number_1,
            'phone_number_2'=>$request->phone_number_2
        ));
        return redirect()->back()->with('message',"Doctors details has been updated successfully");
    }
    public function deleteDoctor($id){
        Doctors::where('id',$id)->update(array(
            'status'=>'deleted'
        ));
        return redirect()->back()->with('message',"Doctors details has been deleted successfully");
    }
}

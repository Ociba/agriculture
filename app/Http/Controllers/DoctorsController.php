<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Doctors;
use App\District;

class DoctorsController extends Controller
{
    //
    public function addDoctorsForm(){
        $get_district =District::select('district','id')->get();
        return view('admin.doctors-form', compact('get_district'));
    }
    public function createDoctor(Request $request){
        if(District::where(\strtolower('district'), strtolower($request->district))->exists()){
            $get_district= District::where("district", $request->district)->value('id');
          }
          else{
           District::create(array('district'=>$request->district,
                   'user_id'=>Auth::user()->id
           ));
           
          } 
          $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
        Doctors::create(array(
            'user_id'=>Auth::user()->id,
            'district_id'=>$get_district_id,
            'names'=>$request->names,
            'phone_number_1'=>$request->phone_number_1,
            'phone_number_2'=>$request->phone_number_2
        ));
        return redirect()->back()->with('message',"You have successfully created doctor");
    }
    public function displayDoctor(){
        $display_doctors_details =Doctors::join('users','doctors.user_id','users.id')
        ->join('districts','doctors.district_id','districts.id')
        ->where('doctors.status','active')
        ->select('doctors.names','doctors.id','doctors.phone_number_1','doctors.phone_number_2','districts.district','users.name')
        ->paginate('10');
        return view('admin.doctors-table', compact('display_doctors_details'));
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

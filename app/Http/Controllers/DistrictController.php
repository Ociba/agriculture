<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\District;

class DistrictController extends Controller
{
    //
    public function addDistrictForm(){
        return view('admin.add-district-form');
    }
    public function editDistrictForm($id){
        $get_district =District::where('id',$id)->get();
        return view('admin.edit-district-form', compact('get_district'));
    }
    public function createDistrict(Request $request){
        if(empty($request->district)){
            return Redirect()->back()->withInput()->withErrors("District cannot be empty");
        }
        if(District::where('district', $request->district)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('District already exists.');

        }
        District::create(array(
            'user_id'=>Auth::user()->id,
            'district'=>$request->district
        ));
        return Redirect()->back()->with('message',"District has been added Successfully");
    }
    public function displayDistrict(){
        $show_district =District::join('users','districts.user_id','users.id')
        ->select('users.name','districts.district','districts.id')
        ->orderBy('districts.created_at','desc')
        ->paginate('10');
        return view('admin.district-table',compact('show_district'));
    }
    public function searchDistrict(Request $request){
        $show_district =District::join('users','districts.user_id','users.id')
        ->where('districts.district',$request->district)
        ->orwhere('users.name',$request->district)
        ->select('users.name','districts.district','districts.id')
        ->paginate('10');
        return view('admin.district-table',compact('show_district'));
    }
    public function updateDistrictInformation($id, Request $request){
        District::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'district'=>$request->district
        ));
        return Redirect()->back()->withErrors("District Details has been updated successfully");
    }
    public function deleteDistrict($id){
        District::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("District has been deleted successfully");
    } 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\District;

class DistrictController extends Controller
{
    //
    public function addDistrictForm(){
        if(in_array('Can add district', auth()->user()->getUserPermisions())){
        return view('admin.add-district-form');
        }else{
            return redirect('/404');
        }
    }
    public function editDistrictForm($id){
        if(in_array('Can edit district', auth()->user()->getUserPermisions())){
        $get_district =District::where('id',$id)->get();
        return view('admin.edit-district-form', compact('get_district'));
        }else{
            return redirect('/404');
        }
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
            'district'=>$request->district
        ));
        return Redirect()->back()->with('message',"District has been added Successfully");
    }
    public function displayDistrict(){
        if(in_array('Can view districts', auth()->user()->getUserPermisions())){
        $show_district =District::orderBy('districts.created_at','desc')
        ->get();
        return view('admin.district-table',compact('show_district'));
        }else{
            return redirect('/404');
        }
    }
    public function updateDistrictInformation($id, Request $request){
        District::where('id',$id)->update(array(
            'district'=>$request->district
        ));
        return Redirect()->back()->with('message',"District Details has been updated successfully");
    }
    public function deleteDistrict($id){
        District::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("District has been deleted successfully");
    } 
}

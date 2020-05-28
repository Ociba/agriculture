<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\County;

class CountyController extends Controller
{
    //
    public function addCountyForm(){
        if(in_array('Can add county', auth()->user()->getUserPermisions())){
        return view('admin.add-county-form');
        }else{
            return redirect('/404');
        }
    }
    public function editCountyForm($id){
        if(in_array('Can edit county', auth()->user()->getUserPermisions())){
        $edit_county =County::where('id',$id)->get();
        return view('admin.edit-county-form',compact('edit_county'));
        }else{
            return redirect('/404');
        }
    }
    public function createCounty(Request $request){
        if(empty($request->county)){
            return Redirect()->back()->withInput()->withErrors("County cannot be empty");
        }
        if(County::where('county', $request->county)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('County already exists, please enter a new county');

        }
        County::create(array(
            'county'=>$request->county
        ));
        return Redirect()->back()->with('message',"County has been added Successfully");
    }
    public function displayCounty(){
        if(in_array('Can view counties', auth()->user()->getUserPermisions())){
        $show_county =County::orderby('created_at','desc')->paginate('10');
        return view('admin.county-table',compact('show_county'));
        }else{
            return redirect('/404');
        }
    }
    public function searchCounty(Request $request){
        $show_county =County::where('counties.county',$request->county)
        ->paginate('10');
        return view('admin.county-table',compact('show_county'));
    }
    public function updateCountyInformation($id, Request $request){
        County::where('id',$id)->update(array(
            'county'=>$request->county
        ));
        return Redirect()->back()->with('message',"County Details has been updated successfully");
    }
    public function deleteCounty($id){
        County::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("County has been deleted successfully");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Year;

class YearController extends Controller
{
    //
    public function addYearForm(){
        return view('admin.year-form');
    }
    public function editYearForm($id){
        $edit_years =Year::where('id',$id)->get();
        return view('admin.edit-year-form',compact('edit_years'));
    }
    public function createYear(Request $request){
        Year::create(array(
            'user_id'=>Auth::user()->id,
            'year'=>$request->year
        ));
        return Redirect()->back()->with('message',"Year has been created Succesfully");
    }
    public function displayYear(){
        $show_all_years =Year::join('users','years.user_id','users.id')
        ->where('years.status','active')
        ->select('users.name','years.year')
        ->get();
        return view('admin.year-table',compact('show_all_years'));
    }
    public function updateYearInformation($id, Request $request){
        Year::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'year'=>$request->year
        ));
        return Redirect()->back()->with('message',"Year details has been updated Succesfully");
    }
    public function deleteYear($id){
        Year::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Year details has been deleted Succesfully");
    }
}

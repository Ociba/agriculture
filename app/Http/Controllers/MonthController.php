<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Month;

class MonthController extends Controller
{
    //
    public function addMonthForm(){
        return view('admin.month-form');
    }
    public function editMonthForm($id){
        $edit_months =Month::where('id',$id)->get();
        return view('admin.edit-month-form',compact('edit_months'));
    }
    public function createMonth(Request $request){
        if(empty($request->month)){
            return Redirect()->back()->withInput()->withErrors("Month cannot be empty");
        }
        if(Month::where('month', $request->month)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Month already exists.');

        }
        Month::create(array(
            'user_id'=>Auth::user()->id,
            'month'=>$request->month
        ));
        return Redirect()->back()->with('message',"Month details has been Saved Succesfully");
    }
    public function displayMonth(){
        $show_all_months =Month::join('users','months.user_id','users.id')
        ->where('months.status','active')
        ->select('users.name','months.month','months.id')
        ->paginate('10');
        return view('admin.months-table',compact('show_all_months'));
    }
    public function searchMonth(Request $request){
        $show_all_months =Month::join('users','months.user_id','users.id')
        ->where('months.status','active')
        ->where('months.month',$request->month)
        ->orwhere('users.name',$request->month)
        ->select('users.name','months.month','months.id')
        ->paginate('10');
        return view('admin.months-table',compact('show_all_months'));
    }
    public function updateMonthInformation($id, Request $request){
        Month::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'month'=>$request->month
        ));
        return Redirect()->back()->withErrors("Month details has been updated Succesfully");
    }
    public function deleteMonth($id){
        Month::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Month details has been deleted Succesfully");
    }
}

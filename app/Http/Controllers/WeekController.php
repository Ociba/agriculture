<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Week;

class WeekController extends Controller
{
    //
    public function addWeekForm(){
        return view('admin.Week-form');
    }
    public function editWeekForm($id){
        $edit_weeks =Week::where('id',$id)->get();
        return view('admin.edit-week-form',compact('edit_weeks'));
    }
    public function createWeek(Request $request){
     if(empty($request->week)){
        return Redirect()->back()->withInput()->withErrors("Week cannot be empty");
    }
    if(Week::where('week', $request->week)->exists())
    {
        return Redirect()->back()->withInput()->withErrors('Week already exists.');

    }

        Week::create(array(
            'user_id'=>Auth::user()->id,
            'week'=>$request->week
        ));
        return Redirect()->back()->with('message',"Weeks details has been Saved Succesfully");
    }
    public function displayWeek(){
        $show_all_weeks =Week::join('users','weeks.user_id','users.id')
        ->where('weeks.status','active')
        ->select('users.name','weeks.week','weeks.id')
        ->paginate('10');
        return view('admin.week-table',compact('show_all_weeks'));
    }
    public function searchWeek(Request $request){
        $show_all_weeks =Week::join('users','weeks.user_id','users.id')
        ->where('weeks.status','active')
        ->where('weeks.week',$request->week)
        ->orwhere('users.name',$request->week)
        ->select('users.name','weeks.week','weeks.id')
        ->paginate('10');
        return view('admin.week-table',compact('show_all_weeks'));
    }
    public function updateWeekInformation($id, Request $request){
        Week::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'week'=>$request->week
        ));
        return Redirect()->back()->withErrors("Week details has been updated Succesfully");
    }
    public function deleteWeek($id){
        Week::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Week details has been deleted Succesfully");
    }
}

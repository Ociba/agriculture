<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Day;

class DaysController extends Controller
{
    //
    public function addDayForm(){
        if(in_array('Can add day', auth()->user()->getUserPermisions())){
        return view('admin.day-form');
        }else{
            return redirect('/404');
        }
    }
    public function editDayForm($id){
        if(in_array('Can edit day', auth()->user()->getUserPermisions())){
        $edit_day =Day::where('id',$id)->get();
        return view('admin.edit-day-form',compact('edit_day'));
        }else{
            return redirect('/404');
        }
    }
    public function createDay(Request $request){
        if(empty($request->day)){
            return Redirect()->back()->withInput()->withErrors("Day cannot be empty");
        }
        
        if(Day::where('day' ,$request->day)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Day already exists.');

        }
        Day::create(array(
            'user_id'=>Auth::user()->id,
            'day'=>$request->day
        ));
        return Redirect()->back()->with('message',"Day details has been updated Succesfully");
    }
    public function displayDay(){
        if(in_array('Can view Days', auth()->user()->getUserPermisions())){
        $show_all_days =Day::join('users','days.user_id','users.id')
        ->where('days.status','active')
        ->select('users.name','days.day','days.id')
        ->paginate('10');
        return view('admin.day-table',compact('show_all_days'));
        }else{
            return redirect('/404');
        }
    }
    public function searchDay(Request $request){
        $show_all_days =Day::join('users','days.user_id','users.id')
        ->where('days.status','active')
        ->where('days.day',$request->day)
        ->where('users.name',$request->day)
        ->select('users.name','days.day','days.id')
        ->paginate('10');
        return view('admin.day-table',compact('show_all_days'));
    }
    public function updateDayInformation($id, Request $request){
        Day::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'day'=>$request->day
        ));
        return Redirect()->back()->with('message',"Day details has been updated Succesfully");
    }
    public function deleteDay($id){
        Day::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Day details has been deleted Succesfully");
    }
}

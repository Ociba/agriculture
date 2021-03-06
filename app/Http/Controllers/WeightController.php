<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Weight;

class WeightController extends Controller
{
    //
    public function addWeightForm(){
        if(in_array('Can add weight', auth()->user()->getUserPermisions())){
        return view('admin.weight-form');
        }else{
            return redirect('/404');
        }
    }
    public function editWeightForm($id){
        if(in_array('Can edit weight', auth()->user()->getUserPermisions())){
        $edit_weights =Weight::where('id',$id)->get();
        return view('admin.edit-weight-form',compact('edit_weights'));
        }else{
            return redirect('/404');
        }
    }
    public function createWeight(Request $request){
        if(empty($request->weight)){
            return Redirect()->back()->withInput()->withErrors("Weight cannot be empty");
        }
        if(Weight::where('weight', $request->weight)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Weight already exists.');

        }
        Weight::create(array(
            'user_id'=>Auth::user()->id,
            'weight'=>$request->weight
        ));
        return Redirect()->back()->with('message',"Weight details has been Saved Succesfully");
    }
    public function displayWeight(){
        $show_all_weights =Weight::join('users','weights.user_id','users.id')
        ->where('weights.status','active')
        ->select('users.name','weights.weight','weights.id')
        ->get();
        return view('admin.weight-table',compact('show_all_weights'));
    }
    public function updateWeightInformation($id, Request $request){
        Weight::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'weight'=>$request->weight
        ));
        return Redirect()->back()->with('message',"Weight details has been updated Succesfully");
    }
    public function deleteWeight($id){
        Weight::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Weight details has been deleted Succesfully");
    }
}

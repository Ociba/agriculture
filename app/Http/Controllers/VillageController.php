<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Village;

class VillageController extends Controller
{
    //
    public function addVillageForm(){
        if(in_array('Can add village', auth()->user()->getUserPermisions())){
        return view('admin.village-form');
        }else{
            return redirect('/404');
        }
    }
    public function editVillageForm($id){
        if(in_array('Can edit village', auth()->user()->getUserPermisions())){
        $edit_villages =Village::where('id',$id)->get();
        return view('admin.edit-village-form',compact('edit_villages'));
        }else{
            return redirect('/404');
        }
    }
    public function createVillage(Request $request){
        if(empty($request->village)){
            return Redirect()->back()->withInput()->withErrors("Village cannot be empty");
        }
        if(Village::where('village', $request->village)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Village already exists, please enter a new village');

        }
        Village::create(array(
            'village'=>$request->village
        ));
        return Redirect()->back()->with('message',"You have Added Subcounty(s) Successfully");
    }
    public function displayVillage(){
        if(in_array('Can view sub-counties', auth()->user()->getUserPermisions())){
        $show_all_villages =Village::orderBy('created_at','desc')->paginate('10');
        return view('admin.village-table',compact('show_all_villages'));
        }else{
            return redirect('/404');
        }
    }
    public function searchVillage(Request $request){
        $show_all_villages =Village::where('villages.village',$request->village)
        ->paginate('10');
        return view('admin.village-table',compact('show_all_villages'));
    }
    public function updateVillageInformation($id, Request $request){
        Village::where('id',$id)->update(array(
            'village'=>$request->village
        ));
        return Redirect()->back()->with('message',"Village details has been updated Succesfully");
    }
    public function deleteVillage($id){
        Village::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Village details has been deleted Succesfully");
    }
}

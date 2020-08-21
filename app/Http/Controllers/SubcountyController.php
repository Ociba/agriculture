<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Subcounty;

class SubcountyController extends Controller
{
    //
    public function addSubcountyForm(){
        if(in_array('Can add subcounty', auth()->user()->getUserPermisions())){
        return view('admin.subcounty-form');
        }else{
            return redirect('/404');
        }
    }
    public function editSubcountyForm($id){
        if(in_array('Can edit subcounty', auth()->user()->getUserPermisions())){
        $edit_subcounty =Subcounty::where('id',$id)->get();
        return view('admin.edit-subcounty-form',compact('edit_subcounty'));
        }else{
            return redirect('/404');
        }
    }
    public function createSubcounty(Request $request){
        if(empty($request->subcounty)){
            return Redirect()->back()->withInput()->withErrors("Subcounty cannot be empty");
        }
        if(Subcounty::where('subcounty', $request->subcounty)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Subcounty already exists, please enter a new subcounty');

        }
        Subcounty::create(array(
            'subcounty'=>$request->subcounty
        ));
        return Redirect()->back()->with('message',"You have Added Subcounty(s) Successfully");
    }
    public function displaySubcounty(){
        if(in_array('Can view sub-counties', auth()->user()->getUserPermisions())){
        $show_all_subcounties =Subcounty::orderBy('created_at','desc')->get();
        return view('admin.subcounty-table',compact('show_all_subcounties'));
        }else{
            return redirect('/404');
        }
    }
    public function updateSubcountyInformation($id, Request $request){
        Subcounty::where('id',$id)->update(array(
            'subcounty'=>$request->subcounty
        ));
        return Redirect()->back()->with('message',"Subcounty details has been updated Succesfully");
    }
    public function deleteSubcounty($id){
        Subcounty::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Subcounty details has been deleted Succesfully");
    }
}

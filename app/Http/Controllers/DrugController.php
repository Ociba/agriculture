<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Drug;

class DrugController extends Controller
{
    //
    public function addDrugForm(){
        if(in_array('Can add drug', auth()->user()->getUserPermisions())){
        return view('admin.add-drug-form');
        }else{
            return redirect('/404');
        }
    }
    public function createDrug(Request $request){
        if(empty($request->drug_name)){
            return Redirect()->back()->withInput()->withErrors("Drug name cannot be empty");
        }
        if(Drug::where('drug_name', $request->drug_name)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Drug name already exists.');

        }
        Drug::create(array(
           'user_id'=>Auth::user()->id,
           'drug_name'=>$request->drug_name
        ));
        return Redirect()->back()->with('message',"Drug details have Saved Successfully");
    }
    public function displayDrugs(){
        $display_drugs =Drug::join('users','drugs.user_id','users.id')
        ->where('drugs.status','active')
        ->select('drugs.drug_name','users.name','drugs.id')
        ->get();
        return view('admin.drug-table',compact('display_drugs'));
    }
    public function editDrugForm($id){
        if(in_array('Can edit drug', auth()->user()->getUserPermisions())){
        $edit_drug =Drug::where('id',$id)->get();
        return view('admin.edit-drug-form', compact('edit_drug'));
        }else{
            return redirect('/404');
        }
    }
    public function updateDrugInformation($id, Request $request){
        Drug::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'drug_name'=>$request->drug_name
        ));
        return Redirect()->back()->with('message',"Drugs details has been updated Successfully");
    }
    public function deleteDrug($id){
        Drug::where('id', $id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Drug has been deleted successfully");
    }
}

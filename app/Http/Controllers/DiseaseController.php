<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Disease;

class DiseaseController extends Controller
{
    //
    public function addDiseaseForm(){
        if(in_array('Can add disease', auth()->user()->getUserPermisions())){
        return view('admin.add-disease-form');
        }else{
            return redirect('/404');
        }
    }
    public function editDiseaseForm($id){
        if(in_array('Can edit disease', auth()->user()->getUserPermisions())){
        $edit_disease =Disease::where('id',$id)->get();
        return view('admin.edit-disease-form', compact('edit_disease'));
        }else{
            return redirect('/404');
        }
    }
    public function createDisease(Request $request){
        if(empty($request->disease_name)){
            return Redirect()->back()->withInput()->withErrors("Disease cannot be empty");
        }
        if(Disease::where('disease_name', $request->disease_name)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Disease already exists.');

        }
        Disease::create(array(
            'user_id'=>Auth::user()->id,
            'disease_name'=>$request->disease_name
        ));
        return Redirect()->back()->with('message',"You have Save Disease Successfully");
    }
    public function displayDisease(){
        $display_diseases =Disease::join('users','diseases.user_id','users.id')
        ->where('diseases.status','active')
        ->select('users.name','diseases.disease_name','diseases.id')
        ->get();
        return view('admin.disease-table', compact('display_diseases'));
    }
    public function updateDiseaseInformation($id, Request $request){
        Disease::where('id', $id)->update(array(
            'user_id'=>Auth::user()->id,
            'disease_name'=>$request->disease_name
        ));
        return Redirect()->back()->with('message',"Disease has been updated successfully");
    }
    public function deleteDisease($id){
        Disease::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Disease has been deleted successfully");
    }
}

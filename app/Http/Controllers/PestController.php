<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Pest;

class PestController extends Controller
{
    //
    public function addPestForm(){
        return view('admin.add-pest-form');
    }
    public function editPestForm($id){
        $edit_pest =Pest::where('id',$id)->get();
        return view('admin.edit-pest-form', compact('edit_pest'));
    }
    public function createPest(Request $request){
        if(empty($request->pest)){
            return Redirect()->back()->withInput()->withErrors("Pest cannot be empty");
        }
        if(Pest::where('pest', $request->pest)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Pest already exists.');

        }
        Pest::create(array(
            'user_id'=>Auth::user()->id,
            'pest'=>$request->pest
        ));
        return Redirect()->back()->with('message',"You have Save Pest Successfully");
    }
    public function displayPest(){
        $display_pests =Pest::join('users','pests.user_id','users.id')
        ->where('pests.status','active')
        ->select('users.name','pests.pest','pests.id')
        ->paginate('10');
        return view('admin.pest-table', compact('display_pests'));
    }
    public function searchPest(Request $request){
        $display_pests =Pest::join('users','pests.user_id','users.id')
        ->where('pests.status','active')
        ->where('pests.pest',$request->pest)
        ->orwhere('users.name',$request->pest)
        ->select('users.name','pests.pest','pests.id')
        ->paginate('10');
        return view('admin.pest-table', compact('display_pests'));
    }
    public function updatePestInformation($id, Request $request){
        Pest::where('id', $id)->update(array(
            'user_id'=>Auth::user()->id,
            'pest'=>$request->pest
        ));
        return Redirect()->back()->withErrors("Pest has been updated successfully");
    }
    public function deletePest($id){
        Pest::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Pest has been deleted successfully");
    }
}

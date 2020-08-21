<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Breed;
use App\Product;

class BreedController extends Controller
{
    //
    public function addBreedForm(){
        if(in_array('Can add breed', auth()->user()->getUserPermisions())){
        return view('admin.add-breed-form');
        }else{
            return redirect('/404');
        }
    }
    public function editBreedForm($id){
        if(in_array('edit-product-form', auth()->user()->getUserPermisions())){
        $edit_breed =Breed::where('id',$id)->get();
        return view('admin.edit-breed-form', compact('edit_breed'));
        }else{
            return redirect('/404');
        }
    }
    public function createBreed(Request $request){
        if(empty($request->breed)){
            return Redirect()->back()->withInput()->withErrors("Breed cannot be empty");
        }
        if(Breed::where('breed', $request->breed)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Breed already exists, please enter a new breed');

        }
        Breed::create(array(
            'user_id'=>Auth::user()->id,
            'breed'=>$request->breed
        ));
        return Redirect()->back()->with('message',"You have successflly your details");
    }
    public function displayBreed(){
        $display_breeds =Breed::join('users','breeds.user_id','users.id')
        ->where('breeds.status','active')
        ->select('breeds.breed','breeds.id','users.name')
        ->get();
        return view('admin.breed-table', compact('display_breeds'));
    }
    public function updateBreedInformation($id,Request $request){
        Breed::where('id', $id)->update(array(
            'user_id'=>Auth::user()->id,
            'breed'=>$request->breed
        ));
        return redirect()->back()->with('message','Breed information has been updated successfully');
    }
    public function deleteBreed($id){
        Breed::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Breed has been deleted Successfully");
    }
}

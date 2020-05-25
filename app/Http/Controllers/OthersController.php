<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Others;

class OthersController extends Controller
{
    //
    public function otherForm(){
        return view('admin.others-form');
    }
    public function createOthers(Request $request){
        if(empty($request->title)){
            return Redirect()->back()->withInput()->withErrors("Title cannot be empty");
        }
        if(Others::where('title', $request->title)->exists()){
            return Redirect()->back()->withErrors("Title already exists");
        }
        if(empty($request->number)){
            return Redirect()->back()->withInput()->withErrors("Number cannot be empty");
        }
        if(empty($request->image)){
            return Redirect()->back()->withInput()->withErrors("Image cannot be empty");
        }
        Others::create(array(
            'user_id'=>Auth::user()->id,
            'title'=>$request->title,
            'number'=>$request->number
        ));
        return Redirect()->back()->withErrors("Others has been created successfully");
    }
    public function displayOthers(){
        $display_others =Others::join('users','others.user_id','users.id')
        ->where('others.status','active')
        ->select('others.title','others.number','users.name','others.id')
        ->paginate('10');
        return view('admin.others',compact('display_others'));
    }
    public function editOthers($id){
        $get_others =Others::where('id',$id)->get();
            return view('admin.edit-others-form', compact('get_others'));
        }
    public function updateOthers($id,Request $request){
        Others::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'title'=>$request->title,
            'number'=>$request->number
        ));
        return Redirect()->back()->withErrors("Others has been updated successfully");
    }
    public function deleteOthers($id){
        Others::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Others has been deleted successfully");
    }
}

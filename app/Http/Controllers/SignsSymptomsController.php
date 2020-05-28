<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\SignsSymptoms;

class SignsSymptomsController extends Controller
{
    //
    public function addSignsSymptomsForm(){
        if(in_array('Can add signs and symptoms', auth()->user()->getUserPermisions())){
        return view('admin.signssymptoms-form');
        }else{
            return redirect('/404');
        }
    }
    public function editSignsSymptomsForm($id){
        if(in_array('Can edit sign and symptom action', auth()->user()->getUserPermisions())){
        $edit_signssymptomss =SignsSymptoms::where('id',$id)->get();
        return view('admin.edit-signssymptoms-form',compact('edit_signssymptomss'));
        }else{
            return redirect('/404');
        }
    }
    public function createSignsSymptoms(Request $request){
        if(empty($request->signs_symptoms)){
            return Redirect()->back()->withInput()->withErrors("Signs and Symptoms cannot be empty");
        }
        if(SignsSymptoms::where('signs_symptoms', $request->signs_symptoms)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Sign and Symptom already exists.');

        }
        SignsSymptoms::create(array(
            'user_id'=>Auth::user()->id,
            'signs_symptoms'=>$request->signs_symptoms
        ));
        return Redirect()->back()->with('message',"SignsSymptoms details has been saved Succesfully");
    }
    public function displaySignsSymptoms(){
        $signs_symptoms =SignsSymptoms::join('users','signs_symptoms.user_id','users.id')
        ->where('signs_symptoms.status','active')
        ->select('users.name','signs_symptoms.signs_symptoms','signs_symptoms.id')
        ->paginate('10');
        return view('admin.signssymptoms-table',compact('signs_symptoms'));
    }
    public function searchSignsSymptoms(Request $request){
        $signs_symptoms =SignsSymptoms::join('users','signs_symptoms.user_id','users.id')
        ->where('signs_symptoms.status','active')
        ->where('signs_symptoms.signs_symptoms',$request->signs_symptoms)
        ->orwhere('users.name',$request->SignsSymptoms)
        ->select('users.name','signs_symptoms.signs_symptoms','signs_symptoms.id')
        ->paginate('10');
        return view('admin.signssymptoms-table',compact('signs_symptoms'));
    }
    public function updateSignsSymptomsInformation($id, Request $request){
        SignsSymptoms::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'signs_symptoms'=>$request->signs_symptoms
        ));
        return Redirect()->back()->with('message',"SignsSymptoms details has been updated Succesfully");
    }
    public function deleteSignsSymptoms($id){
        SignsSymptoms::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("SignsSymptoms details has been deleted Succesfully");
    }
}

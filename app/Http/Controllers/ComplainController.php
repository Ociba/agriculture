<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplainController extends Controller
{
    //
    protected function complainNow(){
        return view('admin.complain-form');
    }
    private function submitComplain(){
        $submit_complain =new Complain;
        $submit_complain->user_id =auth()->user()->id;
        $submit_complain->complain =request()->complain;
        $submit_complain->save();
        return redirect()->back()->with('message','You have sent your complain successfully, We shall look through it immediately');
    }
    protected function validateSubmitComplain(){
        if(empty(request()->complain)){
            return redirect()->back()->withErrors('Complain is required, please fill it to continue');
        }else{
            return $this->submitComplain();
        }
    }
    protected function getComplain(){
        $display_complain =Complain::join('users','complains.user_id','users.id')
        ->where('complains.status','active')
        ->select('complains.*','users.name','users.contact')
        ->get();
        return view('admin.complains', compact('display_complain'));
    }
    protected function deleteComplain($id){
        Complain::where('id',$id)->update(array(
            'status'=>'deleted'
        ));
    }
}

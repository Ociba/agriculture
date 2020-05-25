<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Subscription;

class SubscriptionController extends Controller
{
    //
    public function createSubscription(Request $request){
        if(empty($request->email)){
            return Redirect()->back()->withInput()->withErrors("Email an not be empty");
        }
        Subscription::create(array(
            'email'=>$request->email
        ));
        return Redirect()->back()->withErrors("Subscription has been created successfully");
    }
    public function displaySubscription(){
        $display_subscription =Subscription::where('status','active')
        ->paginate('10');
        return view('admin.subscription',compact('display_subscription'));
    }
    public function editSubscription($id){
        $get_subscription =Subscription::where('id',$id);
            return view('admin.edit-subscription-form', compact('get_subscription'));
        }
    public function updateSubscription($id,Request $request){
        Subscription::where('id',$id)->update(array(
            'email'=>$request->email
        ));
        return Redirect()->back()->withErrors("Subscription has been updated successfully");
    }
    public function deleteSubscription($id){
        Subscription::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Subscription has been deleted successfully");
    }
}

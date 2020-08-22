<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    //
    protected function makePayment(){
        return view('Admin.payment-form');
    }
    protected function getPayment(){
        $all_payments =Payment::join('users','payments.user_id','users.id')
        ->select('users.name','users.contact','payments.amount','payments.created_at','payments.status','payments.id')->get();
        if(in_array('Can view payments', auth()->user()->getUserPermisions())){
        return view('Admin.payment', compact('all_payments'));
        }else{
            return redirect('/404');
        }
    }
    private function createPayment(){
        $payment =new Payment;
        $payment->user_id =auth()->user()->id;
        $payment->amount  =request()->amount;
        $payment->save();
        return redirect('/display-items-on-sell')->with('message','You have successfully Subscribe for one year');
    }
   protected function validatePayment(){
        if(empty(request()->amount) ){
            return redirect()->back()->withErrors("Please pay the whole money to continue");
        // }elseif(Payment::where('amount', request()->amount < 10000)->where('payments.user_id',auth()->user()->id))
        // {
        //     return Redirect()->back()->withErrors('Please pay all the money to continue');
        }else{
            return $this->createPayment();
        }
   }
   protected function  deletePayment($payment_id){
       Payment::where('id',$payment_id)->update(array('status'=>'deleted'));
       return redirect()->back()->with('message','You have successfully deleted Payment');
   }
}

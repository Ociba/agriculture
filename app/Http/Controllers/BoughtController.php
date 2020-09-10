<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Item;
use App\Product;
use App\Breed;
use App\Weight;
use App\District;
use App\Category;
use App\User;
use App\SellerMessage;

class BoughtController extends Controller
{
    //
    public function displayBoughtItems(){
        $display_all_items_to_be_bought =Item::join('users','items.user_id','users.id')
        ->join('products','items.product_id','products.id')
        ->join('breeds','items.breed_id','breeds.id')
        ->join('weights','items.weight_id','weights.id')
        ->join('districts','items.district_id','districts.id')
        ->join('categories','items.category_id','categories.id')
        ->where('items.status','available')
        ->select('users.name','users.contact','products.product','breeds.breed','districts.district','categories.category','items.number','items.item_image','items.id',
                'items.price')
        ->orderBy('items.created_at','DESC')
        ->paginate('9');
        return view('admin.items-on-sell', compact('display_all_items_to_be_bought'));
    }
    protected function sendMessageToSellerForm($id){
        $send_seller_message =item::where('id',$id)->get();
        return view('admin.send-seller-message', compact('send_seller_message'));
    }
    private function sendSellerMessage(){
        $send_message_to_seller = new SellerMessage;
        $send_message_to_seller->buyers_name   =request()->buyers_name;
        $send_message_to_seller->phone_number   =request()->phone_number;
        $send_message_to_seller->seller_id      =request()->seller_id;
        $send_message_to_seller->message   =request()->message;
        $send_message_to_seller->save();
        return redirect()->back()->with('message','You have sent message Successfully');
    }
    protected function validateMessageSentToSeller(){
        if(empty(request()->seller_id)){
            return redirect()->back()->withErrors('Seller Id is required, please fill it to continue');
        }elseif(empty(request()->buyers_name)){
            return redirect()->back()->withErrors('Your Name is required, please fill it to continue');
        }elseif(empty(request()->phone_number)){
        return redirect()->back()->withErrors('Your Phone Number is required, please fill it to continue');
         }elseif(empty(request()->message)){
            return redirect()->back()->withErrors('Message is required, please fill it to continue');
        }else{
            return $this->sendSellerMessage();
        }
    }
    protected function getBuyersMessage(){
        $get_messages_from_buyer =SellerMessage::join('users','seller_messages.seller_id','users.id')
        ->where('seller_messages.seller_id',auth()->user()->id)
        ->where('seller_messages.status','not read')
        ->select('seller_messages.buyers_name','seller_messages.phone_number','seller_messages.message','seller_messages.id')
        ->paginate('10');
        return view('admin.buyers-message', compact('get_messages_from_buyer'));
    }
    protected function deleteMessage($id){
        SellerMessage::where('id',$id)->update(array('status'=>'read'));
        return redirect()->back()->with('message','You have deleted message successfully');
    }
    protected function getSellBuyItem(){
        $get_items_to_sell =Item::join('users','items.user_id','users.id')
        ->join('products','items.product_id','products.id')
        ->join('breeds','items.breed_id','breeds.id')
        ->join('weights','items.weight_id','weights.id')
        ->join('districts','items.district_id','districts.id')
        ->join('categories','items.category_id','categories.id')
        ->where('items.status','available')
        ->select('users.id','users.name','products.product','breeds.breed','weights.weight','districts.district','categories.category',
                  'items.price','items.number','items.item_image','items.id','items.user_id')
        ->orderBy('items.created_at','DESC')
        ->paginate('9');
        return view('front.sell-buy', compact('get_items_to_sell'));
    }
    protected function viewItemDetails($id){
        $get_item_details_on_sell =Item::join('breeds','items.breed_id','breeds.id')
        ->join('categories','items.category_id','categories.id')
        ->join('districts','items.district_id','districts.id')
        ->join('products','items.product_id','products.id')
        ->where('items.id',$id)->get();
        return view('front.item-details', compact('get_item_details_on_sell'));
    }
    private function registerBuyer(){
        $get_role_id = 10;
        $register_buyer = new User;
        $register_buyer->name =request()->name;
        $register_buyer->contact =request()->contact;
        $register_buyer->email =request()->email;
        $register_buyer->role_id =$get_role_id;
        $register_buyer->password =Hash::make(request()->password);
        $register_buyer->save();
            return Redirect('/display-buyers-items-on-sell')->with('message', 'User has been created Successfully');
    }
    protected function registerBuyerForm(){
        return view('front.register-buyer');
    }
    protected function validateBuyerRegistration(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Name is required, please fill it to continue');
        }elseif(empty(request()->contact)){
            return redirect()->back()->withErrors('Contact is required, please fill it to continue');
        }elseif(User::where(\strtolower('contact'), strtolower(request()->contact))->exists()){
            return redirect()->back()->withErrors('Contact already used please');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Email is required, please fill it to continue');
        }elseif(User::where(\strtolower('email'), strtolower(request()->email))->exists()){
            return redirect()->back()->withErrors('Email already used please');
       }elseif(empty(request()->password)){
            return redirect()->back()->withErrors('Password is required, please fill it to continue');
         }elseif(User::where(\strtolower('password'), strtolower(request()->password))->exists()){
            return redirect()->back()->withErrors('Password already used please');
        }else{
            return $this->registerBuyer();
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Bought;
use App\Product;
use App\Breed;
use App\Weight;
use App\District;
use App\Category;

class BoughtController extends Controller
{
    //
    public function boughtForm(){
        $pick_product=Product::select('name','id')->get();
        $pick_breed=Breed::select('breed','id')->get();
        $pick_weight=Weight::select('weight','id')->get();
        $pick_district=District::select('district','id')->get();
        $pick_category=Category::select('category','id')->get();
        return view('admin.bought-form', compact('pick_product','pick_breed','pick_weight','pick_district','pick_category'));
    }
    public function editBoughtItemsForm($id){
         $edit_bought_items =Bought::where('id',$id)->get();
         return view('admin.edit-bought-items',compact('edit_bought_items'));
    }
    public function createBoughtItem(Request $request){
        Bought::create(array(
            'user_id'=>Auth::user()->id,
            'product_id'=>$request->name,
            'breed_id' =>$request->breed,
            'weight_id'=>$request->weight,
            'district_id' =>$request->district,
            'category_id' =>$request->category,
            'number' =>$request->number

        ));
        return Redirect()->back()->withErrors("You have bought your item(s) Successfully");
    }
    public function displayBoughtItems(){
        $display_all_items_bought =Bought::join('users','boughts.user_id','users.id')
        ->join('products','boughts.product_id','products.id')
        ->join('breeds','boughts.breed_id','breeds.id')
        ->join('weights','boughts.weight_id','weights.id')
        ->join('districts','boughts.district_id','districts.id')
        ->join('categories','boughts.category_id','categories.id')
        ->where('boughts.status','active')
        ->select('users.name','products.name','breeds.breed','districts.district','categories.category','boughts.number')
        ->paginate('10');
        return view('admin.bought-items', compact('display_all_items_bought'));
    }
    public function searchBoughtItems(Request $request){
        $display_all_items_bought =Bought::join('users','boughts.user_id','users.id')
        ->join('products','boughts.product_id','products.id')
        ->join('breeds','boughts.breed_id','breeds.id')
        ->join('weights','boughts.weight_id','weights.id')
        ->join('districts','boughts.district_id','districts.id')
        ->join('categories','boughts.category_id','categories.id')
        ->where('members.status','active')
        ->where('users.contact',$request->name)
        ->orWhere('products.name',$request->name)
        ->orWhere('breeds.breed',$request->name)
        ->orWhere('weights.weight',$request->name)
        ->orWhere('districts.district',$request->name)
        ->orWhere('categories.category',$request->name)
        ->orWhere('boughts.number',$request->name)
        ->select('users.name','products.name','breeds.breed','districts.district','categories.category','boughts.number')
        ->paginate('10');
        
        return view('admin.bought-items', compact('display_all_items_bought'));
    }
    public function updateBoughtItems($id,Request $request){
       Bought::where('id',$id)->update(array(
        'user_id'=>Auth::user()->id,
        'product_id'=>$request->name,
        'breed_id' =>$request->breed,
        'weight_id'=>$request->weight,
        'district_id' =>$request->district,
        'category_id' =>$request->category,
        'number' =>$request->number
       ));
       return redirect('/bought-items')->withErrors("You Item(s) details updated successfully");
    }
    public function deleteBoughtItems($id){
        Bought::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors('Item has been deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\MarketProduct;

class MarketController extends Controller
{
    //
    public function marketProductsForm(){
        if(in_array('Can add market products', auth()->user()->getUserPermisions())){
        return view('admin.market-product-form');
        }else{
            return redirect('/404');
        }
    }
    public function createProductsForMarket(Request $request){
        if(empty($request->name)){
            return Redirect()->back()->withInput()->withErrors("Name cannot be empty");
        }
        if(MarketProduct::where('name', $request->name)->exists()){
            return Redirect()->back()->withErrors("Name already exists");
        }
        if(empty($request->image)){
            return Redirect()->back()->withInput()->withErrors("Image cannot be empty");
        }
        if($request->hasFile('image')) {

            $files = $request->file('image');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/assets/images/';
            $files->move($folderpath, $file_name);
            MarketProduct::create(array(
            'user_id'=>Auth::user()->id,
            'name'=>$request->name,
            'image'=>$file_name
        ));
        return Redirect()->back()->with('message',"Market Product details has been created successfully");
    }else{
        return Redirect()->back()->withErrors("Image has not been created successfully");
    }
    }
    public function displayProductsForMarket(){
        if(in_array('Can view market products', auth()->user()->getUserPermisions())){
        $show_market_products =MarketProduct::join('users','market_products.user_id','users.id')
        ->where('market_products.status','active')
        ->select('market_products.name','market_products.image','market_products.id')
        ->get();
        return view('admin.market-products',compact('show_market_products'));
        }else{
            return redirect('/404');
        }
    }
    public function editMarket($id){
        if(in_array('Can edit market products', auth()->user()->getUserPermisions())){
        $get_market_products =MarketProduct::where('id',$id)->get();
        return view('admin.edit-market-products', compact('get_market_products'));
        }else{
            return redirect('/404');
        }
    }
    public function updateMarket($id,Request $request){
        MarketProduct::where('id',$id)->update(array(
           'user_id'=>Auth::user()->id,
           'name'=>$request->name,
           'image'=>$request->image
        ));
        return Redirect()->back()->with('message',"Market has been updated successfully");
    }
    public function deleteMarket($id){
        MarketProduct::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Market has been deleted successfully");
    }
}

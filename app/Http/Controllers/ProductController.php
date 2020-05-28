<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;

class ProductController extends Controller
{
    //
    public function addProductForm(){
        if(in_array('Can add product', auth()->user()->getUserPermisions())){
        return view('admin.product-form');
    }else{
        return redirect('/404');
    }
    }
    public function editProductForm($id){
        if(in_array('Can edit product', auth()->user()->getUserPermisions())){
        $edit_products =Product::where('id',$id)->get();
        return view('admin.edit-product-form',compact('edit_products'));
        }else{
            return redirect('/404');
        }
    }
    public function createProduct(Request $request){
        if(empty($request->product)){
            return Redirect()->back()->withInput()->withErrors("Product cannot be empty");
        }
        if(Product::where('product', $request->product)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Product already exists, please enter a new product');

        }
        Product::create(array(
            'user_id'=>Auth::user()->id,
            'product'=>$request->product
        ));
        return Redirect()->back()->with('message',"Product details has been saved Succesfully");
    }
    public function displayProduct(){
        $show_all_products =Product::join('users','products.user_id','users.id')
        ->where('products.status','active')
        ->select('users.name','products.product','products.id')
        ->paginate('10');
        return view('admin.product-table',compact('show_all_products'));
    }
    public function searchProduct(Request $request){
        $show_all_products =Product::join('users','products.user_id','users.id')
        ->where('products.status','active')
        ->where('products.product',$request->product)
        ->orwhere('users.name',$request->product)
        ->select('users.name','products.product','products.id')
        ->paginate('10');
        return view('admin.product-table',compact('show_all_products'));
    }
    public function updateProductInformation($id, Request $request){
        Product::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'product'=>$request->product
        ));
        return redirect()->back()->with('message',"Product details has been updated Succesfully");
    }
    public function deleteProduct($id){
        Product::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Product details has been deleted Succesfully");
    }
}

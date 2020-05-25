<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Price;
Use App\Product;
use App\District;
use App\County;
use App\Day;

class PriceController extends Controller
{
    //
    public function addPriceForm(){
        $get_product =Product::select('product','id')->get();
        $get_district =District::select('district','id')->get();
        $get_county =County::select('county','id')->get();
        $get_day =Day::select('day','id')->get();
        return view('admin.price-form', compact("get_product",'get_district','get_county','get_day'));
    }
    public function editPriceForm($id){
        $get_product =Product::select('product','id')->get();
        $get_district =District::select('district','id')->get();
        $get_county =County::select('county','id')->get();
        $get_day =Day::select('day','id')->get();
        $edit_prices =Price::where('id',$id)->get();
        return view('admin.edit-price-form',compact('edit_prices',"get_product",'get_district','get_county','get_day'));
    }
    public function createPrice(Request $request){
        if(District::where(\strtolower('district'), strtolower($request->district))->exists()){
            $get_district= District::where("district", $request->district)->value('id');
          }
          else{
           District::create(array('district'=>$request->district,
                   'user_id'=>Auth::user()->id
           ));
           
          } 
          if(County::where(\strtolower('county'), strtolower($request->county))->exists()){
           $get_county= County::where("county", $request->county)->value('id');
         }
         else{
           County::create(array('county'=>$request->county
          ));
          
         }
         if(Product::where(\strtolower('product'), strtolower($request->product))->exists()){
            $get_district= Product::where("product", $request->product)->value('id');
          }
          else{
           Product::create(array('product'=>$request->product,
                   'user_id'=>Auth::user()->id
           ));
           
          } 
          if(Day::where(\strtolower('day'), strtolower($request->day))->exists()){
            $get_district= Day::where("day", $request->day)->value('id');
          }
          else{
            Day::create(array('name'=>$request->day,
                   'user_id'=>Auth::user()->id
           ));
           
          } 
          $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
          $get_county_id= County::where(\strtolower("county"), strtolower($request->county))->value('id');
          $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
          $get_day_id= Day::where(\strtolower("day"), strtolower($request->day))->value('id');
        Price::create(array(
            'user_id'=>Auth::user()->id,
            'product_id'=>$get_product_id,
            'district_id'=>$get_district_id,
            'county_id'=>$get_county_id,
            'market_name'=>$request->market_name,
            'day_id'=>$get_day_id,
            'quantity'=>$request->quantity,
            'price'=>$request->price
        ));
        return Redirect()->back()->withErrors("Price details has been sent Succesfully");
    }
    public function displayPrice(){
        $show_all_prices =Price::join('users','prices.user_id','users.id')
        ->join('products','prices.product_id','products.id')
        ->join('districts','prices.district_id','districts.id')
        ->join('counties','prices.county_id','counties.id')
        ->join('days','prices.day_id','days.id')
        ->where('prices.status','active')
        ->select('users.name','prices.price','prices.id','prices.market_name','prices.created_at','prices.quantity','days.day','products.product','districts.district','counties.county')
        ->orderBy('created_at', 'desc')
        ->paginate('10');
        return view('admin.price-table',compact('show_all_prices'));
    }
    public function searchPrice(Request $request){
        $show_all_prices =Price::join('users','prices.user_id','users.id')
        ->join('products','prices.product_id','products.id')
        ->join('districts','prices.district_id','districts.id')
        ->join('counties','prices.county_id','counties.id')
        ->join('days','prices.day_id','days.id')
        ->where('prices.status','active')
        ->where('products.product',$request->product)
        ->orwhere('districts.district',$request->product)
        ->orwhere('counties.county',$request->product)
        ->orwhere('prices.market_name',$request->product)
        ->orwhere('days.day',$request->product)
        ->orwhere('users.name',$request->price)
        ->orwhere('prices.quantity',$request->product)
        ->orwhere('prices.price',$request->price)
        ->orwhere('prices.created_at',$request->price)
        ->select('users.name','prices.price','prices.id','prices.market_name','prices.created_at','prices.quantity','days.day','products.product','districts.district','counties.county')
        ->paginate('10');
        return view('admin.price-table',compact('show_all_prices'));
    }
    public function updatePriceInformation($id, Request $request){
        $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
        $get_county_id= County::where(\strtolower("county"), strtolower($request->county))->value('id');
        $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
        $get_day_id= Day::where(\strtolower("day"), strtolower($request->day))->value('id');
        Price::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'product_id'=>$get_product_id,
            'district_id'=>$get_district_id,
            'county_id'=>$get_county_id,
            'market_name'=>$request->market_name,
            'day_id'=>$get_day_id,
            'quantity'=>$request->quantity,
            'price'=>$request->price
        ));
        return Redirect()->back()->withErrors("Price details has been updated Succesfully");
    }
    public function deletePrice($id){
        Price::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Price details has been deleted Succesfully");
    }
}

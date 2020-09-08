<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Permit;
use App\Product;
use App\Role;
use App\District;
use App\Doctor;

class PermitController extends Controller
{
    //
    public function addPermitForm(){
        if(in_array('Can view Permit form', auth()->user()->getUserPermisions())){
        $pick_product_details =Product::select('product','id')->get();
        $get_role =Role::select('role','id')->get();
        $get_district =District::select('district','id')->get();
        return view('admin.add-permit-form', compact('pick_product_details','get_role','get_district'));
        }else{
            return redirect('/404');
        }
    }
    public function PrintForm(){
        if(in_array('Can see print Permit', auth()->user()->getUserPermisions())){
        $display_permits =Permit::join('users','permits.user_id','users.id')
        ->join('products','permits.product_id','products.id')
        ->join('districts','permits.district_id','districts.id')
        ->where('permits.status','active')
        ->where('users.id',auth()->user()->id)
        ->select('users.name','users.contact','permits.sellers_name','permits.id','permits.contact','permits.buyers_name',
        'permits.buyers_contact','permits.sellers_ID','permits.buyer_ID','permits.description','permits.Number_of_items',
        'permits.local_council_one_name','permits.phone_number','districts.district','permits.item_image','permits.to_destination',
        'permits.created_at','products.product','permits.receipt_number')
        ->orderBy('permits.created_at','desc')
        ->limit(1)
        ->paginate('1');
        return view('admin.print-permit',compact('display_permits'));
        }else{
            return redirect('/404');
        }
    }
    public function editPermitForm($id){
        if(in_array('Can edit Permit form', auth()->user()->getUserPermisions())){
        $edit_permit =Permit::where('id',$id)->get();
        return view('admin.edit-permit-form', compact('edit_permit'));
        }else{
            return redirect('/404');
        }
    }
    protected function createPermit(Request $request){
        if(Product::where(\strtolower('product'), strtolower($request->product))->exists()){
            $get_product= Product::where("product", $request->product)->value('id');
          }
          else{
            Product::create(array('product'=>$request->product
           ));
          }
        $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
        $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
        $get_role_id= Role::where(\strtolower("role"), strtolower($request->role))->value('id');
        $files = $request->file('item_image');
        $extension = $files->getClientOriginalExtension();
        $file_name = $files->getClientOriginalName();
        $folderpath = public_path().'/images/profile_pictures/';
        $files->move($folderpath, $file_name);
        
        Permit::create(array(
            'user_id'=>Auth::user()->id,
            'product_id'=>$get_product_id,
            'role_id'=>$get_role_id,
            'sellers_name'=>$request->sellers_name,
            'contact'=>$request->contact,
            'buyers_name'=>$request->buyers_name,
            'buyers_contact'=>$request->buyers_contact,
            'sellers_ID'=>$request->sellers_ID,
            'buyer_ID'=>$request->buyer_ID,
            'description'=>$request->description,
            'Number_of_items'=>$request->Number_of_items,
            'local_council_one_name'=>$request->local_council_one_name,
            'phone_number'=>$request->phone_number,
            'district_id' =>$get_district_id,
            'receipt_number'=>$this->getRecieptNumber(),
            'item_image'=>$file_name,
            'to_destination'=>$request->to_destination
        ));
        return Redirect()->back()->withErrors("You have Save Permit Successfully");
    }
    private function getRecieptNumber(){
        $count_permits = count(Permit::all());
        if($count_permits < 10){
            $permit_random_number = '#000'.rand(0, 10). ( $count_permits+ 1);
            return $permit_random_number;
        }elseif($count_permits < 100){
            $permit_random_number = '#00'.rand(10, 100). ( $count_permits+ 1);
            return $permit_random_number;
        }elseif($count_permits < 1000){
            $permit_random_number = '#0'.rand(100, 1000). ( $count_permits+ 1);
            return $permit_random_number;
        }else{
            $permit_random_number = '#'.rand(1000, 10000). ( $count_permits+ 1);
            return $permit_random_number;
        }
    }
    public function displayPermit(){
        $display_permits =Permit::join('users','permits.user_id','users.id')
        ->join('products','permits.product_id','products.id')
        ->join('districts','permits.district_id','districts.id')
        ->where('permits.status','active')
        ->where('users.id',auth()->user()->id)
        ->select('users.name','users.contact','permits.sellers_name','permits.id','permits.contact','permits.buyers_name',
        'permits.buyers_contact','permits.sellers_ID','permits.buyer_ID','permits.description','permits.Number_of_items',
        'permits.local_council_one_name','permits.phone_number','permits.item_image','districts.district','permits.to_destination',
        'permits.created_at','products.product','permits.receipt_number')
        ->orderBy('permits.created_at','desc')
        ->limit(1)
        ->paginate('1');
        $noPermit_available = "Sorry, Permit is not available. Please check again later";
        return view('admin.permit-table', compact('display_permits','noPermit_available'));
    }
    public function viewPermit($id){
        $display_permits =Permit::join('users','permits.user_id','users.id')
        ->join('products','permits.product_id','products.id')
        ->join('districts','permits.district_id','districts.id')
        ->join('roles','permits.role_id','roles.id')
        ->where('permits.status','active')
        ->where('permits.id',$id)
        ->select('users.name','users.contact','roles.role','users.role_id','permits.sellers_name','permits.id','permits.contact','permits.buyers_name',
        'permits.buyers_contact','permits.sellers_ID','permits.buyer_ID','permits.description','permits.Number_of_items',
        'permits.local_council_one_name','permits.phone_number','permits.item_image','districts.district','permits.to_destination',
        'permits.created_at','products.product','permits.receipt_number')
        ->get();
        $noPermit_available = "Sorry, Permit is not available. Please check again later";
        return view('admin.view-permit', compact('display_permits','noPermit_available'));
    }
    public function displayAdminPermit(){
        $display_permits =Permit::join('users','permits.user_id','users.id')
        ->join('products','permits.product_id','products.id')
        ->join('districts','permits.district_id','districts.id')
        ->where('permits.status','active')
        ->select('users.name','users.contact','permits.sellers_name','permits.id','permits.contact','permits.buyers_name',
        'permits.buyers_contact','permits.sellers_ID','permits.buyer_ID','permits.description','permits.Number_of_items',
        'permits.local_council_one_name','permits.phone_number','permits.item_image','districts.district',
        'permits.to_destination','permits.created_at','products.product','permits.receipt_number')
        ->orderBy('permits.created_at','desc')
        ->get();
        $noPermit_available = "Sorry, Permit is not available. Please check again later";
        return view('admin.admin-permit', compact('display_permits','noPermit_available'));
    }
    
    public function updatePermitInformation($id, Request $request){
        $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
        $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
        Permit::where('id', $id)->update(array(
            'user_id'=>Auth::user()->id,
            'product_id'=>$get_product_id,
            'sellers_name'=>$request->sellers_name,
            'contact'=>$request->contact,
            'buyers_name'=>$request->buyers_name,
            'buyers_contact'=>$request->buyers_contact,
            'sellers_ID'=>$request->sellers_ID,
            'buyer_ID'=>$request->buyer_ID,
            'description'=>$request->description,
            'Number_of_items'=>$request->Number_of_items,
            'local_council_one_name'=>$request->local_council_one_name,
            'phone_number'=>$request->phone_number,
            'item_image'=>$request->item_image,
            'district_id' =>$get_district_id,
            'to_destination'=>$request->to_destination
        ));
        return Redirect()->back()->with('message',"Permit has been updated successfully");
    }
    public function deletePermit($id){
        Permit::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Permit has been deleted successfully");
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Permit;
use App\Product;
use App\Role;
use App\District;

class PermitController extends Controller
{
    //
    public function addPermitForm(){
        $pick_product_details =Product::select('product','id')->get();
        $get_role =Role::select('role','id')->get();
        $get_district =District::select('district','id')->get();
        return view('admin.add-permit-form', compact('pick_product_details','get_role','get_district'));
    }
    public function PrintForm(){
        $display_permits =Permit::join('users','permits.user_id','users.id')
        ->join('products','permits.product_id','products.id')
        ->join('roles','permits.role_id','roles.id')
        ->where('permits.status','active')
        ->select('users.name','permits.sellers_name','permits.id','permits.contact','permits.buyers_name',
        'permits.buyers_contact','permits.sellers_ID','permits.buyer_ID','permits.description','permits.Number_of_items',
        'permits.local_council_one_name','permits.phone_number','roles.role','permits.vet_contact','permits.vet_officer',
        'permits.item_image','permits.from_destination','permits.to_destination','permits.created_at','products.product')
        ->orderBy('permits.created_at','desc')
        ->limit(1)
        ->paginate('1');
        return view('admin.invoice-print',compact('display_permits'));
    }
    public function editPermitForm($id){
        $edit_permit =Permit::where('id',$id)->get();
        return view('admin.edit-permit-form', compact('edit_permit'));
    }
    public function createPermit(Request $request){
        if(Product::where(\strtolower('product'), strtolower($request->product))->exists()){
            $get_product= Product::where("product", $request->product)->value('id');
          }
          else{
            Product::create(array('product'=>$request->product
           ));
           
          }
          if(Role::where(\strtolower('role'), strtolower($request->role))->exists()){
            $get_role= Role::where("role", $request->role)->value('id');
          }
          else{
            Role::create(array('role'=>$request->role
           ));
           
          }
          $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
          $get_role_id= Role::where(\strtolower("role"), strtolower($request->role))->value('id');
        $files = $request->file('item_image');
        $extension = $files->getClientOriginalExtension();
        $file_name = $files->getClientOriginalName();
        $folderpath = public_path().'/images/profile_pictures/';
        $files->move($folderpath, $file_name);
        
        Permit::create(array(
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
            'role_id'=>$get_role_id,
            'vet_officer'=>$request->vet_officer,
            'vet_contact'=>$request->vet_contact,
            'item_image'=>$file_name,
            'from_destination'=>$request->from_destination,
            'to_destination'=>$request->to_destination
        ));
        return Redirect()->back()->withErrors("You have Save Permit Successfully");
    }
    public function displayPermit(){
        $display_permits =Permit::join('users','permits.user_id','users.id')
        ->join('products','permits.product_id','products.id')
        ->join('roles','permits.role_id','roles.id')
        ->where('permits.status','active')
        ->select('users.name','permits.sellers_name','permits.id','permits.contact','permits.buyers_name',
        'permits.buyers_contact','permits.sellers_ID','permits.buyer_ID','permits.description','permits.Number_of_items',
        'permits.local_council_one_name','permits.phone_number','roles.role','permits.vet_contact','permits.vet_officer',
        'permits.item_image','permits.from_destination','permits.to_destination','permits.created_at','products.product')
        ->orderBy('permits.created_at','desc')
        ->limit(1)
        ->paginate('1');
        return view('admin.permit-table', compact('display_permits'));
    }
    public function searchPermit(Request $request){
        $display_Permits =Permit::join('users','permits.user_id','users.id')
        ->join('products','permits.product_id','products.id')
        ->join('roles','permits.role_id','roles.id')
        ->where('permits.status','active')
        ->where('permits.vet_officer',$request->vet_officer)
        ->orwhere('users.name',$request->vet_officer)
        ->orwhere('products.product',$request->vet_officer)
        ->orwhere('permits.sellers_name',$request->vet_officer)
        ->orwhere('permits.contact',$request->vet_officer)
        ->orwhere('permits.buyers_name',$request->vet_officer)
        ->orwhere('permits.buyers_contact',$request->vet_officer)
        ->orwhere('permits.sellers_ID',$request->vet_officer)
        ->orwhere('permits.buyer_ID',$request->vet_officer)
        ->orwhere('permits.description',$request->vet_officer)
        ->orwhere('permits.Number_of_items',$request->namvet_officere)
        ->orwhere('permits.local_council_one_name',$request->vet_officer)
        ->orwhere('permits.phone_number',$request->vet_officer)
        ->orwhere('permits.vet_contact',$request->vet_officer)
        ->orwhere('permits.item_image',$request->vet_officer)
        ->orwhere('permits.from_destination',$request->vet_officer)
        ->orwhere('permits.to_destination',$request->vet_officer)
        ->select('users.name','permits.sellers_name','permits.id','permits.contact','permits.buyers_name',
        'permits.buyers_contact','permits.sellers_ID','permits.buyer_ID','permits.description','permits.Number_of_items',
        'permits.local_council_one_name','permits.phone_number','roles.role','permits.vet_contact','permits.vet_officer',
        'permits.item_image','permits.from_destination','permits.to_destination','products.product')
        ->paginate('10');
        return view('admin.permit-table', compact('display_permits'));
    }
    public function updatePermitInformation($id, Request $request){
        $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
        $get_role_id= Role::where(\strtolower("role"), strtolower($request->role))->value('id');
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
            'role_id'=>$get_role_id,
            'vet_officer'=>$request->vet_officer,
            'vet_contact'=>$request->vet_contact,
            'item_image'=>$request->item_image,
            'from_destination'=>$request->from_destination,
            'to_destination'=>$request->to_destination
        ));
        return Redirect()->back()->withErrors("Permit has been updated successfully");
    }
    public function deletePermit($id){
        Permit::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Permit has been deleted successfully");
    }
    
}

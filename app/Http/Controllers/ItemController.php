<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\Product;
use App\Breed;
use App\Weight;
use App\District;
use App\County;
use App\Village;
use App\Price;
use App\Category;
use App\User;
use App\DoctorRequest;
use App\Conscent;
use App\Role;
use App\Payment;
use App\Doctors;
use App\SubCounty;

class ItemController extends Controller
{
    //
    protected function sellItemForm(){
        $pick_product=Product::select('product','id')->get();
        $pick_breed=Breed::select('breed','id')->get();
        $pick_weight=Weight::select('weight','id')->get();
        $pick_district=District::select('district','id')->get();
        $pick_category=Category::select('category','id')->get();
        if($this->checkPayment()->doesntExist()){
            return redirect()->back()->with('emessage','Please make payments to continue advertising your item(s)');
        }elseif(Payment::join('users','payments.user_id','users.id')
        ->where('payments.user_id',auth()->user()->id)
        ->where('payments.status', '!=', 'active')->exists()){
            return redirect()->back()->with('emessage','Your payments is overdue please subscribe to continue advertising your item(s)');
        }else{
        return view('admin.sell-item-form', compact('pick_product','pick_breed','pick_weight','pick_district','pick_category'));
        }
    }
    private function checkPayment(){
        $check_payment_status= Payment::join('users','payments.user_id','users.id')
        ->where('payments.user_id',auth()->user()->id)
        ->where('payments.amount','>=',10000);
        return $check_payment_status;
    }
    public function editSellAnimalForm($id){
        $pick_product=Product::select('product','id')->get();
        $pick_breed=Breed::select('breed','id')->get();
        $pick_weight=Weight::select('weight','id')->get();
        $pick_district=District::select('district','id')->get();
        $pick_category=Category::select('category','id')->get();
         $edit_sell_items =Item::where('id',$id)->get();
         return view('admin.edit-sell-items',compact('edit_sell_items','pick_product','pick_breed','pick_weight',
                                                      'pick_district','pick_category'));
    }
    public function createSellItem(Request $request){
        if(empty($request->price)){
            return Redirect()->back()->withInput()->withErrors("Price cannot be empty");
        }
        if(empty($request->number)){
            return Redirect()->back()->withInput()->withErrors("Number cannot be empty");
        }
        if(District::where(\strtolower('district'), strtolower($request->district))->exists()){
            $get_district= District::where("district", $request->district)->value('id');
          }
          else{
           District::create(array('district'=>$request->district,
                   'user_id'=>Auth::user()->id
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
          if(Breed::where(\strtolower('breed'), strtolower($request->breed))->exists()){
           $get_county= Breed::where("breed", $request->breed)->value('id');
         }
         else{
           Breed::create(array('breed'=>$request->breed,
                                'user_id'=>Auth::user()->id
          ));
          
         }
         if(Weight::where(\strtolower('weight'), strtolower($request->weight))->exists()){
           $get_village= Weight::where("weight", $request->weight)->value('id');
         }
         else{
           Weight::create(array('weight'=>$request->weight,
                                'user_id'=>Auth::user()->id
          ));
          
         }
         if(Category::where(\strtolower('category'), strtolower($request->category))->exists()){
            $get_village= Category::where("category", $request->category)->value('id');
          }
          else{
            Category::create(array('category'=>$request->category,
                                    'user_id'=>Auth::user()->id
           ));
           
          }
          $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
          $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
          $get_breed_id= Breed::where(\strtolower("breed"), strtolower($request->breed))->value('id');
          $get_weight_id= Weight::where(\strtolower("weight"), strtolower($request->weight))->value('id');
          $get_category_id= Category::where(\strtolower("category"), strtolower($request->category))->value('id');
        if($request->hasFile('item_image')) {

            $files = $request->file('item_image');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/items/images/';
            $files->move($folderpath, $file_name);
        
            Item::create(array(
                'user_id'=>Auth::user()->id,
                'product_id'=>$get_product_id,
                'breed_id' =>$get_breed_id,
                'weight_id'=>$get_weight_id,
                'district_id' =>$get_district_id,
                'price' =>$request->price,
                'category_id' =>$get_category_id,
                'number' =>$request->number,
                'item_image' =>$file_name
                
            ));
            return Redirect()->back()->with('message',"You have created your item(s) Successfully");
        }
        else {
            return Redirect()->back()->withErrors("Error, seems like the file wasn't uploaded");
        }
    }
    public function displaySellItems(){
        $display_all_items_to_sell =Item::join('users','items.user_id','users.id')
        ->join('products','items.product_id','products.id')
        ->join('breeds','items.breed_id','breeds.id')
        ->join('weights','items.weight_id','weights.id')
        ->join('districts','items.district_id','districts.id')
        ->join('categories','items.category_id','categories.id')
        ->where('items.status','available')
        ->select('users.id','products.product','breeds.breed','weights.weight','districts.district','categories.category',
                  'items.price','items.number','items.item_image','items.id','items.user_id','users.name','items.approved_by')
        ->orderBy('items.created_at','DESC')
        ->get();
        return view('admin.sell-items', compact('display_all_items_to_sell'));
    }
    public function displaySellItemsForApproval(){
        $display_all_items_to_sell =Item::join('users','items.user_id','users.id')
        ->join('products','items.product_id','products.id')
        ->join('breeds','items.breed_id','breeds.id')
        ->join('weights','items.weight_id','weights.id')
        ->join('districts','items.district_id','districts.id')
        ->join('categories','items.category_id','categories.id')
        ->where('items.status','pending')
        ->select('users.id','users.name','products.product','breeds.breed','weights.weight','districts.district','categories.category',
                  'items.price','items.number','items.item_image','items.id','items.user_id')
        ->orderBy('items.created_at','DESC')
        ->get();
        return view('admin.approve-items-on-sell', compact('display_all_items_to_sell'));
    }
    public function updateSellItems(Request $request,$id){
        $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
        $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
        $get_breed_id= Breed::where(\strtolower("breed"), strtolower($request->breed))->value('id');
        $get_weight_id= Weight::where(\strtolower("weight"), strtolower($request->weight))->value('id');
        $get_category_id= Category::where(\strtolower("category"), strtolower($request->category))->value('id');
        
        if($request->hasFile('item_image')) {
            $files = $request->file('item_image');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/items/images/';
            $files->move($folderpath, $file_name);
       
       item::where('id',$id)->update(array(
        'user_id'=>Auth::user()->id,
            'product_id'=>$get_product_id,
            'breed_id' =>$get_breed_id,
            'weight_id'=>$get_weight_id,
            'district_id' =>$get_district_id,
            'price' =>$request->price,
            'category_id' =>$get_category_id,
            'number' =>$request->number,
            'item_image' =>$file_name
       ));
       return Redirect()->back()->with('message',"You Item(s) details updated successfully");
    }else{
    return Redirect()->back()->withInput()->withErrors("Image has not been created successfully");
    }
    }
    public function deleteItems($id){
        item::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors('Item has been deleted successfully');
    }
    protected function approveItemOnSell($id){
        item::where('id',$id)->update(array(
            'approved_by'=>auth()->user()->id,
            'status' =>'available'
        ));
        return Redirect()->back()->with('message','You have approved Item on sell successfully');
    }
    //Doctor
    public function DoctorsRequestForm(){
        $pick_product_details=Product::select('product','id')->get();
        $pick_district_details=District::select('district','id')->get();
        $pick_county_details=County::select('county','id')->get();
        $pick_village_details=Village::select('village','id')->get();
        return view('admin.doctors-request-form', compact('pick_product_details',
        'pick_district_details','pick_county_details','pick_village_details'));
    }
    public function editDoctorsForm($id){
         $edit_doctors_details =DoctorRequest::where('id',$id)->get();
         $pick_product_details=Product::select('product','id')->get();
         $pick_district_details=District::select('district','id')->get();
         $pick_county_details=County::select('county','id')->get();
         $pick_village_details=Village::select('village','id')->get();
         return view('admin.edit-doctors-form',compact('edit_doctors_details','pick_product_details','pick_district_details',
                    'pick_county_details','pick_village_details'));
    }
    public function createDoctorsRequest(Request $request){
        if(empty($request->photo)){
            return Redirect()->back()->withInput()->withErrors("photo cannot be empty");
        }
        if(empty($request->conditions)){
            return Redirect()->back()->withInput()->withErrors("Condition cannot be empty");
        }
        if(empty($request->number)){
            return Redirect()->back()->withInput()->withErrors("Number cannot be empty");
        }
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
         if(Village::where(\strtolower('village'), strtolower($request->village))->exists()){
           $get_village= Village::where("village", $request->village)->value('id');
         }
         else{
           Village::create(array('village'=>$request->village
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
          $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
          $get_county_id= County::where(\strtolower("county"), strtolower($request->county))->value('id');
          $get_village_id= Village::where(\strtolower("village"), strtolower($request->village))->value('id');
          $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
        if($request->hasFile('photo')) {

            $files = $request->file('photo');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/assets/images/';
            $files->move($folderpath, $file_name);
        
        DoctorRequest::create(array(
            'user_id'=>Auth::user()->id,
            'product_id'=>$get_product_id,
            'district_id' =>$get_district_id,
            'county_id' =>$get_county_id,
            'village_id' =>$get_village_id,
            'conditions' =>$request->conditions,
            'number' =>$request->number,
            'photo' =>$file_name
            
        ));
        return redirect()->back()->with('message',"You have Sent your request(s) Successfully");
    }
    else {
        return redirect()->back()->withErrors("Error, seems like the file wasn't uploaded");
    }
    }
    public function displayDoctorsRequests(){
        $display_all_doctors_requests_details =DoctorRequest::join('users','doctor_requests.user_id','users.id')
        ->join('products','doctor_requests.product_id','products.id')
        ->join('districts','doctor_requests.district_id','districts.id')
        ->join('counties','doctor_requests.county_id','counties.id')
        ->join('villages','doctor_requests.village_id','villages.id')
        ->where('doctor_requests.status','active')
        ->select('users.name','users.contact','products.product','districts.district','counties.county',
                  'villages.village','doctor_requests.number','doctor_requests.photo','doctor_requests.id','doctor_requests.conditions')
        ->orderBy('doctor_requests.created_at','desc')
        ->get();
        return view('admin.all-doctors-requests', compact('display_all_doctors_requests_details'));
    }
    public function myDoctorsRequests(){
        $display_all_doctors_requests_details =DoctorRequest::join('users','doctor_requests.user_id','users.id')
        ->join('products','doctor_requests.product_id','products.id')
        ->join('districts','doctor_requests.district_id','districts.id')
        ->join('counties','doctor_requests.county_id','counties.id')
        ->join('villages','doctor_requests.village_id','villages.id')
        ->where('doctor_requests.status','active')
        ->where('users.id', auth()->user()->id)
        ->select('users.name','users.contact','products.product','districts.district','counties.county',
                  'villages.village','doctor_requests.number','doctor_requests.photo','doctor_requests.id','doctor_requests.conditions')
        ->orderBy('doctor_requests.created_at','desc')
        ->get();
        return view('admin.my-doctors-request', compact('display_all_doctors_requests_details'));
    }
    
    public function updateDoctorsRequests($id,Request $request){
            $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
            $get_county_id= County::where(\strtolower("county"), strtolower($request->county))->value('id');
            $get_village_id= Village::where(\strtolower("village"), strtolower($request->village))->value('id');
            $get_product_id= Product::where(\strtolower("product"), strtolower($request->product))->value('id');
            if($request->hasFile('photo')) {

                $files = $request->file('photo');
                $extension = $files->getClientOriginalExtension();
                $file_name = $files->getClientOriginalName();
                $folderpath =public_path().'/images/profile_pictures/';
                $files->move($folderpath, $file_name);
            DoctorRequest::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'product_id'=>$get_product_id,
            'district_id' =>$get_district_id,
            'county_id' =>$get_county_id,
            'village_id' =>$get_village_id,
            'conditions' =>$request->conditions,
            'number' =>$request->number,
            'photo' =>$file_name
       ));
       return Redirect()->back()->with('message',"You Request(s) details updated successfully");
       }else {
        return redirect()->back()->withErrors("Error, seems like the file wasn't uploaded");
    }
    }
    public function deleteDoctorsRequest($id){
        DoctorRequest::where('id',$id)->update(array('status'=>'done'));
        return Redirect()->back()->withErrors('Request has been deleted successfully');
    }
    public function displayConscent(Request $id){
        $display_all_conscent_details =Conscent::join('users','conscents.user_id','users.id')
        ->join('counties','conscents.county_id','counties.id')
        ->join('subcounties','conscents.subcounty_id','subcounties.id')
        ->join('items','conscents.item_id','items.id')
        ->join('roles','conscents.role_id','roles.id')
        ->where(['conscents.status'=>'active', 'conscents.item_id'=>$id->id])
        ->select('users.name','users.contact','roles.role','conscents.declaration','items.item_image',
                 'counties.county','subcounties.subcounty','conscents.id','conscents.created_at','conscents.names','conscents.phone_number',
                 'conscents.attached_document')
        ->orderBy('conscents.created_at','desc')
        ->limit(1)
        ->get();

        $noconscent_available = "Sorry, Conscent is not available. Please check again later";
        if($this->checkPayment()->doesntExist()){
            return redirect()->back()->with('emessage','Please make payments to continue viewing conscent Details for the item(s)');
        }elseif(Payment::join('users','payments.user_id','users.id')
        ->where('payments.user_id',auth()->user()->id)
        ->where('payments.status', '!=', 'active')->exists()){
            return redirect()->back()->with('emessage','Your payments is overdue please subscribe to continue advertising your item(s)');
        }else{
        return view('admin.conscent-page',compact('display_all_conscent_details', 'noconscent_available'));
        }
    }
    public function BuyerViewConscent(Request $id){
        $display_all_conscent_details =Conscent::join('users','conscents.user_id','users.id')
        ->join('roles','conscents.role_id','roles.id')
        ->join('counties','conscents.county_id','counties.id')
        ->join('subcounties','conscents.subcounty_id','subcounties.id')
        ->join('items','conscents.item_id','items.id')
        ->where(['conscents.status'=>'active', 'conscents.item_id'=>$id->id])
        ->select('users.name','users.contact','roles.role','conscents.declaration','items.item_image',
                 'counties.county','subcounties.subcounty','conscents.id','conscents.created_at','conscents.names','conscents.phone_number')
        ->orderBy('conscents.created_at','desc')
        ->limit(1)
        ->get();

        $noconscent_available = "Sorry, Consent is not available. Please check again later";
        return view('admin.conscent-to-buyer',compact('display_all_conscent_details', 'noconscent_available'));
    }
    public function displayConscentForm($id){
        $edit_sell_items =Item::where('id',$id)->get();
        $officer_details =User::join('roles','users.role_id','roles.id')
        ->where('users.id',auth()->user()->id)
        ->select('users.*')
        ->get();
        $get_role=Role::select('role', 'id')->get();
        $get_county=County::select('county', 'id')->get();
        $get_subcounty=SubCounty::select('subcounty', 'id')->get();
        return view('admin.conscent-form', compact('edit_sell_items','get_role','officer_details','get_county','get_subcounty'));
    }
    public function createConscent(Request $request){
        $get_role_id= Role::where(\strtolower("role"), strtolower($request->role))->value('id');
        $get_county_id= County::where(\strtolower("county"), strtolower($request->county))->value('id');
        $get_subcounty_id= Subcounty::where(\strtolower("subcounty"), strtolower($request->subcounty))->value('id');
        Conscent::create(array(
            'user_id'=>Auth::user()->id,
            'names' =>$request->names,
            'phone_number' =>$request->phone_number,
            'item_id'=>$request->item_id,
            'role_id'=>$get_role_id,
            'county_id'=>$get_county_id,
            'subcounty_id'=>$get_subcounty_id,
            'declaration'=>$request->declaration
        ));
        return Redirect()->back()->with('message',"Your Conscent(s) details Saved successfully");
    }
    protected function uploadConscentDocument($id){
        $edit_sell_items =Item::where('id',$id)->get();
        $officer_details =User::join('roles','users.role_id','roles.id')
        ->where('users.id',auth()->user()->id)
        ->select('users.*')
        ->get();
        $get_role=Role::select('role', 'id')->get();
        $get_county=County::select('county', 'id')->get();
        $get_subcounty=SubCounty::select('subcounty', 'id')->get();
        return view('admin.upload-conscent', compact('edit_sell_items','get_role','officer_details','get_county','get_subcounty'));
    }
    public function createConscentWithUpload(Request $request){
        $officer_conscent_document=$request->attached_document;
        $attached_conscent=$officer_conscent_document->getClientOriginalName();
        $request->file('attached_document')->move('conscents-documents/',$attached_conscent);

        $get_role_id= Role::where(\strtolower("role"), strtolower($request->role))->value('id');
        $get_county_id= County::where(\strtolower("county"), strtolower($request->county))->value('id');
        $get_subcounty_id= Subcounty::where(\strtolower("subcounty"), strtolower($request->subcounty))->value('id');
        Conscent::create(array(
            'user_id'=>Auth::user()->id,
            'names' =>$request->names,
            'phone_number' =>$request->phone_number,
            'item_id'=>$request->item_id,
            'role_id'=>$get_role_id,
            'county_id'=>$get_county_id,
            'subcounty_id'=>$get_subcounty_id,
            'declaration'=>$request->declaration,
            'attached_document'=>$attached_conscent
        ));
        return Redirect()->back()->with('message',"Your Conscent(s) details Saved successfully");
    }
}

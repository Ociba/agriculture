<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Farm;
use App\District;
use App\County;
use App\Subcounty;

class FarmController extends Controller
{
    //
    public function displayFrontFarms(){
        $display_farms= Farm::join('users','farms.user_id','users.id')
        ->join('districts','farms.district_id','districts.id')
        ->join('counties','farms.county_id','counties.id')
        ->join('subcounties','farms.subcounty_id','subcounties.id')
        ->where('farms.status','active')
        ->select('farms.farm_name','farms.activity','farms.statement','farms.image','districts.district',
                'counties.county','subcounties.subcounty','farms.id')
        ->get();
        return view('front.farming', compact('display_farms'));
    }
    public function addFarmForm(){
        if(in_array('Can add farm', auth()->user()->getUserPermisions())){
        $get_districts =District::select('district','id')->get();
        $get_county =County::select('county','id')->get();
        $get_subcounty =Subcounty::select('subcounty','id')->get();
        return view('admin.farms-form', compact('get_districts','get_county','get_subcounty'));
        }else{
            return redirect('/404');
        }
    }
    public function createFarm(Request $request){
        if(empty($request->farm_name)){
            return Redirect()->back()->withInput()->withErrors("Farm name cannot be empty");
        }
        if(empty($request->activity)){
            return Redirect()->back()->withInput()->withErrors("Activity cannot be empty");
        }
        if(empty($request->image)){
            return Redirect()->back()->withInput()->withErrors("Image cannot be empty");
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
      if(Subcounty::where(\strtolower('subcounty'), strtolower($request->subcounty))->exists()){
        $get_subcounty= subcounty::where("subcounty", $request->subcounty)->value('id');
      }
      else{
        Subcounty::create(array('subcounty'=>$request->subcounty
       ));
       
      }
       $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
       $get_county_id= County::where(\strtolower("county"), strtolower($request->county))->value('id');
       $get_subcounty_id= Subcounty::where(\strtolower("subcounty"), strtolower($request->subcounty))->value('id');
        if($request->hasFile('image')) {

            $files = $request->file('image');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/assets/images/';
            $files->move($folderpath, $file_name);

        Farm::create(array(
          'user_id'=>Auth::user()->id,
          'district_id'=>$get_district_id,
          'county_id'=>$get_county_id,
          'subcounty_id'=>$get_subcounty_id,
          'farm_name'=>$request->farm_name,
          'activity'=>$request->activity,
          'statement'=>$request->statement,
          'image'=>$file_name
        ));
        return Redirect()->back()->with('message',"You have Added farm(s) Successfully");
    }
        else {
            return Redirect()->back()->withErrors("Error, seems like the file wasn't uploaded");
        }
    }
    public function displayFarm(){
        if(in_array('Can view farms', auth()->user()->getUserPermisions())){
        $display_farms= Farm::join('users','farms.user_id','users.id')
        ->join('districts','farms.district_id','districts.id')
        ->join('counties','farms.county_id','counties.id')
        ->join('subcounties','farms.subcounty_id','subcounties.id')
        ->where('farms.status','active')
        ->select('farms.farm_name','farms.activity','farms.statement','farms.image','districts.district',
                'counties.county','subcounties.subcounty','farms.id')
        ->get();
        return view('admin.farm', compact('display_farms'));
        }else{
            return redirect('/404');
        }
    }
    public function editFarm($id){
        if(in_array('Can edit farms', auth()->user()->getUserPermisions())){
        $edit_farm_detail =Farm::where('id',$id)->get();
        $get_districts =District::select('district','id')->get();
        $get_county =County::select('county','id')->get();
        $get_subcounty =subcounty::select('subcounty','id')->get();
        return view('admin.edit-farm',compact('edit_farm_detail','get_districts','get_county','get_subcounty'));
        }else{
            return redirect('/404');
        }
    }
    public function updateFarm(Request $request, $id){
        $get_district_id= District::where(\strtolower("district"), strtolower($request->district))->value('id');
        $get_county_id= County::where(\strtolower("county"), strtolower($request->county))->value('id');
        $get_subcounty_id= Subcounty::where(\strtolower("subcounty"), strtolower($request->subcounty))->value('id');
        Farm::where('id',$id)->update(array(
          'user_id'=>Auth::user()->id,
          'district_id'=>$get_district_id,
          'county_id'=>$get_county_id,
          'subcounty_id'=>$get_subcounty_id,
          'farm_name'=>$request->farm_name,
          'activity'=>$request->activity,
          'statement'=>$request->statement,
          'image'=>$request->image
        ));
        return Redirect()->back()->withInput()->with('message','Farm details has been updated successfully');
    }
    public function deleteFarm($id){
        Farm::where('id', $id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withInput()->withErrors('Farm details has been deleted successfully');
    }
}

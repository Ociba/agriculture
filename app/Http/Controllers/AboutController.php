<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Farmer;
use App\Feedback;
use App\Farm;
use App\User;
use App\Product;
use App\Doctors;
class AboutController extends Controller
{
    //
    public function displayAbout(){
        $show_farmer_detail =Farmer::join('users','famers.user_id','users.id')
        ->join('profiles','famers.profile_id','profiles.id','famers.id')
        ->where('famers.status','active')
        ->select('users.name','profiles.image')->get();
        $display_feedback =Feedback::where('status','active')->get();
        $display_members_count =User::join('roles','users.role_id','roles.id')
        ->where('users.role_id',4)
        ->count();
        $display_doctors_count =Doctors::join('users','doctors.user_id','users.id')
        ->join('districts','doctors.district_id','districts.id')
        ->where('doctors.status','active')
        ->count();
        $display_farms_count =Farm::join('users','farms.user_id','users.id')
        ->where('farms.status','active')
        ->count();
        $display_products_count =Product::join('users','products.user_id','users.id')
        ->where('products.status','active')
        ->count();
        return view('front.about-us',compact('show_farmer_detail','display_feedback','display_members_count',
                     'display_doctors_count','display_farms_count','display_products_count'));
    }
}

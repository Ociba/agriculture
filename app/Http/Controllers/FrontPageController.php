<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Faq;
use App\Feature;
use App\Feedback;
use App\Market;
use App\News;
use App\Sponsor;
use App\Subscription;
use App\Gallery;
use App\User;
use App\Farm;
use App\Doctors;
use App\Product;

class FrontPageController extends Controller
{
    //
    public function displayFrontHomePage(){
        $display_frequently_asked_questions =Faq::join('users','faqs.user_id','users.id')
        ->where('faqs.status','active')
        ->select('faqs.question')->get();
        $show_feature =Feature::join('users','features.user_id','users.id')
        ->where('features.status','active')
        ->select('users.name','features.id','features.heading','features.statement','features.image')
        ->get();
        $display_feedback =Feedback::where('status','active')->get();
        $show_market_products =Market::join('users','market_products.user_id','users.id')
        ->where('market_products.status','active')
        ->select('market_products.name','market_products.image','market_products.id')
        ->get();
        $show_news =News::join('users','news.user_id','users.id')
        ->where('news.status','active')
        ->select('news.subject','news.image','users.name','news.id')
        ->get();
        $show_sponsors =Sponsor::join('users','sponsors.user_id','users.id')
        ->where('sponsors.status','active')
        ->select('sponsors.sponsor','sponsors.image','users.name','sponsors.id')
        ->get();
        $display_subscription =Subscription::where('status','active')->get();
        return view('front.template' ,compact('display_frequently_asked_questions','show_feature',
        'display_feedback','show_market_products','show_news','show_sponsors','display_subscription'));
    }
    public function showFrontPages(){
        $show_feature =Feature::join('users','features.user_id','users.id')
        ->where('features.status','active')
        ->select('users.name','features.id','features.heading','features.statement','features.image')
        ->get();
        $display_feedback =Feedback::where('status','active')->get();
        $show_gallery =Gallery::join('users','galleries.user_id','users.id')
        ->where('galleries.status','active')
        ->select('galleries.title','galleries.message','galleries.image','users.name','galleries.id')->get();
        $show_sponsors =Sponsor::join('users','sponsors.user_id','users.id')
        ->where('sponsors.status','active')
        ->select('sponsors.sponsor','sponsors.image','users.name','sponsors.id')
        ->get();
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
       return view('welcome', compact('show_feature','display_feedback','show_gallery','show_sponsors','display_members_count',
                    'display_doctors_count','display_farms_count','display_products_count'));
    }
}

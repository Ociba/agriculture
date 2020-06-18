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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(in_array('Can view dashboard', auth()->user()->getUserPermisions())){
        return view('admin.dashboard');
        }else{
            return redirect("/display-profile");
        }
    }
    public function documentationData(){
        return view('admin.documentation');
    }
    public function loginRegistration(){
        return view('admin.Login');
    }
    public function documentationDashboardDetails(){
        return view('admin.documentation-dash');
    }
    public function menuDetail(){
        return view('admin.menu');
    }
    public function Functionality(){
        return view('admin.functionality');
    }
    public function frontPages(){
        return view('admin.front-pages');
    }
    public function conclusion(){
        return view('admin.conclusion');
    }
}

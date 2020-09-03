<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use App\Profiles;
use App\User;
use App\Emergency;
use App\Item;
use App\Price;
use App\Doctors;
use App\Message;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'contact','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function emergencies()
    {
        return $this->hasMany('App\Emergency');
    }
    public function getLoggedInUserLogo(){
        $user_logo = Profiles::where('user_id', '=', $this->id)->value('image');;
        if(empty($user_logo)){
            $user_logo = 'item.jpg';
        }
        return $user_logo;
    }
        public function getUsersRole(){
            $user_role = DB::table('users')->join('roles','users.role_id','roles.id')->where('users.id',Auth::user()->id)
            ->value('role');
            return $user_role;
        }
    public function getUserPermisions(){
        $empty_permissions_array = [];
        $permissions_array = DB::table('permission_roles')
        ->join('permissions','permissions.id','permission_roles.permission_id')
        ->where('role_id',Auth::user()->role_id)
        ->select('permissions.permission')->get();
        foreach(json_decode($permissions_array,true) as $permissions){
                array_push($empty_permissions_array,$permissions["permission"]);
        }
        return $empty_permissions_array;
    }
    public function getUserDistricts(){
        $empty_permissions_array = [];
        $permissions_array = DB::table('districts')
        ->join('users','districts.user_id','users.user_id')
        //->where('role_id',Auth::user()->role_id)
        ->select('districts.district')->get();
        foreach(json_decode($permissions_array,true) as $permissions){
                array_push($empty_permissions_array,$permissions["districts"]);
        }
        return $empty_permissions_array;
    }
    public function countItemsOnSale(){
        $count_items_on_sale =Item::join('users','items.user_id','users.id')
        ->join('products','items.product_id','products.id')
        ->join('breeds','items.breed_id','breeds.id')
        ->join('weights','items.weight_id','weights.id')
        ->join('districts','items.district_id','districts.id')
        ->join('categories','items.category_id','categories.id')
        ->where('items.status','available')
        ->count();
        return $count_items_on_sale;
    }
    public function numberOfEmployees(){
        $count_employees =User::join('roles','users.role_id','roles.id')
        ->where('users.role_id',"!=","4")
        ->count();
        return $count_employees;
    }
    public function getNumberOfEmergencies(){
      $determine_number_of_emergencies =Emergency::join('users','emergencies.user_id','users.id')
      ->join('products','emergencies.product_id','products.id')
      ->join('roles','emergencies.role_id','roles.id')
      ->join('districts','emergencies.district_id','districts.id')
      ->join('counties','emergencies.county_id','counties.id')
      ->join('villages','emergencies.village_id','villages.id')
      ->where('emergencies.status','active')
      ->count();
      return $determine_number_of_emergencies;
    }
    public function getNumberOfMarkets(){
        $count_number_of_markets =Price::join('users','prices.user_id','users.id')
        ->join('products','prices.product_id','products.id')
        ->join('days','prices.day_id','days.id')
        ->join('districts','prices.district_id','districts.id')
        ->join('counties','prices.county_id','counties.id')
        ->where('prices.market_name')
        ->orwhere('prices.status','active')
        ->count();
        return $count_number_of_markets;
      }

     
    //Pie chart 1
    public function getNumberOfVetenaryDoctors(){
        $count_all_vetenary_doctors = Doctors::join('users','doctors.user_id','users.id')
        ->join('districts','doctors.district_id','districts.id')
        ->join('roles','doctors.role_id','roles.id')
        ->where('doctors.role_id', 5)
         ->where('doctors.status','active')->count();
        return $count_all_vetenary_doctors;
    }
    public function getNumberOfFisheriesOfficers(){
        $count_all_fisheries_officers = User::join('roles','users.role_id','roles.id')
            ->where('users.role_id',7)->count();
        return $count_all_fisheries_officers;
    }
    public function getNumberOfAgricultureOfficers(){
        $count_all_agriculture_officers = Doctors::join('roles','doctors.role_id','roles.id')
        ->join('districts','doctors.district_id','districts.id')
        ->join('users','doctors.user_id','users.id')
        ->where('doctors.role_id',6)
        ->where('doctors.status','active')->count();
        return $count_all_agriculture_officers;
    }
    public function getNumberOfForestryOfficers(){
        $count_all_forestry_officers = User::join('roles','users.role_id','roles.id')
            ->where('users.role_id',8)->count();
        return $count_all_forestry_officers;
    }
    public function getNumberOfMinistryOfficials(){
        $count_all_ministry_officials = User::join('roles','users.role_id','roles.id')
            ->where('users.role_id',3)->count();
        return $count_all_ministry_officials;
    }
    public function getNumberOfProducts(){
        $count_all_products =Product::join('users','products.user_id','users.id')
        ->where('products.status','active')->count();
        return $count_all_products;
    }
    public function getNumberOfBreeds(){
        $count_all_breeds =Breed::join('users','breeds.user_id','users.id')
        ->where('breeds.status','active')->count();
        return $count_all_breeds;
    }
    public function getNumberOfSponsors(){
        $count_all_Sponsors =Sponsor::join('users','sponsors.user_id','users.id')
        ->where('sponsors.status','active')->count();
        return $count_all_Sponsors;
    }
    public function getNumberOfFarms(){
        $count_all_farms =Farm::join('users','farms.user_id','users.id')
        ->join('districts','farms.district_id','districts.id')
        ->join('counties','farms.county_id','counties.id')
        ->join('villages','farms.village_id','villages.id')
        ->where('farms.status','active')->count();
        return $count_all_farms;
    }

    public function getItemsAveragePrice(){
        /**
         * get all the products from the products table,
         * we use a for each loop to get the products ids, and push the id in a unique array.
         * use a for loop to loop through the array as we get the sum of the prices of the items_id[$i]
         */
        $items_id = [];
        $item_prices = [];
        $all_items = Product::get();
        foreach($all_items as $item){
            if(in_array($item->id, $items_id)){
                continue;
            }else{
                array_push($items_id, $item->id);
            }
        }
        for($i=0; $i<count($items_id); $i++){
            $price_sum = Price::where('product_id',$items_id[$i])->sum('price');
            //get total number of items of the same id
            $total_number_of_items =Price::where('product_id',$items_id[$i])->count();
            if($price_sum == 0){
                continue;
            }else{
                array_push($item_prices, ($price_sum / $total_number_of_items));
            }
        }
        return collect($item_prices);
    }

    public function getItemsNames(){
        $items_id = [];
        $item_names = [];
        $all_items_with_prices = Price::get();
        foreach($all_items_with_prices as $item){
            if(in_array($item->product_id, $items_id)){
                continue;
            }else{
                array_push($items_id, $item->product_id);
            }
        }
        for($i=0; $i<count($items_id); $i++){
            $product_name = price::join('products','prices.product_id','products.id')
            ->where('product_id',$items_id[$i])->value('product');
            if(in_array($product_name, $item_names)){
                continue;
            }else{
                array_push($item_names, $product_name);
            }
        }
        return collect($item_names);
    }
    public function getNumberOfSubscription(){
        $count_subScriptions =Subscription::all()->count();
        return $count_subScriptions;
    }
    
    public function timeForSubscription(){
        $display_subscription_time =Subscription::where('status','active')->select('created_at')->orderBy('created_at','desc')->value('created_at');
        return $display_subscription_time;
    }
    public function getNumberOfMessages(){
        $count_messages =Message::where('messages.status','approve')->count();
        return $count_messages;
    }
    public function timeForMessages(){
        $display_notif_time =Message::where('status','approve')->select('created_at')->orderBy('created_at','desc')->value('created_at');
        return $display_notif_time;
    }
    public function getNumberOfEmergencyReports(){
        $count_emergency_reports =Emergency::where('emergencies.status','active')->count();
        return $count_emergency_reports;
    }
    public function timeForEmergency(){
        $display_emergency =Emergency::where('status','active')->select('created_at')->orderBy('created_at','desc')->value('created_at');
        return $display_emergency;
    }
    public function totalAllNotifications(){
        $count_subScriptions =Subscription::all()->count();
        $count_messages =Message::where('messages.status','approve')->count();
        $count_emergency_reports =Emergency::where('emergencies.status','active')->count();
        $total_all_notifications =$count_emergency_reports+$count_messages+$count_subScriptions;
        return $total_all_notifications;
    }
    public function getFeedBack(){
        $feed_back = DB::table('feedbacks')->where('status','approve')->take(3)->get();
        return collect($feed_back);
    }
    public function getNumberOfApprovedFeedback(){
        $count_approved_feedback =DB::table('feedbacks')->where('status','approve')->count();
        return $count_approved_feedback;
    }
}

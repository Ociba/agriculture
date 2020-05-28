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
        ->join('counties','items.county_id','counties.id')
        ->join('villages','items.village_id','villages.id')
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
      //Cereals Each Month
    public function getAveragePricePerMonth(){
        $months_array = [];
        $prices = Price::whereYear('created_at', date('Y'))
        ->select(DB::raw('MONTHNAME(created_at) month'))
        ->orderBy('month', 'Asc')
        ->groupBy('month')
        ->get();
        foreach($prices as $price){
            array_push($months_array, $price->month);
        }
        $months_array = ["January","February","March","April","May","June","July","August","September","October","November","December"];
        return $months_array;
    }
     //Prices for the whole Year for every month
     public function getVegetablesAveragePricePerMonths(){
        $months_array = [];
        $vegetable = Price::whereYear('created_at', date('Y'))
        ->select(DB::raw('MONTHNAME(created_at) month'))
        ->orderBy('month', 'Asc')
        ->groupBy('month')
        ->get();
        foreach($vegetable as $vegetable){
            array_push($months_array, $vegetable->month);
        }
        $months_array = ["January","February","March","April","May","June","July","August","September","October","November","December"];
        return $months_array;
    }

    public function getJanuaryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"January")->get()->count();
        return $count;
    }
    public function getFebrauryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"February")->get()->count();
        return $count;
    }
    public function getMarchPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"March")->get()->count();
        return $count;
    }
    public function getAprilPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"April")->get()->count();
        return $count;
    }
    public function getMayPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"May")->get()->count();
        return $count;
    }
    public function getJunePrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"June")->get()->count();
        return $count;
    }
    public function getJulyPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"July")->get()->count();
        return $count;
    }
    public function getAugustPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"August")->get()->count();
        return $count;
    }
    public function getSeptemberPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"September")->get()->count();
        return $count;
    }
    public function getOctoberPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"October")->get()->count();
        return $count;
    }
    public function getNovemberPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"November")->get()->count();
        return $count;
    }
    public function getDecemberPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"December")->get()->count();
        return $count;
    }

      //Prices cereals for whole Year

    public function getPriceInJanuary(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"January")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getPriceInFebruary(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"February")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getPriceInMarch(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"March")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getPriceInApril(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"April")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getPriceInMay(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"May")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getPriceInJune(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"June")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getPriceInjuly(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"July")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getPriceInAugust(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"August")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getPriceInSeptember(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"September")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getPriceInOctober(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"October")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getPriceInNovember(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"November")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getPriceInDecember(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"December")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }

     //Prices Animals for whole Year
     public function getAverageAnimalPricePerMonth(){
        $months_array = [];
        $animals = Price::whereYear('created_at', date('Y'))
        ->select(DB::raw('MONTHNAME(created_at) month'))
        ->orderBy('month', 'Asc')
        ->groupBy('month')
        ->get();
        foreach($animals as $animal){
            array_push($months_array, $animal->month);
        }
        $months_array = ["January","February","March","April","May","June","July","August","September","October","November","December"];
        return $months_array;
    }

     public function getAnimalPriceInJanuary(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"January")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getAnimalPriceInFebruary(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"February")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getAnimalPriceInMarch(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"March")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getAnimalPriceInApril(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"April")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getAnimalPriceInMay(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"May")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getAnimalPriceInJune(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"June")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getAnimalPriceInjuly(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"July")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getAnimalPriceInAugust(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"August")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getAnimalPriceInSeptember(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"September")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getAnimalPriceInOctober(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"October")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getAnimalPriceInNovember(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"November")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getAnimalPriceInDecember(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"December")
        ->where('status','active')
        ->get()->sum('Price');
        return $count;
    }
    public function getPoultryAveragePricePerMonths(){
        $months_array = [];
        $poultries = Price::whereYear('created_at', date('Y'))
        ->select(DB::raw('MONTHNAME(created_at) month'))
        ->orderBy('month', 'Asc')
        ->groupBy('month')
        ->get();
        foreach($poultries as $poultry){
            array_push($months_array, $poultry->month);
        }
        $months_array = ["January","February","March","April","May","June","July","August","September","October","November","December"];
        return $months_array;
    }
    //Average Prices for Poultry
    public function getJanuaryPoultryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"January")->get()->count();
        return $count;
    }
    public function getFebrauryPoultryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"February")->get()->count();
        return $count;
    }
    public function getMarchPoultryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"March")->get()->count();
        return $count;
    }
    public function getAprilPoultryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"April")->get()->count();
        return $count;
    }
    public function getMayPoultryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"May")->get()->count();
        return $count;
    }
    public function getJunePoultryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"June")->get()->count();
        return $count;
    }
    public function getJulyPoultryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"July")->get()->count();
        return $count;
    }
    public function getAugustPoultryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"August")->get()->count();
        return $count;
    }
    public function getSeptemberPoultryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"September")->get()->count();
        return $count;
    }
    public function getOctoberPoultryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"October")->get()->count();
        return $count;
    }
    public function getNovemberPoultryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"November")->get()->count();
        return $count;
    }
    public function getDecemberPoultryPrices(){
        $count = Price::whereYear('created_at', date('Y'))->where(DB::raw("(MONTHNAME(created_at))"),"December")->get()->count();
        return $count;
    }
    //Pie chart 1
    public function getNumberOfVetenaryDoctors(){
        $count_all_vetenary_doctors = User::join('roles','users.role_id','roles.id')
            ->where('users.role_id',5)->count();
        return $count_all_vetenary_doctors;
    }
    public function getNumberOfFisheriesOfficers(){
        $count_all_fisheries_officers = User::join('roles','users.role_id','roles.id')
            ->where('users.role_id',7)->count();
        return $count_all_fisheries_officers;
    }
    public function getNumberOfAgricultureOfficers(){
        $count_all_agriculture_officers = User::join('roles','users.role_id','roles.id')
            ->where('users.role_id',6)->count();
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
}

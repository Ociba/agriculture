<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use App\Profiles;
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
    public function getUserRole(){
        $get_user_role =User::join('roles','users.role_id','roles.id')
        ->where('role_id',Auth::user()->id)
        ->select('roles.role');
        return  $get_user_role;
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
}

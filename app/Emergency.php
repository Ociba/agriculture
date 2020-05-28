<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Role;
use App\SignsSymptoms;
use App\District;
use App\County;
use App\Village;
use App\User;

class Emergency extends Model
{
    //
    protected $fillable =['user_id','role_id','district_id','county_id','village_id','product_id',
                          'problem','affected_number','image'];
public function products()
{
    return $this->belongsTo('App\Product','product_id');
} 
public function roles()
{
    return $this->belongsTo('App\Role','role_id');
} 
public function districts()
{
    return $this->belongsTo('App\District','district_id');
} 
public function counties()
{
    return $this->belongsTo('App\County','county_id');
} 
public function villages()
{
    return $this->belongsTo('App\Village','village_id');
}  
public function users()
{
    return $this->belongsTo('App\User','user_id');
} 
}

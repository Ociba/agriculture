<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    //
    protected $fillable =['user_id','product_id','district_id','county_id','market_name','day_id','quantity','price'];
}

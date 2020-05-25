<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable =['user_id','product_id','breed_id','weight_id','district_id','county_id','village_id',
                         'price','category_id','number','item_image','contact'];
}

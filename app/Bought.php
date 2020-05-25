<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bought extends Model
{
    //
    protected $fillable =['product_id','breed_id','weight_id','district_id','category_id','number'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    //
    protected $table="market_products";
    protected $fillable =['user_id','name','image'];
}

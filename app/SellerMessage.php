<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellerMessage extends Model
{
    //
    protected $fillable =['seller_id','message','buyers_name','phone_number'];
}

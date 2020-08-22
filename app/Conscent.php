<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conscent extends Model
{
    //
    protected $fillable =['user_id','doctor_id','role_id','item_id','county_id','subcounty_id','declaration'];
}

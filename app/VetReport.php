<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VetReport extends Model
{
    //
    protected $fillable = ['farmer_name','user_id','farmer_contact','doctor_name','doctor_contact','treatment','number'];
}

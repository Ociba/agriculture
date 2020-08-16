<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorRequest extends Model
{
    //
    protected $fillable =['user_id','product_id','district_id','county_id','village_id','conditions','number','photo'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    //
    protected $fillable =['user_id','role_id','names','district_id','phone_number_1','phone_number_2','district'];
}

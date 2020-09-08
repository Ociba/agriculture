<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    //
    protected $fillable =['user_id','district_id','county_id','subcounty_id','activity','farm_name','statement','image',
                          'image'];
}

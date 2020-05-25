<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    //
    protected $table ="famers";
    protected $fillable =['user_id','profile_id','name','image'];
}

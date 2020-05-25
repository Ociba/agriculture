<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Emergency;

class Product extends Model
{
    //
    protected $fillable =['user_id','product'];
    public function emergencies()
    {
        //product has many emergencies
        return $this->hasMany('App\Emergency');
    }
}

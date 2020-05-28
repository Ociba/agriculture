<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conscent extends Model
{
    //
    protected $fillable= ['user_id','declaration','item_id','role_id','product_id'];
}

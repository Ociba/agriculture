<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conscent extends Model
{
    //
    protected $fillable =['user_id','role_id','names','phone_number','item_id','county_id','subcounty_id','declaration','attached_document'];
}

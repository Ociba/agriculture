<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Emergency;

class Role extends Model
{
    //
    protected $fillable =['role','status'];

    public function emergencies()
    {
        return $this->hasMany('App\Emergency');
    }
}

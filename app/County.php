<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Emergency;

class County extends Model
{
    //
    protected $fillable =['county'];

    public function emergencies()
    {
        return $this->hasMany('App\Emergency');
    }
}

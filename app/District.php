<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Emergency;

class District extends Model
{
    //
    protected $fillable =['district','user_id'];

    public function emergencies()
    {
        return $this->HasMany('App\Emergency');
    }
}

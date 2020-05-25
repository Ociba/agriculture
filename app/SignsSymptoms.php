<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Emergency;

class SignsSymptoms extends Model
{
    //
    protected $table ="signs_symptoms";
    protected $fillable =['user_id','signs_symptoms'];


    public function emergencies()
    {
        return $this->hasMany('App\Emergency');
    }
}

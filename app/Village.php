<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Emergency;

class Village extends Model
{
    //
    protected $fillable =['village'];

    public function emergencies()
    {
        return $this->belongsTo('App\Emergency');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExaminationTreatment extends Model
{
    //
    protected $table ="examination_treatments";
    protected $fillable =['user_id','signs_symptom_id','weight_id','disease_id','drug_id','week_id',
                          'month_id','bill','deposit','balance','product_id'];
}

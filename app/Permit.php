<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    //
    protected $fillable =['user_id','product_id','sellers_name','contact','buyers_name','buyers_contact','sellers_ID',
                         'buyer_ID','description','Number_of_items','local_council_one_name','phone_number','role_id',
                         'vet_contact','item_image','district_id','to_destination','name','receipt_number'];
}

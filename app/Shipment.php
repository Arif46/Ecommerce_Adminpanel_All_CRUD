<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'first_name','last_name','company_name', 'country','street_address','city','district','post_code','phone','email'
     ];
}

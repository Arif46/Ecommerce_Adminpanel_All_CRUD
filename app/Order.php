<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
       'product_id','shipping_id','delivery_charge', 'discount','subtotal','total','status',
    ];
}

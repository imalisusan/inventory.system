<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=
    [
        'Product_Name','Order_Quantity','Customer_Name'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=
    [
        'Product_Name','Description','Product_Quantity'
    ];
}

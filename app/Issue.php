<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable=
    [
        'Product_Name','Quantity','Customer_Name'
    ];
}

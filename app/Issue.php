<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable=
    [
        'Product_Name','Issue_Quantity','Customer_Name'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=
    [
        'Customer_Name','Location'
    ];
}

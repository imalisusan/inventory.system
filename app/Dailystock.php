<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dailystock extends Model
{
    protected $fillable =[
        'Employee_Name','Product_Name','Entry_Quantity'
    ];
}

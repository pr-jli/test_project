<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password',
        'roll_number' ,'admission_number',
        'mobile_number','year','gender' 
    ];
}

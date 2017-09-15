<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = array('first_name','last_name','email','gender','phone_number');
}

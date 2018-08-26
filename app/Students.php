<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Foundation\Auth\User as Authenticable;

class Students extends Authenticable
{
    //
     
 
     protected $guard='students';

     protected $fillable=['fname','id','idfirst','lname', 'mname','username','password'];

     protected $dates = ['deleted_at'];



   
}



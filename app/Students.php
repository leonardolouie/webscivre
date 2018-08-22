<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Students extends Model
{
    //
     
 


     protected $fillable=['fname','id','idfirst','lname', 'mname','username','password'];

      protected $dates = ['deleted_at'];



   

}



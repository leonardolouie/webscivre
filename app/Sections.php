<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    //
        


    public function user()
    {


    	return $this->belongsTo('App\User');
    }


    public function GetCreatedby()
    {


    	return User::where('id', $this->created_by)->first()->name;
    }

    public function GetTeacherName()
    {



    	return User::where('id', $this->teacher_id)->first()->first_name;
    }
      
}

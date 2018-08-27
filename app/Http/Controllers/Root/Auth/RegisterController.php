<?php

namespace App\Http\Controllers\Root\Auth;

//use Notify;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Alert;

class RegisterController extends Controller
{
   

    public function ShowRegisterForm()
    {

       /*
          $result = User::all();


         if(!empty($result))
            return redirect('/login');
         else*/
           
           return view('root.auth.register');
      
      

    }



       public function store(Request $request)
       {

        $request->validate([

        'id'=> 'required|unique:Users|numeric',
        'name' => 'required|unique:Users',
        'password' => 'required|min:8',
       
          ]);

   
    $User = new User;
        

      $User->id = request('id');
      $User->first_name=request('fname');
      $User->last_name=request('mname');
      $User->middle_name=request('lname');
      $User->email =request('email');
      $User->name=request('name');
      $User->password= bcrypt(request('password'));
      $User->type=request('type');
      $User->save();


      Alert::success('Sucessfully added new admin account', 'Name'.request('fname'))->autoclose(3500);

      return redirect('login');

    }
   
}

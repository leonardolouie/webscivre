<?php

namespace App\Http\Controllers\Api;





use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Passport\Client;
use function MongoDB\BSON\toJSON;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

use DB;
use Auth;
use Carbon\Carbon;
use App\Students;
class MobileController extends Controller
{



   public function my_first_api()
    {


       $data = DB::table('users')->get();

            
       return response()->json($data);
        

   }

   public function store(Request $request)
   {
            



        $valid = validate($request->only('id', 'name', 'password'), [
        'id'=> 'required|unique:Students|numeric',
        'name' => 'required|unique:Students',
        'password' => 'required|min:8',
        ]);

        if ($valid->fails()) {
            $jsonError=response()->json($valid->errors()->all(), 400);

            return \Response::json($jsonError);
        }
          
         else{


     $student = new Students;
        

      $student->id = request('id');
      $student->first_name=request('fname');
      $student->last_name=request('mname');
      $student->middle_name=request('lname');
      $student->name=request('name');
      $student->password= bcrypt(request('password'));
      $student->save();
      
      $message = ['message' => "Registered User"];
     

      return response()->json($message);


      }


   }

   public function login(Request $request)
   {

      $message;


          
    /* $result = DB::table('students')->where(
      ['name' => request('username'), 'password' => bcrypt(request('password'))])->first();*/



        $valid = validator($request->only('name', 'password'),[
       
        'name' => 'required',
        'password' => 'required',
        ]);

        if ($valid->fails()) {
                  $jsonError=response()->json($valid->errors()->all(), 400);

                  return \Response::json($jsonError);
        }
          

         if(Auth::guard('mobile')->attempt(['name' => $request->name, 'password' => $request->password]))
         {

                   
               return response('You are sucessfully Login');
            
         }

         else
         {

               return response('Username or Password is wrong');

         }
     







      }
    



}

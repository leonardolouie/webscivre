<?php

namespace App\Http\Controllers\Api;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Passport\Client;
use function MongoDB\BSON\toJSON;
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
            



        $valid = validator($request->only('id', 'name', 'password'), [
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
      $student->password= encrypt(request('password'));
      $student->save();
      
      $message = ['message' => "Registered User"];
     

      return response()->json($message);


      }


   }
    



}

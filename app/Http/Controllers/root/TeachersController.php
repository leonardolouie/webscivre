<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use Alert;
use Carbon\Carbon;

class TeachersController extends Controller
{
    //


   public function index()
    {

     $result = DB::table('users')->where('type', 'teacher')->get();
      //$result = DB::table('users')->get();
       return view('root.teachers.index',compact('result'));
        

   }

    public function create()
   {

        
      return view('root.teachers.create');

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


      Alert::success('Sucessfully added new Teacher', 'Name'.request('fname'))->autoclose(3500);

      return redirect('teacher/index');

    }



   public function show($user)

   {


        $result = DB::table('Users')->where('id', $user)->first();
        return view('root.teachers.show', compact('result'));


   }



      public function edit($user)
      {
              
      
        $result = DB::table('Users')->where('id', $user)->first();
        return view('root.teachers.edit', compact('result'));


      }






    public function update(Request $request, $id)
    {
            
      

      $request->validate([

         
        'password' => 'required|min:8',
       
    ]);

   
    $User = new User;
        

      $User->id = request('id');
      $User->first_name=request('fname');
      $User->last_name=request('mname');
      $User->middle_name=request('lname');
      $User->email =request('email');
      $User->name=request('name');
      $User->password= encrypt(request('password'));
      $User->type=request('type');
      $User->save();

        Alert::success('Sucessfully Updated', 'User ID:'.$id. 'Name: '.request('fname'))->autoclose(3500);

      return redirect('teacher/index');


      
    }


    public function destroy($id)
    {
          

          $user = User::find($id);
          $user->delete();

          Alert::success('Sucessfully Deleted', 'Teacher'.$id)->autoclose(3500);

          return redirect('teacher/index');
    }





}

<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Students;

class StudentController extends Controller
{
    


   public function index()
    {

        $result = Students::paginate(10);

        return view('root.students.index',compact('result'));
   }

   public function create()
   {


          return view('root.students.create');

   }

    public function create_submit(Request $request)
    {
            // Validate and store the blog post...

     $request->validate([

        'student_id'=> 'required|unique:Students|numeric',
        'password' => 'required|min:8',
       
    ]);


   
     $student = new Students;

      $student->student_id = request('student_id');
      $student->first_name=request('fname');
      $student->last_name=request('mname');
      $student->middle_name=request('lname');
      $student->name=request('username');
      $student->password= encrypt(request('password'));
      $student->save();

      return redirect('/index');
    }


    public function edit($id)
    {

          $post = students_infos::find($request('student_id'));
          $post->fname=request('fname');
          $post->lname=request('lname');
          $post->mname=request('mname');
          $post->email=request('email');
          $post->save();


        return redirect('createstudent');

    }

    public function delete_student(Request $request)
    {
           students_infos::where('id',$request('student_id'))->delete();

          return redirect('index');
    }











}

<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Students;

class StudentController extends Controller
{
    


   public function index()
    {

        $result = Students::orderBy('student_id', 'DESC')->get();

        return view('root.students.index',compact('result'));
   }

   public function create()
   {


          return view('root.students.create');

   }

    public function store(Request $request)
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

      return redirect('student/index');
    }


      public function edit($id)
      {

      
         $result = Students::find('student_id',$id);
        return view('root.students.edit', compact('result'));


      }






    public function update(Request $request,  $id)
    {
            


            $student = App\Students::find($id);
            $student->student_id = request('student_id');
            $student->first_name=request('fname');
            $student->last_name=request('mname');
            $student->middle_name=request('lname');
            $student->name=request('username');
            $student->password= encrypt(request('password'));
            $student->save();



        return redirect('student/index');

    }

    public function delete_student(Request $request)
    {
           students_infos::where('id',$request('student_id'))->delete();

          return redirect('index');
    }











}

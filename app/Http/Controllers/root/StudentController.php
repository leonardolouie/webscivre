<?php

namespace App\Http\Controllers\Root;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Students;
use DB;
use Auth;
use Alert;
use Carbon\Carbon;
class StudentController extends Controller
{
    



   public function index()
    {

      $result = DB::table('students')->get();

     return view('root.students.index',compact('result'));

        

   }
    public function create()
   {

        
      return view('root.students.create');

   }

   public function show($student)

   {


        $result = DB::table('students')->where('student_id', $student)->first();
        return view('root.students.show', compact('result'));


   }

  

    public function store(Request $request)
    {
            // Validate and store the blog post...

     $request->validate([

        'student_id'=> 'required|unique:Students|numeric',
        'name' => 'required|unique:Students',
        'password' => 'required|min:8',
       
    ]);


   
     $student = new Students;
        

      $student->student_id = request('student_id');
      $student->first_name=request('fname');
      $student->last_name=request('mname');
      $student->middle_name=request('lname');
      $student->name=request('name');
      $student->password= bcrypt(request('password'));
      $student->save();


      Alert::success('Sucessfully Added new Students', 'LRN / Student ID'.request('id'))->autoclose(3500);

      return redirect('student/index');
    }


      public function edit($student)
      {
              
      
         $result = DB::table('students')->where('student_id', $student)->first();
        return view('root.students.edit', compact('result'));


      }






    public function update(Request $request, $id)
    {
            
      

     $request->validate([

       //'id'=> 'required|unique:Students|numeric',
        'password' => 'required|min:8',
       
    ]);


   
     $student =  Students::find($id);
        

     // $student->id=request('id');
      $student->first_name=request('fname');
      $student->last_name=request('mname');
      $student->middle_name=request('lname');
      $student->name=request('username');
      $student->password= encrypt(request('password'));
      $student->save();

        Alert::success('Sucessfully Updated', 'LRN / Student ID'.$id. 'Name: '.request('fname'))->autoclose(3500);

      return redirect('student/index');


      
    }

    public function destroy($student)
    {
          

        // dd($student = Students::find($id));

          $result = DB::table('students')->where('student_id', $student)->first();
          $student->delete();

           Alert::success('Sucessfully Deleted', 'LRN / Student ID'.$student)->autoclose(3500);

          return redirect('student/index');
    }











}

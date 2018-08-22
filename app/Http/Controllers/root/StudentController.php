<?php

namespace App\Http\Controllers\Root;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Students;
use DB;
use Carbon\Carbon;
class StudentController extends Controller
{
    


   public function index()
    {

         $result = DB::table('students')->get();



        return view('root.students.index',compact('result'));
   }

   public function show($student)

   {


        $result = DB::table('students')->where('id', $student)->first();
        return view('root.students.show', compact('result'));


   }

   public function create()
   {

        
          return view('root.students.create');

   }

    public function store(Request $request)
    {
            // Validate and store the blog post...

     $request->validate([

        'id'=> 'required|unique:Students|numeric',
        'password' => 'required|min:8',
       
    ]);


   
     $student = new Students;
        

      $student->id = request('id');
      $student->first_name=request('fname');
      $student->last_name=request('mname');
      $student->middle_name=request('lname');
      $student->name=request('username');
      $student->password= encrypt(request('password'));
      $student->save();

      return redirect('student/index');
    }


      public function edit($student)
      {
              
      
         $result = DB::table('students')->where('id', $student)->first();
        return view('root.students.edit', compact('result'));


      }






    public function update($id)
    {
            
      

     
           
            $student = Students::find($id);
            $student->student_id = Input('student_id');
            $student->first_name=Input('fname');
            $student->last_name=Input('mname');
            $student->middle_name=Input('lname');
            $student->name=Input('username');
            $student->password= encrypt(Input('password'));
            $student->save();



        return redirect('student/index');

    }

    public function delete_student(Request $request)
    {
           students_infos::where('id',$request('student_id'))->delete();

          return redirect('index');
    }











}

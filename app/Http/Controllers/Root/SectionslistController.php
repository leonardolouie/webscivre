<?php
namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sections;
use App\Students;
use App\masterlist;
use DB;
use Auth;
use Alert;



class SectionslistController extends Controller
{



	  public function index()
	  {

	    
         
         $result = DB::table('sections')->where('id', Auth::user()->id)->get();

          return view('root.sectionlist.index',compact('result'));

         
	  }
	  

	   public function show($id)

 	    {


        $result = DB::table('masterlists')->where('section_id', $id)->join('students', 'masterlists.student_id', '=' ,'students.student_id')->select('masterlists.master_id', 'students.student_id', 'masterlists.created_at','masterlists.updated_at', 'students.first_name', 'students.last_name','students.middle_name','students.name')->get();

        $section = DB::table('sections')->where('section_id', $id)->get();

        return view('root.sectionlist.show', compact('result','section'));


   		}
         

      public function createstudent($id)
      {

         $result = DB::table('sections')->where('section_id', $id)->get();
        return view('root.sectionlist.create', compact('result'));

         }


         public function store(Request $request, $id)
         {

          //validation if id is existing in students
           

         $result = DB::table('students')->where('student_id', request('id'))->get();
            if($result->isEmpty())
               {
             Alert::warning($request->id, 'TEACHER ID NOT FOUND')->autoclose(3500);
            return redirect('sectionlist/show/'.$id);

            }


         $request->validate([

        'id'=> 'required',
        
       
         ]);


   
       $master = new masterlist;
        

      $master->student_id = request('id');
      $master->section_id = $id;
      $master->save();
    


     Alert::success('Sucessfully Added new Student', 'LRN / Student ID'.request('id'))->autoclose(3500);
     return redirect('sectionlist/show/'.$id);


         }


    public function destroy($id)

    {


        $result = DB::table('students')->where('student_id', $student)->first();
          $student->delete();

           Alert::success('Sucessfully Deleted', 'LRN / Student ID'.$student)->autoclose(3500);



    }
  		

      public function showinfo($id)

   		{



       $result = DB::table('students')->where('students.student_id', $id)->join('records', 'students.student_id', '=', 'records.student_id')->select('students.first_name', 'students.last_name', 'students.middle_name', 'records.score','records.record_id', 'records.created_at', 'records.updated_at')->get();



       $info = DB::table('students')->where('students.student_id', $id)->join('records', 'students.student_id', '=', 'records.student_id')->select('students.first_name', 'students.last_name', 'students.middle_name', 'records.score','records.record_id', 'records.created_at', 'records.updated_at')->get();

        


       return view('root.sectionlist.showinfo', compact('result', 'info'));



   		}


}



<?php
namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sections;
use App\students;
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


         public function store()
         {

               //validation if id is existing in students

          $



         }


   		public function showinfo($id)

   		{







   		}


}



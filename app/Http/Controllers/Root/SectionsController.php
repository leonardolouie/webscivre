<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sections;
use DB;
use Auth;
use Alert;

class SectionsController extends Controller
{
    //

     public function index()
    {

         $result = Sections::all();
        return view('root.sections.index',compact('result')); 

   }
 

    public function create()
    {


    	return view('root.sections.create');
    }
    


    public function store(Request $request)
    {
            // Validate and store the blog post...

     $request->validate([

        'id'=> 'required|numeric',
        'section_name' => 'required',
        'gradelevel' => 'required',
       
    ]);


   
     $section = new Sections;
        

      $section->teacher_id = request('id');
      $section->section_name=request('section_name');
      $section->grade_level=request('gradelevel');
      $section->created_by= Auth::User()->id;
      $section->save();


      Alert::success('Sucessfully Added new Section', 'Section Name'.request('section_name'))->autoclose(3500);

      return redirect('section/index');
    }

      public function destroy($id)
    {
          

          $section = Sections::find($id);
          $section->delete();

          Alert::success('Sucessfully Deleted', 'Section'.$id)->autoclose(3500);

          return redirect('section/index');
    }





}

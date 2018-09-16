<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sections;
use DB;
use Auth;
use Alert;
use App\User;

class SectionsController extends Controller
{
    //

     public function index()
    {

      $result = DB::table('users')->join('sections', 'users.id', '=' , 'sections.id')->select('sections.section_id','sections.section_name', 'users.first_name','users.last_name', 'users.middle_name','sections.description','sections.grade_level')->get();

       return view('root.sections.index',compact('result')); 

   }
 

    public function create()
    {


    	return view('root.sections.create');
    }
    


    public function store(Request $request)
    {
            // Validate and store the blog post...
     $section = new Sections;
         
     //dd($result = DB::table('sections')->where('id', 22222)->get());
      $result = User::find($request->id);
      if($result == null)
      {
        Alert::warning($request->id, 'TEACHER ID NOT FOUND')->autoclose(3500);
      return redirect('section/index');

      }

     $request->validate([

        'id'=> 'required|numeric',
        'section_name' => 'required',
        'gradelevel' => 'required',
       
    ]);


   
   
        

      $section->id = request('id');
      $section->section_name=request('section_name');
      $section->grade_level=request('gradelevel');
      $section->description=request('description');
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
    





    public function search(Request $request)
    {


          if($request->ajax())

          { 

            $output="";

                 $teachers = DB::table('users')->where('first_name', 'LIKE','%'.$request->search.'%')->orWhere('last_name', 'LIKE','%'.$request->search.'%')->get();


                 if($teacher)
                   {
                     
                     foreach ($teacher as $key => $teacher) {

                      $output ="<tr>". 
                          "<td>".$teacher->id. "</td>".
                          "<td>".$teacher->first_name. "</td>".
                          "<td>".$teacher->middle_name. "</td>".
                          "<td>".$teacher->last_name. "</td>".


                       "</tr>";
                     }

                        
                    }
                
                return Response($output);
          }


    }




}

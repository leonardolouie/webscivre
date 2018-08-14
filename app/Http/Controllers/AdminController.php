<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students_infos;


class AdminController extends Controller
{
    //


    public function index(){




    	return view('app.dashboard');
    }



    public function students(){

      $result = students_infos::paginate(5);

   return view('admin.createnewstudents',compact('result'));
    }


      public function createstudent(){

        $result = students_infos::paginate(5);

     return view('pages.createstudent',compact('result'));
      }










    public function teachers(){


        return view('admin.manageaccount');
    }





  public function store_student(Request $request)
    {
        // Validate and store the blog post...

           $request->validate([

                'student_id'=> 'required|unique:students_infos|numeric',
                'password' => 'required|min:8',
                'email' => 'required|unique:students_infos'

           ]);


         $concat= request('student_id').request('idfirst').request('idsecond').request('idthird');
         $post = new students_infos;

         $post->student_id = $concat;
         $post->fname=request('fname');
         $post->lname=request('lname');
         $post->mname=request('mname');
         $post->email=request('email');
         $post->password= encrypt(request('password'));
         $post->gradelevel=request('gradelevel');

         $post->save();

         return redirect('/admin');




    }

    public function store_teacher(Request $request)
    {





    }





}

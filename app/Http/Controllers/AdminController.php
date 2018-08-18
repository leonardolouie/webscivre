<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students_infos;


class AdminController extends Controller
{
    //


      public function createstudent()
      {

        $result = students_infos::paginate(10);

        return view('pages.createstudent',compact('result'));
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

      return response()-json($post);
    }


    public function update_student($id)
    {

          $post = students_infos::find($request('student_id'));
          $post->fname=request('fname');
          $post->lname=request('lname');
          $post->mname=request('mname');
          $post->email=request('email');
          $post->save();


        return redirect('createstudent/');

    }
/*
    public function delete_student(Request $request)
    {
           students_infos::where('id',$request('student_id'))->delete()

          return response()->json();
    }


*/



}

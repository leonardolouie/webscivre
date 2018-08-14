<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/admin','AdminController@index');
Route::get('/admin/createstudent','AdminController@students');
Route::get('/admin/createteacher','AdminController@teachers');
Route::post('/posts','AdminController@store_student');
Route::get('/createstudent', 'AdminController@createstudent');





  Route::resource('post','PostController');
  Route::POST('addPost','PostController@addPost');
  Route::POST('editPost','PostController@editPost');
  Route::POST('deletePost','PostController@deletePost');


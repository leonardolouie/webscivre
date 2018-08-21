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






//Routes for studenst 


Route::namespace('Root')->name('root.')->group(function () {
	Route::namespace('Auth')->group(function (){



    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::any('/logout','LoginController@logout')->name('logout');
    	});

	Route::middleware('auth')->group(function () {
		Route::get('/', 'DashboardController@index')->name('dashboard');
		Route::prefix('student')->name('student.')->group(function () {
		 	Route::get('index', 'StudentController@index');
		 	Route::get('create', 'StudentController@create');
		 	Route::get('{id}/edit', 'StudentController@edit');



		 	Route::POST('{id}/update', 'StudentController@update');
		 	Route::DELETE('destroy', 'StudentsController@destroy');
		 	Route::POST('create.submit', 'StudentController@store')->name('create');
		});
	});


});
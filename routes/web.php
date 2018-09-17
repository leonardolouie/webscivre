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
    Route::get('/register','RegisterController@showRegisterForm')->name('register');
    Route::post('/register', 'RegisterController@store');
    Route::any('/logout','LoginController@logout')->name('logout');
    	});

	Route::middleware('auth')->group(function () {
		Route::get('/', 'DashboardController@index')->name('dashboard');
		Route::prefix('student')->name('student.')->group(function () {
		 	Route::get('index', 'StudentController@index');
		 	Route::get('create', 'StudentController@create');
		 	Route::get('show/{id}', 'StudentController@show');
		 	Route::get('{id}/edit', 'StudentController@edit');

		 	//Practice route for sweet alert
		 //Route::get('/SweetAlert/{alertType?}', ['as'=>'SweetAlert','uses'=>'StudentController@test']);



		 	Route::POST('update/{id}', 'StudentController@update');
		 	Route::DELETE('destroy/{id}', 'StudentController@destroy')->name('destroy');
		 	Route::POST('store', 'StudentController@store')->name('store');
		});


        Route::prefix('teacher')->name('teacher.')->group(function () {
		 	Route::get('index', 'TeachersController@index');
		 	Route::get('create', 'TeachersController@create');
		 	Route::get('show/{id}', 'TeachersController@show');
		 	Route::get('{id}/edit', 'TeachersController@edit');

		   Route::POST('store', 'TeachersController@store')->name('store');
		   Route::POST('update/{id}', 'TeachersController@update');
		   Route::DELETE('destroy/{id}', 'TeachersController@destroy');
		

		 	
		});



        Route::prefix('section')->name('section.')->group(function () {
		 	Route::get('index', 'SectionsController@index');
		 	Route::get('create', 'SectionsController@create');
		 	Route::get('search' , 'SectionsControoler@search');
		 	Route::DELETE('destroy/{id}', 'TeachersController@destroy');
		

		 	 Route::POST('store', 'SectionsController@store')->name('store');
		 
		 	
		});



        Route::prefix('sectionlist')->name('sectionlist.')->group(function () {
		 	Route::get('index', 'SectionslistController@index');
		 	Route::get('show/{id}', 'SectionslistController@show');
		    Route::get('show/{id}/create', 'SectionslistController@createstudent');
		 	
		 
		 	
		});





	});


});
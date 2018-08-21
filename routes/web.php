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
    	});

	Route::middleware('auth')->group(function () {
		Route::get('/', 'DashboardController@index');
		Route::prefix('student')->name('student.')->group(function () {
		 	Route::get('index', 'StudentController@index');
		 	Route::get('create', 'StudentController@create');
		 	Route::post('create.submit', 'StudentController@create_submit');
		});
	});


});
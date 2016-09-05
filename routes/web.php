<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


/*
 * Students Routes
 */

Route::get('/students','StudentsController@index');
Route::get('/students/create','StudentsController@create');
Route::get('/students/{student}','StudentsController@show');
Route::post('/students','StudentsController@store');


/*
 * Courses Routes
 */
Route::get('/courses','CoursesController@index');
Route::get('/courses/create','CoursesController@create');
Route::get('/courses/{course}','CoursesController@show');
Route::post('/courses','CoursesController@store');

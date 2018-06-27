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
    return view('index');
});

//Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/exercise', 'ExerciseController@index');
Route::get('/exercise/{exerciseid}', 'ExerciseController@detail');

Route::get('/training', 'TrainingController@index');
Route::get('/training/{trainingid}', 'TrainingController@detail');
Route::post('/training/{trainingid}', 'TrainingController@start');

Route::get('/training/{trainingid}/{order}', 'TrainingController@trainexercise');


Route::post('/training/{trainingid}/complete', 'TrainingController@complete');
Route::get('/traininguser','UserController@traininguser');

Route::post('/logout', 'MyLoginController@logout');
Route::post('/login', 'MyLoginController@authenticate');
Route::get('/login', function () {
    return view('index');
});

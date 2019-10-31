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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/validation','ValiditionController@showform');
Route::post('/validation','ValiditionController@validateform');


Route::get('custom-validation',['as'=>'custom-validation.get','uses'=>'CustomValidatorController@getCustomValidation']);
Route::post('custom-validation',['as'=>'custom-validation.post','uses'=>'CustomValidatorController@postCustomValidation']);



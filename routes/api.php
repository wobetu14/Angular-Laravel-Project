<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Route::get('v1/employees/{id?}','EmployeesController@index');
Route::post('v1/employee','EmployeesController@store');
//Route::post('v1/employees/{id}','EmployeesController@update');
//Route::delete('v1/employees/{id}','EmployeesController@destroy');

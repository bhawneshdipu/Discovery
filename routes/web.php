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

use App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee/show', 'EmployeeController@show');

Route::get('/employee/create', 'EmployeeController@create');


Route::get('/employee/login', 'EmployeeController@login');

Route::get('/employee/edit/{id}', 'EmployeeController@edit');


Route::post('/employee/update', 'EmployeeController@update');


Route::post('/employee/login', 'EmployeeController@verifyLogin');

Route::post('/employee', 'EmployeeController@store');




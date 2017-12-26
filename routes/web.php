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
    return view('Welcome.home');
});


Route::get('/menu','DiscoveryController@menu');

Route::get('/showItems','DiscoveryController@showitems');











//employee



Route::get('/employee/home', 'EmployeeController@home');

Route::get('/employee/show', 'EmployeeController@show');


Route::get('/employee/deleted', 'EmployeeController@deleted');


Route::get('/employee/create', 'EmployeeController@create');


Route::get('/employee/login', 'EmployeeController@login');

Route::get('/employee/edit/{id}', 'EmployeeController@edit');

Route::get('/employee/delete/{id}', 'EmployeeController@delete');


Route::post('/employee/update/{id}', 'EmployeeController@update');

Route::post('/employee/destroy/{id}', 'EmployeeController@destroy');



Route::get('/employee/recover/{id}', 'EmployeeController@recoverEdit');


Route::post('/employee/recover/{id}', 'EmployeeController@recover');


Route::post('/employee/login', 'EmployeeController@verifyLogin');

Route::get('/employee/logout', 'EmployeeController@logout');


Route::post('/employee', 'EmployeeController@store');


//category


Route::get('/category/home', 'CategoryController@home');

Route::get('/category/show', 'CategoryController@show');

Route::get('/category/deleted', 'CategoryController@deleted');

Route::get('/category/create', 'CategoryController@create');

Route::get('/category/edit/{id}', 'CategoryController@edit');

Route::get('/category/delete/{id}', 'CategoryController@delete');

Route::get('/category/recover/{id}', 'CategoryController@recoverEdit');


Route::post('/category/recover/{id}', 'CategoryController@recover');

Route::post('/category/update/{id}', 'CategoryController@update');

Route::post('/category/destroy/{id}', 'CategoryController@destroy');

Route::post('/category', 'CategoryController@store');




//Item


Route::get('/item/home', 'ItemController@home');

Route::get('/item/show', 'ItemController@show');

Route::get('/item/deleted', 'ItemController@deleted');

Route::get('/item/create', 'ItemController@create');

Route::get('/item/edit/{id}', 'ItemController@edit');

Route::get('/item/delete/{id}', 'ItemController@delete');

Route::get('/item/recover/{id}', 'ItemController@recoverEdit');


Route::post('/item/recover/{id}', 'ItemController@recover');

Route::post('/item/update/{id}', 'ItemController@update');

Route::post('/item/destroy/{id}', 'ItemController@destroy');

Route::post('/item', 'ItemController@store');


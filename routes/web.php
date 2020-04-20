<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/MyController', function () {
    return 'Hello World';
    });
    
Route::get('/employee', 'EmployeeController@index');

Route::get('/employee/get', 'EmployeeController@get');

Route::post('/employee', 'EmployeeController@update');

Route::delete('/employee/{user}', 'EmployeeController@destroy');
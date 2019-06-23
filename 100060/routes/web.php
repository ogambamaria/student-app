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

Route::view('/', 'ogamba.home');

Route::get('student', 'StudentsController@create');
Route::post('student', 'StudentsController@store');
Route::get('registered', 'StudentsController@index');

Route::get('fees', 'FeesController@create');
Route::post('fees', 'FeesController@store');
Route::get('search', 'FeesController@show');
Route::post('search', 'FeesController@show');
Route::get('paid', 'FeesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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


Route::get('/','ListingsController@index');

//point to index action ofr todos contrller
/*Route::get('/', 'TodosController@index');

Route::resource('todo','TodosController');*/



Auth::routes();

Route::resource('listings','ListingsController');

Route::get('/dashboard', 'DashboardController@index');




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
Route::get('/','UserController@index');

//Route::view : return a view
Route::view('/store', 'store')->name('users.view.store');
Route::post('store','UserController@store')->name('users.store');

Route::get('edit/{id}', 'UserController@showFormEditUser')->name('users.view.edit');
Route::post('edit/{id}','UserController@edit')->name('users.edit');

Route::get('delete/{id}','UserController@delete');

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

Route::get('add', 'UserController@showFormAddUser');
Route::post('add','UserController@add')->name('users.add');

Route::get('edit/{id}', 'UserController@showFormEditUser');
Route::post('edit/{id}','UserController@edit')->name('users.edit');

Route::get('delete/{id}','UserController@delete');

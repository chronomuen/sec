<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('login', 'PagesController@login');
//Route::get('{user_type}_{page}', 'PagesController@page');
//Route::get('/', 'PagesController@index');



Route::get('superadmin/create_user', 'SuperAdminController@create_user');
Route::get('superadmin/create_transaction', 'SuperAdminController@create_transaction');
Route::get('superadmin/assign_stages', 'SuperAdminController@assign_stages');
Route::get('superadmin/view_users', 'SuperAdminController@view_users');

Route::get('processor/create_transaction', 'ProcessorController@create_transaction');

Route::get('admin/create_user', 'AdminController@create_user');
Route::get('admin/create_transaction', 'AdminController@create_transaction');
Route::get('admin/assign_stages', 'AdminController@assign_stages');

Route::post('transaction/process', 'TransactionController@process');

Route::resource('superadmin', 'SuperAdminController');
Route::resource('admin', 'AdminController');
Route::resource('processor', 'ProcessorController');
Route::resource('customer', 'CustomerController');
Route::resource('transaction', 'TransactionController');
Route::resource('user', 'UserController');

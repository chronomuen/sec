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

Route::get('/', 'Auth\AuthController@getLogin');
//Route::get('/', ['middleware' => 'auth', 'uses' => 'Auth\AuthController@getLogin']);
//Route::get('{user_type}_{page}', 'PagesController@page');
//Route::get('/', 'PagesController@login');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('superadmin/create_user', 'SuperadminController@create_user');
Route::post('superadmin/edit_user', array('as' => 'superadmin/edit_user', 'uses' => 'SuperadminController@edit_user'));
Route::get('superadmin/view_users', array('as' => 'superadmin/view_users', 'uses' => 'SuperadminController@view_users'));
Route::get('superadmin/process_transactions', array('as' => 'superadmin/process_transactions', 'uses' => 'SuperadminController@process_transactions'));
Route::post('superadmin/process', array('as' => 'superadmin/process', 'uses' => 'SuperadminController@process'));
Route::post('superadmin/storeTransaction', array('as' => 'superadmin/storeTransaction', 'uses' => 'SuperadminController@store_transaction'));
Route::get('superadmin/create_transaction', array('as' => 'superadmin/create_transaction', 'uses' => 'SuperadminController@create_transaction'));
Route::get('superadmin/update_transaction', array('as' => 'superadmin/update_transaction', 'uses' => 'SuperadminController@update_transaction'));
Route::get('superadmin/out_transaction', array('as' => 'superadmin/out_transaction', 'uses' => 'SuperadminController@out_transaction'));


Route::get('processor/process_transactions', array('as' => 'processor/process_transactions', 'uses' => 'ProcessorController@process_transactions'));
Route::post('processor/process', array('as' => 'processor/process', 'uses' => 'ProcessorController@process'));
Route::post('processor/storeTransaction', array('as' => 'processor/storeTransaction', 'uses' => 'ProcessorController@store_transaction'));
Route::get('processor/create_transaction', array('as' => 'processor/create_transaction', 'uses' => 'ProcessorController@create_transaction'));
Route::get('processor/update_transaction', array('as' => 'processor/update_transaction', 'uses' => 'ProcessorController@update_transaction'));
Route::get('processor/out_transaction', array('as' => 'processor/out_transaction', 'uses' => 'ProcessorController@out_transaction'));


Route::post('transaction/process', 'TransactionController@process');

Route::post('customer/showTransaction', array('as' => 'customer/showTransaction', 'uses' => 'CustomerController@showTransaction'));
Route::get('customer', array('as' => 'customer', 'uses' => 'CustomerController@index'));

Route::resource('superadmin', 'SuperadminController');
Route::resource('admin', 'AdminController');
Route::resource('processor', 'ProcessorController');
Route::resource('customer', 'CustomerController');
Route::resource('transaction', 'TransactionController');
Route::resource('user', 'UserController');

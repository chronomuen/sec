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

Route::get('login', 'PagesController@login');
//Route::get('{user_type}_{page}', 'PagesController@page');
//Route::get('/', 'PagesController@index');



Route::get('superadmin/create_user', 'SuperAdminController@create_user');
Route::get('superadmin/edit_user', 'SuperAdminController@edit_user');
Route::get('superadmin/assign_stages', 'SuperAdminController@assign_stages');
Route::get('superadmin/view_users', 'SuperAdminController@view_users');

Route::get('superadmin/process_transactions', array('as' => 'superadmin/process_transactions', 'uses' => 'SuperAdminController@process_transactions'));
Route::post('superadmin/process', array('as' => 'superadmin/process', 'uses' => 'SuperAdminController@process'));
Route::post('superadmin/storeTransaction', array('as' => 'superadmin/storeTransaction', 'uses' => 'SuperAdminController@store_transaction'));
Route::get('superadmin/create_transaction', array('as' => 'superadmin/create_transaction', 'uses' => 'SuperAdminController@create_transaction'));
Route::get('superadmin/update_transaction', array('as' => 'superadmin/update_transaction', 'uses' => 'SuperAdminController@update_transaction'));
Route::get('superadmin/out_transaction', array('as' => 'superadmin/out_transaction', 'uses' => 'SuperAdminController@out_transaction'));


Route::get('processor/process_transactions', array('as' => 'processor/process_transactions', 'uses' => 'ProcessorController@process_transactions'));
Route::post('processor/process', array('as' => 'processor/process', 'uses' => 'ProcessorController@process'));
Route::post('processor/storeTransaction', array('as' => 'processor/storeTransaction', 'uses' => 'ProcessorController@store_transaction'));
Route::get('processor/create_transaction', array('as' => 'processor/create_transaction', 'uses' => 'ProcessorController@create_transaction'));
Route::get('processor/update_transaction', array('as' => 'processor/update_transaction', 'uses' => 'ProcessorController@update_transaction'));
Route::get('processor/out_transaction', array('as' => 'processor/out_transaction', 'uses' => 'ProcessorController@out_transaction'));


Route::post('transaction/process', 'TransactionController@process');

Route::post('showTransaction', array('uses' => 'CustomerController@showTransaction'));

Route::resource('superadmin', 'SuperAdminController');
Route::resource('admin', 'AdminController');
Route::resource('processor', 'ProcessorController');
Route::resource('customer', 'CustomerController');
Route::resource('transaction', 'TransactionController');
Route::resource('user', 'UserController');

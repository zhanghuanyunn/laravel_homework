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
Route::get('/','LinkedListController@main');

Route::any('construct','LinkedListController@construct');

Route::any('construct_view','LinkedListController@construct_view');

Route::any('update','LinkedListController@update');

Route::any('update_view','LinkedListController@update_view');

Route::any('insert','LinkedListController@insert');

Route::any('insert_view','LinkedListController@insert_view');

Route::any('push','LinkedListController@push');

Route::any('push_view','LinkedlistController@push_view');

Route::any('print_list','LinkedListController@print_list');

Route::any('pop','LinkedListController@pop');

Route::any('pop_view','LinkedListController@pop_view');

Route::any('delete','LinkedListController@delete')

;Route::any('delete_view','LinkedListController@delete_view');



//
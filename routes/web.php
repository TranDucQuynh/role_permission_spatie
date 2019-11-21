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

Route::get('/', function () {
    return view('welcome');
});


Route::get('list', 'PostController@index')->name('post.index');

Route::get('create', 'PostController@create')->name('post.create');
Route::post('store', 'PostController@store')->name('post.store');
Route::get('post/{id}', 'PostController@edit')->name('post.edit');
Route::put('post/{id}', 'PostController@update')->name('post.update');
Route::delete('{id}', 'PostController@destroy')->name('post.destroy');

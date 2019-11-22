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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('roles','RoleController');

// Route::get('roles', 'RoleController@index')->name('roles.index');
// Route::get('roles/create', 'RoleController@create')->name('roles.create');
// Route::post('roles', 'RoleController@store')->name('roles.store');
// Route::get('roles/{role}', 'RoleController@show')->name('roles.show');
// Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
// Route::put('roles/{role}', 'RoleController@update')->name('roles.update');
// Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy');



Route::get('list', 'PostController@index')->name('post.index');

Route::get('create', 'PostController@create')->name('post.create');
Route::post('store', 'PostController@store')->name('post.store');
Route::get('{id}', 'PostController@edit')->name('post.edit');
Route::put('{id}', 'PostController@update')->name('post.update');
Route::delete('{id}', 'PostController@destroy')->name('post.destroy');




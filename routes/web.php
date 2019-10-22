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
Route::group(['middleware' => 'auth'], function(){
  Route::resource('/admin/buku', 'BukuController');
  Route::get('/admin/add_buku', 'BukuController@add_buku');
  Route::get('/admin/edit_buku/{id}', 'BukuController@edit_buku');
  Route::get('/admin/store_buku', 'BukuController@store');
});

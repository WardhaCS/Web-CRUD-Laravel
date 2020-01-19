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

Route::get('/Asrama/boking', 'HomeController@boking')->name('boking');

Auth::routes();

Route::get('/Asrama/list', 'HomeController@list')->name('list');
Route::get('/Asrama/check', 'HomeController@check')->name('check');

Auth::routes();

Route::get('/Asrama/edit/{id}', 'HomeController@edit')->name('edit');
Route::get('/Asrama/check_edit', 'HomeController@check_edit')->name('check_edit');
Route::get('/Asrama/check_hapus/{id}/{pg}', 'HomeController@check_hapus')->name('check_hapus');

Auth::routes();

Route::put('/Asrama/update/{id}', 'HomeController@update');
Route::get('/Asrama/hapus/{id}', 'HomeController@delete');
Route::get('/Asrama/store', 'HomeController@store');

Route::get('/Asrama/chart', 'HomeController@chart');
Route::get('/Asrama/pdf/{id}', 'HomeController@pdf');

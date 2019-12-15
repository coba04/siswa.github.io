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



Auth::routes();
Route::get('/', 'AllController@index')->name('home');
Route::get('/home', 'AllController@index')->name('home2');

Route::get('/ruang','AllController@ruang')->name('ruang.index')->middleware('role:admin');
Route::get('/jenis','AllController@jenis')->name('jenis.index')->middleware('role:admin');
Route::get('/inventaris','AllController@inventaris')->name('inventaris.index')->middleware('role:admin');

Route::post('/ruang/simpan','AllController@simpanruang')->name('ruang.simpan')->middleware('role:admin');
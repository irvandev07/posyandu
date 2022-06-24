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
    return view('auths.login');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postloginpost','AuthController@postloginpost');

Route::get('/register','registerController@register');
Route::get('/logout','AuthController@logout');

Route::get('/dashboard','AdminController@dashboard')->middleware('auth');

Route::get('/daftar','TambahAnakController@daftar')->middleware('auth');
Route::post('/daftar/tambah','TambahAnakController@tambah')->middleware('auth');
Route::post('/daftar/{id}/update','TambahAnakController@update')->middleware('auth');
Route::get('/daftar/{id}/edit','TambahAnakController@edit')->middleware('auth');
Route::get('/daftar/{id}/hapus','TambahAnakController@hapus')->middleware('auth');

Route::get('/bpb','AdminController@bpb')->middleware('auth');
Route::get('/data_anak','AdminController@data_anak')->middleware('auth');
Route::get('/laporan','AdminController@laporan')->middleware('auth');
Route::get('/pemeriksaan','AdminController@pemeriksaan')->middleware('auth');
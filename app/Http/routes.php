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

//memanggil project tanpa method , bawaan laravel
Route::get('/', function () {
    return view('welcome');
});

//memanggil project dengan isi dari method
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

//memanggil view tanpa controller
Route::get('blog', function () {
	return view('blog');
});

//memanggil view dari controller
Route::get('apis', 'CobaController@index');

//mengambil isi data dari url
Route::get('/pegawai/{nama}', 'CobaController@index');

//mengambil isi data dari inputan
Route::get('/formulir', 'CobaController@formulir');
Route::post('/formulir/proses', 'CobaController@proses');

//template blade
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//form validasi
Route::get('/input', 'FormController@input');
Route::post('/proses', 'FormController@proses');
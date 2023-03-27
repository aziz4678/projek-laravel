<?php

use Illuminate\Support\Facades\Route;

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

//Pegawai
Route::get('/data-petugas','PetugasController@index')->name('data-petugas');
Route::get('/input-data-petugas','PetugasController@create')->name('input-data-petugas');
Route::post('/simpan-data-petugas','PetugasController@store')->name('simpan-data-petugas');
Route::get('/update-data-petugas/{id}','PetugasController@edit')->name('update-data-petugas');
Route::post('/updatee-data-petugas/{id}','PetugasController@update')->name('updatee-data-petugas');
Route::get('/delete-data-petugas/{id}','PetugasController@destroy')->name('delete-data-petugas');

//Pembeli
Route::get('/data-pembeli','PembeliController@index')->name('data-pembeli');
Route::get('/input-data-pembeli','PembeliController@create')->name('input-data-pembeli');
Route::post('/simpan-data-pembeli','PembeliController@store')->name('simpan-data-pembeli');
Route::get('/update-data/{id}','PembeliController@edit')->name('update-data');
Route::post('/updatee-data/{id}','PembeliController@update')->name('updatee-data');
Route::get('/delete-data/{id}','PembeliController@destroy')->name('delete-data');


//Transaksi
Route::get('/data-transaksi','TransaksiController@index')->name('data-transaksi');
Route::get('/input-transaksi','TransaksiController@create')->name('input-transaksi');
Route::post('/simpan-data-transaksi','TransaksiController@store')->name('simpan-data-transaksi');
Route::get('/update-transaksi/{id}','TransaksiController@edit')->name('update-transaksi');
Route::post('/updatee-data/{id}','TransaksiController@update')->name('updatee-data');
Route::get('/delete-data/{id}','TransaksiController@destroy')->name('delete-data');
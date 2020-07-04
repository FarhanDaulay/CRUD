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
//Yg asli
Route::get('/', function () {
    return view('welcome');
});

//templating blade
Route::get('/master', function() {
    return view('layoutadm.master');
});

//CRUD pertanyaan
Route::get('/pertanyaan/create', 'PertanyaanController@create'); //membuat pertanyaan

Route::get('/pertanyaan', 'PertanyaanController@index'); //menampilkan seluruh tabel

Route::post('/pertanyaan', 'PertanyaanController@store'); //menyimpan data baru

Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); //menampilkan jawaban

//CRUD jawaban
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index'); //menampilkan jawaban dari pertanyaan id

Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store'); //menyimpan jawaban
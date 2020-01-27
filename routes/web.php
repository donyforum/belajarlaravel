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

Route::get('/siswa', 'Siswacontroller@index');
Route::post('/siswa/create', 'Siswacontroller@create');
Route::get('/siswa/edit/{id}', 'Siswacontroller@edit');
Route::post('/siswa/update/{id}', 'Siswacontroller@update');
Route::get('/siswa/delete/{id}', 'Siswacontroller@delete');
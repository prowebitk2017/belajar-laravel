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
    return view('home');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('postlogin', 'AuthController@postlogin');
Route::get('logout', 'AuthController@logout');

Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
Route::get('/siswa', 'SiswaController@index')->middleware('auth');
Route::post('/siswa/create', 'SiswaController@create')->middleware('auth');
Route::get('/siswa/{id}/edit', 'SiswaController@edit')->middleware('auth');
Route::post('/siswa/{id}/update', 'SiswaController@update')->middleware('auth');
Route::get('/siswa/{id}/delete', 'SiswaController@delete')->middleware('auth');
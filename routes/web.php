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


Route::get('/', 'UsuarioController@paginaHome')->name('home');
Route::post('login', 'UsuarioController@login')->name('login');
Route::get('clinica', 'ClinicaController@paginaClinica')->name('clinica');

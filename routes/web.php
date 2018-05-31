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
Route::get('logout', 'UsuarioController@logout')->name('logout');
Route::get('clinica', 'ClinicaController@paginaClinica')->name('clinica')->middleware('mwLogin');
Route::get('cadastrar-paciente', 'ClinicaController@paginaCadastrar')->name('cadastrar-paciente')->middleware('mwLogin');
Route::post('salvar', 'ClinicaController@cadastrarPaciente')->name('salvar')->middleware('mwLogin');
Route::get('consulta/{id}', 'ClinicaController@paginaConsulta')->name('consulta')->middleware('mwLogin');
Route::get('pesquisar', 'ClinicaController@pesquisarPaciente')->name('pesquisar')->middleware('mwLogin');
Route::get('cadastro-paciente/{id}', 'ClinicaController@visualizarCadastro')->name('cadastro-paciente')->middleware('mwLogin');
Route::get('editar/{id}', 'ClinicaController@editarCadastro')->name('editar')->middleware('mwLogin');
Route::post('edit-save', 'ClinicaController@editSave')->name('edit-save')->middleware('mwLogin');
Route::get('edit-sc/{id}', 'ClinicaController@editarShortcut')->name('edit-sc')->middleware('mwLogin');
Route::get('excluir/{id}', 'ClinicaController@excluirPaciente')->name('excluir')->middleware('mwLogin');
Route::post('salvar-ficha', 'ClinicaController@salvarFicha')->name('salvar-ficha')->middleware('mwLogin');

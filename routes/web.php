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
Route::get('ConsultarResidencia', 'ResidenciaController@mostrar');
Route::get('Resultados', 'ResidenciaController@resultado');
Route::get('Residencia', 'ResidenciaController@mostrarLista');
Route::get('Persona', 'PersonaController@mostrarPersona');
Route::resource('estudiantes', 'EstudiantesController');
Route::resource('persona', 'PersonaController');
Route::resource('residencia', 'ResidenciaController');

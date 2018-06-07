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

Route::group(['middleware' => 'auth'],function(){

    Route::get('/', function () {
        return view('home');
    });

});
//Expedientes index
Route::get('expedientes', 'ExpedienteController@index')->name('expedientes');

//ver expediente
Route::get('ver_expediente/{exp}/{act}', 'ExpedienteController@show')->name('ver_expediente');

Auth::routes();
//home
Route::get('/home', 'HomeController@index')->name('home');

//ASSIST CARD
Route::get('solicitud/{exp}','AssistCardController@solicitud')->name('solicitud');

//ESTADO DE CUENTA CLIENTE
Route::get('estadoCuenta/{exp}/{tipo}','EstadosdeCuentaController@estadoCuenta')->name('estadoCuentaCliente');
Route::get('estadoCuenta/{exp}/{tipo}','EstadosdeCuentaController@estadoCuenta')->name('estadoCuenta');

//agregar pasajero
Route::post('Agregar_Pasajero', 'PasajerosController@agregar')->name('agregarpasajero');

//update pasajero
Route::post('Actualizar_Pasajero','PasajerosController@update')->name('updatepasajero');
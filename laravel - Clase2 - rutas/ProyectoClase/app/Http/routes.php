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

Route::get('/', function () {
    return "Holi Pinoli";
});

Route::get('usuario', function()
{
    	return "Hola desconocido";
}); 
 
Route::get('usuario/{nombre}', function($nombre)
{
    	return "Hola $nombre";
}); 

Route::get('usuario2/{nombre?}', function($nombre='desconocido')
{
    	return "Hola $nombre";
}); 

Route::get('usuario3/{nombre}/{apellido}', function($nombre,$apellido)
{
    	return "Hola $nombre $apellido";
}); 

Route::get('usuario4/{nombre}', function($nombre){
	return "Mostrando el usuario $nombre";
})->where(array('nombre' => '[a-zA-Z]+'));

Route::get('numero/sisi/{id}', function($id){
	return "$id yeiii";
})->where(['id' => '[0-9]+']);

Route::get('sumar/{numero1}/{numero2}', 'ControladorEjemplo@sumar');
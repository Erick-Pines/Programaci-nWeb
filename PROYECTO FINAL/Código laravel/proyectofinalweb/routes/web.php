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

Route::get('/', "control@index" );
Route::get('resultados', "control@resultados" );
Route::get('tutorial', "control@tutorial" );
Route::get('inicio', "control@inicio" );
Route::post('insert', "control@insert");
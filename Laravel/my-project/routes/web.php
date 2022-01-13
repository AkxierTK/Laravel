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

Route::get('dwes',function(){
    return '<h1>DWES</h1>';
});

Route::get('hola',function(){
    return view('helloword');
});

Route::view('Inicio', 'plantilla');

Route::view('inicio', 'inicio') -> name('inicio');
Route::view('about', 'about') -> name('nosotros');
Route::view('proyecto', 'proyecto') -> name('proyecto');

/**Route::get('proyecto/{id?}', function($id = 1) {
    return ('Cliente con el id: ' . $id);
}) -> where('id', '[0-9]+');*/


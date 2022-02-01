<?php

use App\Http\Controllers\ChollosController;
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


//Route::view('Login', 'Login')->name("Login");
//Route::view('NuevaCuenta', 'NuevaCuenta')->name("NuevaCuenta");
//Route::post('usuario', [ UsuariosController::class, 'crear' ]) -> name('usuario.crear');
//Route::post('usuario', [ UsuariosController::class, 'acceder' ]) -> name('usuario.acceder');
Route::get('/', [ ChollosController::class, 'cargar' ]) -> name('chollos.cargar');
Route::view("chollo/crear","chollos.crear")->name("crear");
Route::post('creado', [ ChollosController::class, 'crear' ]) -> name('cholloCreado');
Route::get('chollo/editar/{id?}', [ ChollosController::class, 'editar' ])->name("editarChollo");
Route::get('chollo/eliminar/{id?}', [ ChollosController::class, 'eliminar' ])->name("eliminarChollo");
Route::post('chollos.editar',[ChollosController::class,'editarDB'])->name("editarCholloDB");
Route::get('nuevos', [ ChollosController::class, 'nuevos' ]) -> name('nuevos');
Route::get('destacados', [ ChollosController::class, 'destacados' ]) -> name('destacados');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

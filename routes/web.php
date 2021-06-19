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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTAS CREADAS

//rutas de profesional

Route::view('profe-registro', 'registroprofe');
Route::post('guardar-profe','App\Http\Controllers\ProfesionalController@store')->name('store');
Route::get('ver-profe','App\Http\Controllers\ProfesionalController@mostrar')->name('mostrarprofe');
Route::get('ver-cate','App\Http\Controllers\ProfesionalController@categorias')->name('mostrarcategorias');

//rutas de usuario

Route::get('ver-perfil','App\Http\Controllers\UserController@mostrar')->name('mostrar');
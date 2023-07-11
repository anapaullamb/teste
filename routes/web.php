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

Route::resource('jogadores', 'JogadorController');
Route::resource('categorias', 'CategoriaController');
Route::resource('categoriasFavoritas', 'CategoriaFavoritaController');
Route::get('/', function () {
    return view('index');
})->name('index');
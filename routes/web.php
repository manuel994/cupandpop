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
Route::get('/somos','Cup@somos')->name('cup.somos');
Route::get('/home','Cup@home')->name('cup.welcome');
Route::get('/productos','Cup@productos')->name('cup.productos');
Route::get('/eventos','Cup@eventos')->name('cup.eventos');
Route::get('/informacion','Cup@informacion')->name('cup.informacion');
Route::get('/cotizacion','Cup@cotizacion')->name('cup.cotizacion');
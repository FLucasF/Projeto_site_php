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

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/menu', 'MenuController@menu')->name('menu');
Route::get('/info', 'InfoController@info')->name('info');
Route::get('/primPergunta', 'PrimPerguntaController@primPergunta')->name('primPergunta');

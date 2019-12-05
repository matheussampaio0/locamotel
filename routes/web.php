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

Route::get('/', 'SiteController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/controlequartos', 'QuartosController@index')->name('controlequartos');
Route::get('/controlequartos/add', 'QuartosController@add');
Route::get('/helpsys', 'QuartosController@helpsys')->name('helpsys');

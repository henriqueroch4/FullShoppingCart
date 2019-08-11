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


Route::get('/', 'HomepageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entrar', 'EntrarController@index');
Route::post('/entrar', 'EntrarController@entrar');

Route::get('/teste', 'OrderController@save');
Route::get('/categorias', 'CategoryController@index')->name('index.categorias');
Route::get('/categorias/cadastrar', 'CategoryController@createCategory')->name('cadastrar.categoria');
Route::post('/categorias/cadastrar', 'CategoryController@store');
Route::delete('categorias/{id}', 'CategoryController@delete');

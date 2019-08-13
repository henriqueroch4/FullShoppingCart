<?php



Route::get('/', 'HomepageController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/entrar', 'EntrarController@index')->name('login');
Route::post('/entrar', 'EntrarController@entrar');
Route::get('/registrar', 'RegisterController@index');
Route::post('/registrar', 'RegisterController@create');

Route::get('/teste', 'OrderController@save');
Route::get('/categorias', 'CategoryController@index')->name('index.categorias')->middleware('autenticator');
Route::get('/categorias/cadastrar', 'CategoryController@createCategory')->name('cadastrar.categoria')->middleware('autenticator');
Route::post('/categorias/cadastrar', 'CategoryController@store')->middleware('autenticator');
Route::delete('categorias/{id}', 'CategoryController@delete')->middleware('autenticator');

Route::get('/produtos', 'ProductController@index')->middleware('autenticator');
Route::get('/produtos/criar/', 'ProductController@create')->middleware('autenticator');
Route::post('/produtos/criar/', 'ProductController@store')->middleware('autenticator');
Route::get('produtos/{id}', 'ProductController@seeMore')->middleware('autenticator');
Route::delete('produtos/{id}', 'ProductController@delete')->middleware('autenticator');

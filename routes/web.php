<?php



Route::get('/', 'HomepageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entrar', 'EntrarController@index');
Route::post('/entrar', 'EntrarController@entrar');
Route::get('/registrar', 'RegisterController@index');
Route::post('/registrar', 'RegisterController@create');

Route::get('/teste', 'OrderController@save');
Route::get('/categorias', 'CategoryController@index')->name('index.categorias');
Route::get('/categorias/cadastrar', 'CategoryController@createCategory')->name('cadastrar.categoria');
Route::post('/categorias/cadastrar', 'CategoryController@store');
Route::delete('categorias/{id}', 'CategoryController@delete');

Route::get('/produtos', 'ProductController@index');
Route::get('/produtos/criar/', 'ProductController@create');
Route::post('/produtos/criar/', 'ProductController@store');
Route::delete('produtos/criar')

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

Route::get('/acercade', function () {
    return view('acercade');
});



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/agregar', function () {
    return view('agregarPersonas');

});


Route::resource('categoria', 'CategoriaController');

Route::get('categoria/{id}/destroy',[
	'uses' =>'CategoriaController@destroy',
	'as'   =>'categoria.destroy'

	]);

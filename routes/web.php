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

Route::get('/blog',[
	'uses' => 'FrontController@index',
	'as'   => 'blog'
	]);

Route::get('/acercade', function () {
    return view('acercade');
});



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/agregar', function () {
    return view('agregarPersonas');

});


Route::resource('categoria', 'CategoriaController');
Route::resource('blogs', 'BlogController');

Route::get('categoria/{id}/destroy',[
	'uses' =>'CategoriaController@destroy',
	'as'   =>'categoria.destroy'

	]);


  Route::get('categoria/create',[
  	'uses' =>'CategoriaController@create',
  	'as'   =>'categoria.create'

  	]);

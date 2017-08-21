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

Route::get('/bloghome',[
	'uses' => 'FrontController@index',
	'as'   => 'bloghome'
	]);

  Route::get('/biblioteca',[
  	'uses' => 'BibliotecaController@downfunc',
  	'as'   => 'biblioteca'
  	]);


  Route::get('blogin/{slug}',[
	'uses' => 'FrontController@blog',
	'as'   => 'blogin'
	]);


Route::get('/acercade', function () {
    return view('acercade');
    });
Route::group(['prefix' => 'home', 'middleware' => 'auth'], function () {

    Route::resource('categoria', 'CategoriaController');
    Route::resource('blogs', 'BlogController');
    Route::resource('bibliotecas', 'BibliotecaController');

});

Auth::routes();

Route::get('/home', 'HomeController@index');

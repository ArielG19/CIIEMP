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

  Route::get('/imagen/{img}',function($img){
    return \Image::make(public_path("/image/$img"))->resize(200, 200)->response('jpg');
});





  Route::get('blogin/{slug}',[
	'uses' => 'FrontController@blog',
	'as'   => 'blogin'
	]);


Route::get('/acercade', function () {
    return view('acercade');
});



Auth::routes();

Route::get('/home', 'HomeController@index');


Route::Resource('/usuarios','UserController');
Route::get('/listar-usuarios','UserController@listarUsuario');

Route::get('agregar', function () {

    return view('agregarPersonas');

});


Route::resource('categoria', 'CategoriaController');
Route::resource('blogs', 'BlogController');



Route::get('categoria/{id}/destroy',[
  'uses' =>'CategoriaController@destroy',
  'as'   =>'categoria.destroy'
]);

Route::get('blogs/{id}/destroy',[
    'uses' =>'BlogController@destroy',
    'as'   =>'blogs.destroy'

]);


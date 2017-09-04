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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::Resource('/usuarios','UserController');
Route::get('/listar-usuarios','UserController@listarUsuario');

Route::get('/mi-perfil','UserController@miPerfil');
Route::post('/mi-perfil','UserController@upPerfil');

Route::Resource('/comentarios','ComentarioController');
Route::get('/listar-comentarios/{id_b}','ComentarioController@listarComentarios');

Route::Resource('/chat','ChatController');
Route::get('/listar-chat/{usuario_activo}','ChatController@listarChat');

Route::Resource('/mensajes','MensajeController');

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



Route::get('/agregar', function () {
    return view('agregarPersonas');

});

Route::get('categoria/{id}/destroy',[
  'uses' =>'CategoriaController@destroy',
  'as'   =>'categoria.destroy'
]);

Route::get('blogs/{id}/destroy',[
    'uses' =>'BlogController@destroy',
    'as'   =>'blogs.destroy'

]);


Route::get('bibliotecas/{id}/destroy',[
    'uses' =>'bibliotecaController@destroy',
    'as'   =>'bibliotecas.destroy'

]);


Route::get('buscar_archivos/{categoria}/{dato?}', 'BibliotecaController@buscar_archivos');

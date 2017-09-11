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


Route::get('/bloghome',[
	'uses' => 'FrontController@index',
	'as'   => 'bloghome'
]);

Route::get('/bloghome/blogin/{slug}','FrontController@blog');

Route::get('bloghome/{name}',[
 'uses' => 'FrontController@filtraCategoria',
 'as'   => 'bloghome.filtrar.categorias'
]);

Route::get('/biblioteca',[
  'uses' => 'BibliotecaController@downfunc',
  'as'   => 'biblioteca'
]);

Route::get('biblioteca/{name?}','BibliotecaController@filtraCategoria');




Route::get('/acercade', function () {
    return view('acercade');
});

Route::group(['prefix' => 'home', 'middleware' => 'auth'], function () {
    Route::resource('carrera', 'CarreraController');
    Route::resource('categoria', 'CategoriaController');
    Route::resource('blogs', 'BlogController');
    Route::resource('noticia', 'NoticiaController');
    Route::resource('bibliotecas', 'BibliotecaController');
    Route::resource('profesor', 'ProfesorController');

});

<<<<<<< HEAD
=======
Auth::routes();

Route::get('/home', 'HomeController@index');


Route::Resource('/usuarios','UserController');
Route::get('/listar-usuarios','UserController@listarUsuario');

Route::get('/mi-perfil','UserController@miPerfil');
Route::post('/mi-perfil','UserController@upPerfil');

Route::Resource('/comentarios','ComentarioController');
Route::get('/listar-comentarios/{id_b}','ComentarioController@listarComentarios');
>>>>>>> 6298a5da7c429c4148587ff464232a60c953d456

Route::get('/agregar', function () {
    return view('agregarPersonas');

});

Route::get('categoria/{id}/destroy',[
  'uses' =>'CategoriaController@destroy',
  'as'   =>'categoria.destroy'
]);

Route::get('carrera/{id}/destroy',[
  'uses' =>'CarreraController@destroy',
  'as'   =>'carrera.destroy'
]);

Route::get('blogs/{id}/destroy',[
    'uses' =>'BlogController@destroy',
    'as'   =>'blogs.destroy'

]);

Route::get('noticia/{id}/destroy',[
    'uses' =>'NoticiaController@destroy',
    'as'   =>'noticia.destroy'

]);



Route::get('bibliotecas/{id}/destroy',[
    'uses' =>'bibliotecaController@destroy',
    'as'   =>'bibliotecas.destroy'

]);


Route::get('buscar_archivos/{categoria}/{dato?}','BibliotecaController@downfunc');

Route::get('/docentes', function () {
    return view('docentes.index');

});

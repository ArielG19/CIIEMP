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

//-------Rutas usuarios-----
Route::Resource('/usuarios','UserController');
Route::get('/listar-usuarios','UserController@listarUsuario');
//-------Rutas usuarios-----


//-------Rutas perfil-estudiante-----
Route::Resource('/mi-perfil','EstudianteController');
Route::post('/mi-perfil','EstudianteController@upPerfil');
Route::get('/listar-datos/{id}','EstudianteController@listarDatos');

//-------Rutas perfil-estudiante-----

//-------Rutas perfil-profesor-----
Route::Resource('/profesor', 'ProfesorController');
Route::get('/datos-profesor/{id}','ProfesorController@listarProfesor');

//-------Rutas perfil-profesor-----


//-------Rutas comentarios-----
Route::Resource('/comentarios','ComentarioController');
Route::get('/listar-comentarios/{id_b}','ComentarioController@listarComentarios');

//-------Rutas comentarios-----

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
    Route::resource('categoria', 'CategoriaController');
    Route::resource('blogs', 'BlogController');
    Route::resource('noticia', 'NoticiaController');
    Route::resource('bibliotecas', 'BibliotecaController');


});



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

Route::get('/docentes-innovadores', function () {
    return view('docentes.index');

});

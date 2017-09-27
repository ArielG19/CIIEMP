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

Route::get('/', [
    'uses' => 'WelcomeController@index',
    'as' => '/'
]);

Route::get('/bloghome', [
    'uses' => 'FrontController@index',
    'as' => 'bloghome'
]);

Route::get('/articulohome', [
    'uses' => 'FrontNoticiasController@index',
    'as' => 'articulohome'
]);

Route::get('/bloghome/blogin/{slug}', 'FrontController@blog');
Route::get('/articulohome/articulo/{slug}', 'FrontNoticiasController@noticia');

Route::get('bloghome/{name}', [
    'uses' => 'FrontController@filtraCategoria',
    'as' => 'bloghome.filtrar.categorias'
]);

Route::get('/biblioteca', [
    'uses' => 'BibliotecaController@downfunc',
    'as' => 'biblioteca'
]);

Route::get('biblioteca/{name?}', 'BibliotecaController@filtraCategoria');


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
    Route::resource('proyectos','ProyectosController');

});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::Resource('/usuarios', 'UserController');
Route::get('/listar-usuarios', 'UserController@listarUsuario');

Route::get('/mi-perfil', 'UserController@miPerfil');
Route::post('/mi-perfil', 'UserController@upPerfil');

Route::Resource('/comentarios', 'ComentarioController');
Route::get('/listar-comentarios/{id_b}', 'ComentarioController@listarComentarios');

Route::get('/agregar', function () {
    return view('agregarPersonas');

});

Route::get('categoria/{id}/destroy', [
    'uses' => 'CategoriaController@destroy',
    'as' => 'categoria.destroy'
]);

Route::get('carrera/{id}/destroy', [
    'uses' => 'CarreraController@destroy',
    'as' => 'carrera.destroy'
]);

Route::get('blogs/{id}/destroy', [
    'uses' => 'BlogController@destroy',
    'as' => 'blogs.destroy'

]);
Route::get('noticias/{id}/destroy', [
    'uses' =>'NoticiaController@destroy',
    'as' => 'noticias.destroy'

]);

Route::get('bibliotecas/{id}/destroy', [
    'uses' => 'bibliotecaController@destroy',
    'as' => 'bibliotecas.destroy'

]);


Route::get('buscar_archivos/{categoria}/{dato?}', 'BibliotecaController@downfunc');

Route::get('/docentes', function () {
    return view('docentes.index');

});


Route::get('/proyectos', function () {
    return view('proyectos.indexPrincipal');

});


  Route::get('/proyectos',[
    'uses' => 'ProyectosController@frontProyecto',
    'as'   => 'proyectos'
    ]);

Route::get('detalleProyecto/{id}','ProyectosController@show');

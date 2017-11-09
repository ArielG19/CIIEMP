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

Route::get('/', [
    'uses' => 'WelcomeController@index',
    'as' => '/'
]);


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


//-------Rutas chat-----
Route::Resource('/chat','ChatController');
Route::get('/listar-chat/{usuario_activo}','ChatController@listarChat');
Route::get('/listar-coversacion/{id}','ChatController@listarConversacion');
//-------Rutas chat-----

//-------Rutas curriculon-----
Route::Resource('/curriculum','CurriculonController');
Route::get('/listar-curriculum','CurriculonController@listarCurriculon');
//-------Rutas curriculon-----


//-------Rutas publicaciones-----
Route::Resource('/publicaciones','PublicacionesController');
Route::get('/listar-publicaciones','PublicacionesController@publicaciones');
//-------Rutas publicaciones-----

Route::Resource('/docentes-innovadores','DocentesInnovadoresController');

Route::get('/listar-blog/{id}','DocentesInnovadoresController@listarBlog');
Route::get('/curriculon-docente/{id}','DocentesInnovadoresController@Curriculon');
Route::get('/publicaciones-docente/{id}','DocentesInnovadoresController@listarPublicaciones');

//--------Rutas de biblioteca--------
Route::get('/biblioteca', [
    'uses' => 'BibliotecaController@downfunc',
    'as' => 'biblioteca'
]);
Route::get('biblioteca/{name?}', 'BibliotecaController@filtraCategoria');

//--------Rutas del blog--------
Route::get('/bloghome', [
    'uses' => 'FrontController@index',
    'as' => 'bloghome'
]);
Route::get('/bloghome/blogin/{slug}', 'FrontController@blog');

Route::get('bloghome/{name}', [
    'uses' => 'FrontController@filtraCategoria',
    'as' => 'bloghome.filtrar.categorias'
]);
//--------Rutas del noticias--------

Route::get('/articulohome', [
    'uses' => 'FrontNoticiasController@index',
    'as' => 'articulohome'
]);

Route::get('/articulohome/articulo/{slug}', 'FrontNoticiasController@noticia');


//--------Ruta Acerca de nosotros--------
Route::get('/acercade', function () {
    return view('acercade');
});

//--------Rutas del Panel de admin--------
Route::group(['prefix' => 'home', 'middleware' => 'auth'], function () {
    Route::resource('carrera', 'CarreraController');
    Route::resource('categoria', 'CategoriaController');
    Route::resource('blogs', 'BlogController');
    Route::resource('noticia', 'NoticiaController');
    Route::resource('bibliotecas', 'BibliotecaController');
    Route::resource('profesor', 'ProfesorController');
    Route::resource('proyectos','ProyectosController');

});

//--------Rutas de categoria -------
Route::get('categoria/{id}/destroy', [
    'uses' => 'CategoriaController@destroy',
    'as' => 'categoria.destroy'
]);
//--------Rutas de carrera -------
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

Route::get('/proyectosEgresados',[
    'uses' => 'ProyectosController@egresados',
    'as'   => 'proyectos.createEgresados'
    ]);

Route::get('/proyectos',[
    'uses' => 'ProyectosController@frontProyecto',
    'as'   => 'proyectos'
    ]);


Route::get('noticias/image/{id}','NoticiaController@show');

Route::post('/storeEgresado',[
    'uses' => 'ProyectosController@storeEgresado',
    'as'   => 'proyectos.storeEgresado'
    ]);

Route::get('detalleProyecto/{id}','ProyectosController@show');


Route::get('proyectos/{id}/destroy', [
    'uses' => 'ProyectosController@destroy',
    'as' => 'proyectos.destroy'

]);

Route::get('proyectos/{tipo?}',[
    'uses' => 'ProyectosController@fitrarTipo',
    'as' => 'proyectos.filtrar'

]);

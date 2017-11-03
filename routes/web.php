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
Route::Resource('/curriculon','CurriculonController');
Route::get('/listar-curriculon','CurriculonController@listarCurriculon');
//-------Rutas curriculon-----


//-------Rutas publicaciones-----
Route::Resource('/publicaciones','PublicacionesController');
Route::get('/listar-publicaciones','PublicacionesController@publicaciones');
//-------Rutas publicaciones-----

Route::Resource('/docentes-innovadores','DocentesInnovadoresController');

Route::get('/listar-blog/{id}','DocentesInnovadoresController@listarBlog');
Route::get('/curriculon-docente/{id}','DocentesInnovadoresController@Curriculon');
Route::get('/publicaciones-docente/{id}','DocentesInnovadoresController@listarPublicaciones');



Route::get('/biblioteca', [
    'uses' => 'BibliotecaController@downfunc',
    'as' => 'biblioteca'
]);

Route::get('biblioteca/{name?}', 'BibliotecaController@filtraCategoria');


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
Route::get('noticias/{id}/destroy', [
    'uses' =>'NoticiaController@destroy',
    'as' => 'noticias.destroy'
]);
Route::get('bibliotecas/{id}/destroy', [
    'uses' => 'bibliotecaController@destroy',
    'as' => 'bibliotecas.destroy'
]);
Route::get('buscar_archivos/{categoria}/{dato?}', 'BibliotecaController@downfunc');


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

Route::post('/storeEgresado',[
    'uses' => 'ProyectosController@storeEgresado',
    'as'   => 'proyectos.storeEgresado'
    ]);

Route::get('detalleProyecto/{id}','ProyectosController@show');

Route::get('proyectos/{id}/destroy', [
    'uses' => 'ProyectosController@destroy',
    'as' => 'proyectos.destroy'

]);


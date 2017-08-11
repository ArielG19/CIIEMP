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

<<<<<<< HEAD
//Blog
Route::Resource('/usuarios','UserController');
Route::get('/listar-usuarios','UserController@listarUsuario');
=======
Route::get('agregar', function () {
    return view('agregarPersonas');


    
});
>>>>>>> 9efba46af6a70db4b3b782baf6b7d91855dbadaa

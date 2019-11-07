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
})->name('home');

Route::pattern('id', '[0-9]+');
Route::pattern('nombre', '[A-Za-z]+');

// 4.1
Route::get('/contacto', function () {
	return view('contacto');
})->name('contacto');

Route::get('/blog/{id}', function ($id){
	return view('blog',['id'=>$id]);
})->name('blog.id'); 
// para usar patrones de en una sola ruta ==>  where(['id'=>'[0-9]']);

Route::get('/blog/{id}-{name}', function ($id, $name) {
	return view('blog',['id'=>$id, 'name'=>$name]);
})->name('blog.name');

// 4.2
Route::get('/saludo/{nombre?}/{apellido?}/{color?}','SaludoController@saludar')->name('saludar');

// 4.3
Route::get('/formulario','SaludoController@getFormulario')->name('getFormulario');
Route::get('/saludar/get','SaludoController@saludarGet')->name('saludarGet');
Route::post('/saludar/post','SaludoController@saludarPost')->name('saludarPost');
Route::post('/saludar/samePage','SaludoController@saludarSamePage')->name('saludarSamePage');

// 4.4
Route::get('/formulario-contacto','FormularioController@getFormularioContacto')->name('getFormularioContacto');

// USANDO MIS COMPROBACIONES (formContacto)
Route::post('/formulario-contacto/post','FormularioController@formContacto')->name('formContacto');
// USANDO LA FUNCIÓN VALIDATE DE LARAVEL (formContacto) -->
Route::post('/validar-formulario-contacto','FormularioController@formContactoValidar')->name('formContactoValidar');
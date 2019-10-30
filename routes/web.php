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

// 4.1
Route::get('/contacto', function () {
	return view('contacto');
})->name('contacto');

Route::get('/blog/{id}', function ($id){
	return view('blog',['id'=>$id]);
})->where(['id'=>'[0-9]'])->name('blog');

Route::get('/blog/{id}-{name}', function ($id, $name) {
	return view('blog',['id'=>$id, 'name'=>$name]);
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+'])->name('blog');
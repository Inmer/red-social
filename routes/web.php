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
    return redirect()->route('blog');
});

Auth::routes();

Route::get('/blog', 'Web\PageController@blog')->name('blog');
Route::get('/blade', function () {
    return view('tests/test1');
});
Route::get('integrantes', function () {
    return View::make('layouts.integrantes');
});
Route::get('/post/{slug}', 'Web\PageController@post')->name('post');
Route::get('/category/{slug}', 'Web\PageController@category')->name('category');
Route::get('/tag/{slug}', 'Web\PageController@tag')->name('tag');

Route::resource('tags', 		'Admin\TagController');
Route::resource('categories', 	'Admin\CategoryController');
Route::resource('posts', 		'Admin\PostController');



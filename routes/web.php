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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', 'ArticleController@index');
Route::get('/dashboard', 'HomeController@index')->middleware('auth');

/*========== CRUD ===============*/
//article
Route::get('/article' , 'CrudArticleController@index')->middleware('auth');
Route::post('/tambah-artikel' , 'CrudArticleController@tambah')->middleware('auth');
Route::post('/edit-artikel/{id}', 'CrudArticleController@edit')->middleware('auth');

Route::get('/news/{slug}' , 'ArticleController@show');

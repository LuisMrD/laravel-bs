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

Route::get('/index', 'SiteController@index')->name('index');
Route::get('/calendario', 'SiteController@calendario');
Route::get('/formatos', 'SiteController@formatos');
Route::get('/links', 'SiteController@links');

Route::get('/pass', 'SiteController@login');
Route::post('/login/cadastrar', 'SiteController@store');

Route::get('/listas', 'ListasController@index');
Route::post('/listas/add', 'ListasController@add');

Route::get('/posts', 'PostsController@index');
Route::post('/posts/add', 'PostsController@add');

Route::get('/ranking', 'RankingController@index');
Route::post('/ranking/add', 'RankingController@add');

Route::get('/reports', 'ReportsController@index');
Route::post('/reports/add', 'ReportsController@add');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

/***************    Site routes  **********************************/
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('articles', 'ArticlesController@index');
Route::get('article/{slug}', 'ArticlesController@show');
Route::get('video/{id}', 'VideoController@show');
Route::get('photo/{id}', 'PhotoController@show');

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
Route::get('/','WelcomeController@index');
Route::get('/welcome','WelcomeController@index');

Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');

// to get the article form
Route::get('/article','WelcomeController@getArticle');

// to post an article
Route::post('/article','WelcomeController@postArticle');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
?>

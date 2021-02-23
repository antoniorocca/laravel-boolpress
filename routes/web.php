<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@index')->name('home');

Route::get('about', 'PageController@about')->name('about');

Route::get('posts_api', 'PageController@posts_api')->name('posts_api');
Route::get('articles_api', 'PageController@articles_api')->name('articles_api');
Route::get('categories_api', 'PageController@categories_api')->name('categories_api');
Route::get('tags_api', 'PageController@tags_api')->name('tags_api');

Route::resource('posts', 'PostController');
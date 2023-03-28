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

Route::name('homepage')->get('/', 'App\Http\Controllers\PageController@homepage');
Route::name('paint-detail')->get('/paint/{slug}', 'App\Http\Controllers\PaintController@detail');
Route::name('news')->get('/news', 'App\Http\Controllers\NewsController@list');
Route::name('news-detail')->get('/news/{slug}', 'App\Http\Controllers\NewsController@detail');
Route::name('projects')->get('/projects', 'App\Http\Controllers\ProjectController@list');
Route::name('about')->get('/about', 'App\Http\Controllers\AboutController@index');

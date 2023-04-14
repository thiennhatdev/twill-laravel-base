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
Route::name('paint-detail')->get('/son/post{id}-{slug}.html', 'App\Http\Controllers\PaintController@detail');
Route::name('news')->get('/tin-tuc', 'App\Http\Controllers\NewsController@list');
Route::name('news-detail')->get('/tin-tuc/tin{id}-{slug}.html', 'App\Http\Controllers\NewsController@detail');
Route::name('projects')->get('/du-an', 'App\Http\Controllers\ProjectController@list');
Route::name('about')->get('/thong-tin', 'App\Http\Controllers\AboutController@index');
Route::name('action-search')->post('/tim-kiem', 'App\Http\Controllers\PageController@action_search');
Route::name('search')->get('/tim-kiem/{slug}.html', 'App\Http\Controllers\PageController@search');
Route::name('404')->get('/khong-tim-thay', 'App\Http\Controllers\PageController@notfound');

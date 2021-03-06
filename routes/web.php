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
Route::get('/article/create', ['as' => 'article.store', 'uses' => 'ArticleController@create']);
Route::post('/test', function () {
    return response()->json([
        'all_req' => request()->all()
    ]);
});
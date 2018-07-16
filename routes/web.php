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
    //$n = new \App\MyClass\MyData();
    //dd($n->all());
//    \MyData::set('hamid', 'yyyyyy');
//    $d = \MyData::all();
//    dd($d);
    return view('welcome');


});
Route::get('/admin/article/create', ['as' => 'article.create', 'uses' => 'ArticleController@create']);
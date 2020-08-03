<?php

/*...*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'ArticleController@index')->name('home');

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::resource('/article', 'ArticleController');
});
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::resource('/article/{article}/commit', 'CommitController');
});
Route::get('/article', 'ArticleController@index')->name('article.list');

Route::get('/article/{article}', 'ArticleController@show')->name('article.detail');



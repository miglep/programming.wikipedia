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

Route::get('/hello',function(){
    return 'Hello World!';
});

//Route::get('/test', 'helloController@labaDiena');
//Route::get('/vakaras/{name}', 'helloController@labasVakaras');
//Route::get('/turis/{x}/{y}/{z}', 'helloController@turis');

Route::get('/', 'contentController@home');
Route::get('/language', 'contentController@language')->name('language');

// Countries

Route::get('/language/{slug}', 'languageController@getLanguage');

Route::resource('statistic', 'statisticController');
Route::resource('test', 'testController');
Route::resource('talk', 'talkController');
Auth::routes();

Route::get('/home', 'contentController@home')->name('home');

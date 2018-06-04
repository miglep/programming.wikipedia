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

Route::get('/hello', function () {
    return  "Hello World!";
});

Route::get('/test', 'hello@labaDiena');
Route::get('/vakaras/{name}', 'hello@labasVakaras');
Route::get('/turis/{x}/{y}/{z}', 'hello@turis');



Route::get('/languages', function () {
    return "Programming Languages";
});
Route::get('/java', 'languages@java');
Route::get('/c', 'languages@c');
Route::get('/python', 'languages@python');
Route::get('/all/{java}/{c}/{python}', 'languages@all');
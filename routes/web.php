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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/a-propos', 'AproposController@index')->name('apropos');

Route::get('todos/undone', 'TodoController@undone')->name('todos.undone');
Route::get('todos/done', 'TodoController@done')->name('todos.done');
Route::put('todos/makedone/{todo}', 'TodoController@makedone')->name('todos.makedone');
Route::put('todos/makeundone/{todo}', 'TodoController@makeundone')->name('todos.makeundone');
Route::get('todos/{todo}/affectedTo/{user}', 'TodoController@affectedto')->name('todos.affectedto');

Route::resource('todos', 'TodoController');

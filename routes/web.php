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

Route::resource('items', 'ItemController');
Route::resource('categories', 'categoriesController');

Route::get('/items/create', 'ItemController@create')->name('items.create');
Route::post('/items/store', 'ItemController@store')->name('items.store');

Route::get('/categories/create', 'categoriesController@create')->name('categories.create');
Route::post('/categories/store', 'categoriesController@store')->name('categories.store');

Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@store');
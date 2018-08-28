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

// url cats
Route::get('/cats', 'CatController@index')->name('cats.index');
Route::get('/cats/create', 'CatController@create')->name('cats.create');
Route::post('/cats', 'CatController@store')->name('cats.store');
Route::get('/cats/{cat}/edit', 'CatController@edit')->name('cats.edit');
Route::put('/cats/{cat}', 'CatController@update')->name('cats.update');
Route::delete('/cats/{cat}', 'CatController@destroy')->name('cats.destroy');

//url breeds
Route::get('/breeds', 'BreedController@index')->name('breeds.index');
Route::get('/breeds/create', 'BreedController@create')->name('breeds.create');
Route::post('/breeds', 'BreedController@store')->name('breeds.store');
Route::get('/breeds/{breed}/edit', 'BreedController@edit')->name('breeds.edit');
Route::put('/breeds/{breed}', 'BreedController@update')->name('breeds.update');
Route::delete('/breeds/{breed}', 'BreedController@destroy')->name('breeds.destroy');
Route::get('/breeds/{id}/cats', 'BreedController@listCatsByCategoryId')->name('breeds.listCatsByCategoryId');
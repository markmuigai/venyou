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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/venues/{venue}/categories', 'CategoriesController@store');
Route::resource('venues', 'VenuesController');

Route::get('/details', 'VenuesController@createDetails');

Route::post('/details', 'VenuesController@storeDetails');

Route::post('/venues/{venue}/events', 'EventsController@store');

Route::get('/myvenues', 'VenuesController@myvenues');

Route::get('/myvenues/{venue}/edit', 'VenuesController@edit');
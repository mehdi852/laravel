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


Route::get('/', 'AppController@home')->name('home');

Route::get('/tips/spain', 'AppController@tips')->name('tips');
Route::get('/tips/spain', 'AppController@tipsSpain')->name('tipsSpain');
Route::get('/tips/england', 'AppController@tipsuk')->name('tipsuk');
Route::get('/tips/holland', 'AppController@tipsholland')->name('tipsholland');
Route::get('/tips/france', 'AppController@tipsfrance')->name('tipsfrance');


Route::get('/tips/{home}/{away}/{id}', 'AppController@matchstats');


Route::get('/match', 'AppController@match')->name('match');


Route::get('/add/category', 'AppController@category')->name('addcategory')->middleware('auth');
Route::post('/add/category', 'AppController@addcategory')->name('addcategory')->middleware('auth');
Route::get('/add/match', 'AppController@addmatchpage')->name('addmatch')->middleware('auth');;
Route::post('/add/match', 'AppController@addmatch')->name('addmatch')->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

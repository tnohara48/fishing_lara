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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

Route::get('/home', 'home@index');
Route::get('/home/action', 'home@action')->name('home.action');
Route::get('/home/edit_product', 'home@edit_product')->name('home.edit_product');
Route::get('/home/entry_condition', 'home@entry_condition')->name('home.entry_condition');


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


/* 初期画面表示 */
Route::get('/home', 'FishContrller@index');
Route::post('/home', 'FishContrller@index');


/* 商品情報一覧更新 */
Route::get('/home/action', 'FishContrller@action')->name('home.action');


/* 商品情報編集 */
Route::get('/home/edit_product', 'FishContrller@edit_product')->name('home.edit_product');
Route::post('/home/edit_product', 'FishContrller@edit_product')->name('home.edit_product');
Route::get('/home/edit_action_product', 'FishContrller@edit_action_product')->name('home.edit_action_product');
Route::post('/home/edit_action_product', 'FishContrller@edit_action_product')->name('home.edit_action_product');


/* 商品情報削除 */
Route::get('/home/delete_product', 'FishContrller@delete_product')->name('home.delete_product');
Route::post('/home/delete_product', 'FishContrller@delete_product')->name('home.delete_product');
Route::get('/home/delete_action_product', 'FishContrller@delete_action_product')->name('home.delete_action_product');
Route::post('/home/delete_action_product', 'FishContrller@delete_action_product')->name('home.delete_action_product');


/* 状態登録 */
Route::get('/home/entry_condition', 'FishContrller@entry_condition')->name('home.entry_condition');


/* 状態編集 */
Route::get('/home/edit_condition', 'FishContrller@edit_condition')->name('home.edit_condition');
Route::post('/home/edit_condition', 'FishContrller@edit_condition')->name('home.edit_condition');
Route::get('/home/edit_action_condition', 'FishContrller@edit_action_condition')->name('home.edit_action_condition');
Route::post('/home/edit_action_condition', 'FishContrller@edit_action_condition')->name('home.edit_action_condition');


/* 状態削除 */
Route::get('/home/delete_condition', 'FishContrller@delete_condition')->name('home.delete_condition');
Route::get('/home/delete_action_condition', 'FishContrller@delete_action_condition')->name('home.delete_action_condition');
Route::post('/home/delete_condition', 'FishContrller@delete_condition')->name('home.delete_condition');
Route::post('/home/delete_action_condition', 'FishContrller@delete_action_condition')->name('home.delete_action_condition');


Route::get('/home/form', 'FishContrller@form');
Route::post('home/form', 'FishContrller@form');
Route::post('home/result', 'FishContrller@result');

Route:: get('home/view', 'FishContrller@view');

Route::get('/home/error', 'FishContrller@error');


<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // POST送信する際に必要

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

Route::get('/', function () { // Laravelの初期画面
    return view('welcome');
});

Route::get('/shopping', 'ShoppingController@index'); // 商品一覧
Route::get('/shopping/{id}', 'ShoppingController@show'); // 商品詳細
Route::post('/shopping/cart', 'ShoppingController@cart'); // カート
Route::get('/users/register', 'UsersController@index'); // ユーザ新規登録
Route::post('/users/confirm', 'UsersController@confirm'); // 登録確認（ユーザ）
Route::post('/users/complete', 'UsersController@complete'); // ユーザ登録完了（コントローラー内で登録処理を行うのでgetを使う）
Route::get('/users/login', 'UsersController@login'); // ログイン
Route::post('/users/logincomplete', 'UsersController@logincomplete'); // ログイン完了
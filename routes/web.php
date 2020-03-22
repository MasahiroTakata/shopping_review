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
Route::get('/shopping/cart', 'ShoppingController@cartcheck'); // カート
//Route::get('/shopping/search', 'ShoppingController@search'); // 検索機能
Route::match(['get', 'post'],'/shopping/search', 'ShoppingController@search'); // 検索機能
Route::get('/users/register', 'UsersController@index'); // ユーザ新規登録
Route::get('/users/login', 'UsersController@login'); // ログイン
Route::get('/users/logout', 'UsersController@logout'); // ログアウト
Route::get('/buying/buyComfirm', 'BuyingController@index'); // 購入手続き
Route::get('/buying/buyingComplete', 'BuyingController@buyingComplete'); // 購入完了

Route::post('/shopping/cart', 'ShoppingController@cart'); // カートに保存
Route::post('/users/confirm', 'UsersController@confirm'); // 登録確認（ユーザ）
Route::post('/users/complete', 'UsersController@complete'); // ユーザ登録完了（コントローラー内で登録処理を行うのでgetを使う）
Route::post('/users/logincomplete', 'UsersController@logincomplete'); // ログイン完了
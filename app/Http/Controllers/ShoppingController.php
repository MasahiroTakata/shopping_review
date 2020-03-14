<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shopping; // ここの記載を忘れない
use App\Category; // この記述を書くことで、クラス内では「Category」と書くだけでOK、楽ができる
use App\Product;

class ShoppingController extends Controller
{
    // やる事
        // ログイン完了後の買い物を続けるボタン（完了）
        // ログイン完了後の購入手続きのボタン（後回し）
        // カートを見るボタンの実装（完了）
        // deflult.blade.phpの改行（完了）
        // 商品一覧の改行

    // 商品を一覧表示する
    public function index (){
        $categorys = Category::all(); // 全件抽出
        $products = Product::all();

        return view ('index', [
            'categorys' => $categorys,
            'products' => $products,
        ]);
    }

    // 商品の詳細情報を表示
    public function show ($id){
        $productDetail = Product::findOrFail($id); // 見つからなかったら例外を返す処理を行ってくれる

        return view('show', ['productDetail' => $productDetail]);
    }

    // カートに保存・中身の確認
    public function cart (Request $request){
        if ($request->has('hiddenProductId')) { // 「カートに入れる」ボタンが押下された場合
            session()->increment('cart.' . $request->input('hiddenProductId'), $request->input('quantity')); // この書き方で配列に保存してくれる
        }

        $carts = session()->all(); // 保存したデータを全取得
        $array = array();

        foreach ($carts['cart'] as $key => $value){
            $productInfomation = array();
            $productDetail = Product::findOrFail($key);

            $productInfomation = array(
                'productId'=>$key,
                'name'=>$productDetail['name'],
                'price'=>$productDetail['price'],
                'image'=>$productDetail['image'],
                'quantity'=>$value
            );

            array_push($array, $productInfomation);
        }

        return view('cart', [
            'carts' => $array]
        );
    }

    // カートをみる
    public function lookingCart (){
        return "こんにちは";
        // $carts = $request->session()->all(); // 保存したデータを全取得
        // $array = array();

        // foreach ($carts['cart'] as $key => $value){
        //     $productInfomation = array();
        //     $productDetail = Product::findOrFail($key);
        //     $productInfomation = array(
        //         'productId'=>$key,
        //         'name'=>$productDetail['name'],
        //         'price'=>$productDetail['price'],
        //         'image'=>$productDetail['image'],
        //         'quantity'=>$value
        //     );
        //     array_push($array, $productInfomation);
        // }

        // return view('cart', [
        //     'carts' => $array]
        // );
    }
};
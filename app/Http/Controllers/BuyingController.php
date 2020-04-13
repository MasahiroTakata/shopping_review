<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buying;
use App\Product;
use App\User;
use App\Order;

class BuyingController extends Controller
{
    public function index (){
        $userCarts = session()->all(); // 保存したデータを全取得
        $carts = array();
        $sum = 0; // 合計金額

        // 購入手続き画面に遷移する前に、セッションにユーザ情報があるか確認
        if(!isset($userCarts['userId'])){
            // ログインページへ遷移させる。（ユーザが分かるメッセージが欲しい）
            return view('login');
        }

        foreach ($userCarts['cart'] as $key => $value){
            $productInfomation = array();
            $productDetail = Product::findOrFail($key);

            $productInfomation = array(
                'productId'=>$key,
                'name'=>$productDetail['name'],
                'price'=>$productDetail['price'],
                'image'=>$productDetail['image'],
                'quantity'=>$value
            );

            $pQuantity = $productDetail['price'] * $value;
            $sum += $pQuantity;
            array_push($carts, $productInfomation);
        }

        $userDetail = User::findOrFail($userCarts['userId']);

        // return session()->all();
        return view('buyingConfirm', [
            'carts' => $carts,
            'loginuser' => $userDetail,
            'sum' => $sum,
        ]);
    }

    // 購入完了
    public function buyingComplete (){
        $userCarts = session()->all();
        $userId = $userCarts['userId'];

        foreach ($userCarts['cart'] as $key => $value){
            $newOrder = new Order();
            $newOrder->user_id = $userId;
            $newOrder->product_id = $key;
            $newOrder->quantity = $value;
            $newOrder->save();
        }

        session()->forget('cart'); // カートの情報のみ削除する

        return view('buyingComplete');
    }
}

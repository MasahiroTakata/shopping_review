<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buying;
use App\Product;
use App\User;
use App\Order;

class BuyingController extends Controller
{
    // 購入手続き
    public function index (){
        $userCarts = session()->all(); // 保存したデータを全取得
        $carts = array();

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
            array_push($carts, $productInfomation);
        }

        $userDetail = User::findOrFail($userCarts['userId']);

        // return session()->all();
        return view('buyingConfirm', [
            'carts' => $carts,
            'loginuser' => $userDetail
        ]);
    }

    // 購入完了
    public function buyingComplete (){
        $newOrder = new Order();
        $userCarts = session()->all();
        
        $newOrder->user_id = $request->name;
        $newOrder->product_id = $request->email;
        $newOrder->quantity = $request->address1;
        $newOrder->save();

        return '注文ありがとうございます！!';
    }
}

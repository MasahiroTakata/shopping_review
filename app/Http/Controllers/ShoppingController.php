<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shopping; // ここの記載を忘れない
use App\Category; // この記述を書くことで、クラス内では「Category」と書くだけでOK、楽ができる
use App\Product;

class ShoppingController extends Controller
{
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
        $categoryProducts = Product::where('category_id',$productDetail["category_id"])->whereNotIn('id',[$id])->get(); // 関連商品も取得（対象商品と同カテゴリー）

        return view('show', [
            'productDetail' => $productDetail,
            'categoryProducts' => $categoryProducts,
        ]);
    }

    // カートに保存・中身の確認
    public function cart (Request $request){
        $array = array(); // viewに渡す為の配列
        $sum = 0; // 合計金額

        if ($request->has('hiddenProductId')){ // カートに入れるボタン押下時
            session()->increment('cart.'. $request->input('hiddenProductId'), $request->input('quantity')); // この書き方で配列に保存してくれる
        }

        $carts = session()->all(); // 保存したデータを全取得

        if (!isset($carts["cart"])){ // カートの中身が無い場合
            return view('cart', [
                    'carts' => $array,
                    'sum' => $sum
                ]
            );
        }

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

            $pQuantity = $productDetail['price'] * $value;
            $sum += $pQuantity;
            array_push($array, $productInfomation);
        }

        return view('cart', [
            'carts' => $array,
            'sum' => $sum
            ]
        );
    }
};
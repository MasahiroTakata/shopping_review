<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Shopping; // ここの記載を忘れない
use App\Category; // この記述を書くことで、クラス内では「Category」と書くだけでOK、楽ができる
use App\Product;
use App\Comment;
use App\Custmer;

class ShoppingController extends Controller
{
    // 商品を一覧表示する
    public function index (){
        $products = Product::paginate(12); // 1ページに12件表示させる

        return view ('index', [
            'products' => $products,
            'submenu' => Category::all(),
        ]);
    }

    // 商品の詳細情報を表示
    public function show ($id){
        $productDetail = Product::findOrFail($id); // 見つからなかったら例外を返す処理を行ってくれる
        $categoryProducts = Product::where('category_id',$productDetail["category_id"])->whereNotIn('id',[$id])->get(); // 同カテゴリー商品を取得する（対象商品以外を取得）
        $productComments = Comment::where('product_id',$productDetail["id"])->get(); // 対象商品に対するコメントも取得する
        return view('show', [
            'productDetail' => $productDetail,
            'categoryProducts' => $categoryProducts,
            'productComments' => $productComments,
            'submenu' => Category::all(),
        ]);
    }

    // カテゴリー毎の商品一覧を表示(引数はカテゴリーID)
    public function categoryList ($id){
        $products = Product::where('category_id', $id)->paginate(12); // 選択したカテゴリーの商品を取得する
        return view('index', [
            'products' => $products,
            'submenu' => Category::all(),
        ]);
    }

    // 新商品を一覧表示
    public function newProductsList (){
        $today = date("Y-m-d H:i:s");
        $oneWeekBefore = date("Y-m-d",strtotime("-1 week"));
        $products = Product::whereBetween('updated_at', [$oneWeekBefore, $today])->paginate(12);

        return view ('index', [
            'products' => $products,
            'submenu' => Category::all(),
        ]);
    }

    // カートに保存（一覧に戻って、画面上にカートに保存した旨を伝える）
    public function userSelect (Request $request){
        $action = $request->get('action', 'カートに入れる');

        if($action == 'カートに入れる'){
            return $this->cartIn($request); // カートに追加する処理へ
        } else{
            $intProductId = (int)$request->get('hiddenProductId');
            return redirect()->action('ReviewController@index', ['productId' => $intProductId]);
            // 投稿後、「コメントは管理者に見られます。承諾されると割引適用されます。よろしいですか？」
        }
    }

    public function cartIn(Request $request){
        session()->increment('cart.'. $request->input('hiddenProductId'), $request->input('quantity')); // この書き方で配列に保存してくれる

        return redirect('/cart'); // カート画面をリダイレクトする
    }

    // カートを閲覧
    public function cart(){
        $array = array(); // viewに渡す為の配列
        $sum = 0; // 合計金額
        $carts = session()->all(); // 保存したデータを全取得

        if (!isset($carts["cart"])){ // カートの中身が無い場合
            return view('cart', [
                    'carts' => $array,
                    'sum' => $sum,
                    'submenu' => Category::all()
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
            'sum' => $sum,
            'submenu' => Category::all()
            ]
        );
    }
};
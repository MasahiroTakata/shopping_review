<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function index (Request $request){
        $search = $request->keyword;

        if ($search == ""){ // キーワードが空の場合
            return redirect('/'); // トップページへ遷移させる
        }

        $products = Product::where('name', 'LIKE', "%$search%")
                    ->limit(20)->get();

        // if (!empty(Input::get('title'))) {
        //     $queryTitle = Input::get('title');
        //     return Post::select('id', 'title')
        //             ->where('title', 'LIKE', "%$queryTitle%")
        //             ->limit(20)->get();
        // }
        // return [];
        return view('search', [
            'products' => $products,
            'keyword' => $search
        ]);
    }
}

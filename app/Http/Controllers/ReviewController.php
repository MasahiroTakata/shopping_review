<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Custmer;
use App\Comment;

class ReviewController extends Controller
{
    public function index (Request $request){
        $productDetail = Product::findOrFail($request->productId); // 見つからなかったら例外を返す処理を行ってくれる

        return view('createReview', [
            'productDetail' => $productDetail,
        ]);
    }

    public function savePost (Request $request){
        $custmerInfo = session()->all();

        if(isset($custmerInfo["custmerId"])){
            $saveComment = new Comment();
            $saveComment->product_id = $request->productId;
            $saveComment->custmer_id = $custmerInfo["custmerId"];
            $saveComment->comment = $request->review; // フィールドを指定して、追加する
            $saveComment->save();

            return redirect('/');
        } else{
            return redirect('/custmers/login');
        }
    }
}
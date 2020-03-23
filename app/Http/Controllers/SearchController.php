<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function index (Request $request){
        $search = $request->keyword;
        $products = Product::where('name', 'LIKE', "%$search%")
                    ->limit(20)->get();

        return view('search', [
            'products' => $products,
            'keyword' => $search
        ]);
    }
}

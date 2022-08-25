<?php
namespace App\Repositories;

use App\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;

class ProductRepository
{
    protected $product;
    public function __construct(Product $product)
    {
      $this->product = $product;
    }

    /**
     * @return object
     */
    public function getProductList()
    {
      $products =  $this->product->paginate(12); // 1ページに12件表示させる
      return $products;
    }
}
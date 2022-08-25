<?php
namespace App\Service;
use App\Repositories\ProductRepository;

class ProductService
{
  protected $productRepository;
  public function __construct(
    ProductRepository $productRepository
  ){
    $this->ProductRepository = $productRepository;
  }
  public function index()
  {
    $products = $this->ProductRepository->getProductList();
    return $products;
  }
}

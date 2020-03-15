@extends('layouts.default')
@section('title', 'カートの中身')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection
@section('content')
  @csrf
  {{ csrf_field() }}
  <div class = "boxs">
  @if (isset ($carts))
    @foreach ($carts as $cart)
      <div class = "cart_box">
        <img src = "{{ $cart['image'] }}" height="300px" width="300px">
        <ul class = "productDetail">
          <li class = "detailList">商品名：{{$cart['name']}}</li>
          <li class = "detailList">価格：{{$cart['price']}} 円</li>
          <li class = "detailList">数量：{{$cart['quantity']}} 個</li>
        </ul>
      </div>
    @endforeach
  @endif
  </div>
  <div class = "menu_box">
    合計金額：{{$sum}}円<br><br>
    <a href="{{ action('ShoppingController@index') }}" class = "cartAction">買い物を続ける</a>
    <a href="{{ action('BuyingController@index') }}" class = "cartAction" id = "buyConfirm">購入手続きへ</a>
  </div>
@endsection
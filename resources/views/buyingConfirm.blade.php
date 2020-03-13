@extends('layouts.default')
@section('title', '購入手続き')
@section('css')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection
@section('content')
  {{ csrf_field() }}
    <p>以下の住所へ送付します。よろしいでしょうか？</p>
    @if (isset ($loginuser))
      <p>氏名：{{$loginuser['name']}}</p>
      <p>住所１：{{$loginuser['address1']}}</p>
      <p>住所２：{{$loginuser['address2']}}</p>

      @if (isset ($carts))
        @foreach ($carts as $cart)
        <div class = "cart_box">
          <img src="{{ $cart['image'] }}" height="300px" width="300px">
          <ul>
            <li>{{$cart['name']}}</li>
            <li>価格：{{$cart['price']}}</li>
            <li>数量：{{$cart['quantity']}}</li>
          </ul>
        </div>
        @endforeach
        @endif
    @endif
    <a href="{{ action('BuyingController@buyingComplete') }}">購入を確定する。</a>
    <a href="{{ action('ShoppingController@index') }}">買い物に戻る</a>
@endsection
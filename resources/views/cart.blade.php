@extends('layouts.default')
@section('title', 'カートの中身')
@section('css')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection
@section('content')
  {{ csrf_field() }}
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
@endsection
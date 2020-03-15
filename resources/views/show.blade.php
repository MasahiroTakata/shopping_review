@extends('layouts.default')
@section('title', 'Shopping Review 商品情報')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection
@section('content')
<form action="{{ url('/shopping/cart') }}" method="post">
{{ csrf_field() }}
  <div class = "detail_box">
    <img src = "{{ $productDetail->image }}" height = "400px" width = "400px">
    <ul class = "productDetail">
      <li class = "detailList">商品ID：{{ $productDetail->id }}</li>
      <input type="hidden" name="hiddenProductId" value="{{ $productDetail->id }}">
      <li class = "detailList">カテゴリー：{{ $productDetail->category->name}}</li>
      <li class = "detailList">商品名：{{ $productDetail->name }}</li>
      <li class = "detailList">価格：{{ $productDetail->price }} 円</li>
      @if ($productDetail->delete_flg === 0)
        <li class = "detailList"><h3 id = "delete_no">在庫：あり</h3></li>
        <li class = "detailList">数量：<select name = "quantity">
        @for($i = 1; $i < 31; $i++)
          <option value="{{ $i }}" name = "number">{{ $i }}</option>
        @endfor
        </select>
        </li>
        <li class = "detailList"><input type="submit" id="cartIn" name="cartIn" value="カートに入れる"></li>
      @else
        <li class = "detailList"><h3 id = "delete_yes">在庫：すみません、ないです。</h3></li>
      @endif
    </ul>
  </div></br>
</form>
@endsection
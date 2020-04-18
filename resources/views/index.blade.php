@extends('layouts.default')
@section('title', 'Shopping Review')
@section('css')
  @if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css/imagehover.min.css') }}">
  @else
    <link rel="stylesheet" href="{{ asset('css/imagehover.min.css') }}">
  @endif
@endsection
@section('content')
<div class = 'content'>
  @if (isset ($products))
    @foreach ($products as $product)
      <figure class="imghvr-fade">
        <img src="{{ $product->image }}" height="300px" width="300px">
        <figcaption>
          カテゴリー：{{ $product->category->name }}<br/><br/>
          商品名：{{ $product->name }}<br/><br/>
          価格：{{ $product->price }}円
        </figcaption>
        <a href="{{ action('ShoppingController@show', $product->id) }}"></a>
      </figure>
    @endforeach
  @endif
</div>
@endsection
@extends('layouts.default')
@section('title', 'Shopping Review')
@section('css')
@endsection
@section('content')
<div class = 'content'>
  @if (isset ($products))
    <ul class='products'>
    @foreach ($products as $product)
      <li class='productImage'>
        <a href="{{ action('ShoppingController@show', $product->id) }}"><img src="{{ $product->image }}" height="300px" width="300px"></a>
      </li>
      @if($loop->iteration % 4 == 0)
        </ul>
        <ul class='products'>
      @endif
    @endforeach
    </ul>
  @endif
</div>
@endsection
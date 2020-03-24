@extends('layouts.default')
@section('title', 'Shopping Review')
@section('css')
<link rel="stylesheet" href="{{ asset('css/imagehover.min.css') }}">
@endsection
@section('content')
<div class = 'content'>
  @if (isset ($products))
    @foreach ($products as $product)
      <figure class="imghvr-fade">
        <img src="{{ $product->image }}" height="300px" width="300px">
        <figcaption>
          {{ $product->name }}
        </figcaption>
        <a href="#"></a>
      </figure>
    @endforeach
  @endif
</div>
@endsection
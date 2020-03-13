@extends('layouts.default')
@section('title', 'ご購入ありがとうございます！')
@section('css')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection
@section('content')
  {{ csrf_field() }}
    <p>お買い上げありがとうございました。</p>
    <a href="{{ action('ShoppingController@index') }}">買い物に戻る</a>
@endsection
@extends('layouts.default')
@section('title', 'Shopping Review')
@section('css')
@section('content')
  @csrf
  <label>ログインしました。</label><br><br>
  <label>こんにちは！！
  @if (isset ($loginUser))
    {{$loginUser}}さん！
  @endif
  さん</label><br><br>
  <a href = "{{ action('ShoppingController@index') }}">買い物を続ける</button>
  <a href = "{{ action('BuyingController@index') }}">購入手続きへ</button>
@endsection
@extends('layouts.default')
@section('title', 'Shopping Review')
@section('css')
@section('content')
  @csrf
  <label>ありがとうございます。登録しました。</label><br>
  <label>こんにちは！！
  @if (isset ($loginUser))
    {{$loginUser}}さん！
  @endif
  </label><br>
  <a href="{{ action('ShoppingController@index') }}">買い物を続ける</a>
@endsection
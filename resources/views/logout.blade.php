@extends('layouts.default')
@section('title', 'Shopping Review')
@section('css')
@section('content')
  @csrf
  <label>ありがとうございました。</label><br><br>
  <label>ログアウトが完了しました。</label><br><br>
  <a href = "{{ action('ShoppingController@index') }}">買い物を続ける</a>
@endsection
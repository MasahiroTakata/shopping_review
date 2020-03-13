@extends('layouts.default')
@section('title', 'Shopping Review')
@section('css')
@section('content')
  @csrf
  <label>ログインしました。</label><br><br>
  <label>こんにちは！！
  @if (isset ($loginUser))
    {{$loginUser}}
  @endif
  さん</label><br><br>
  <button type="submit" class="btn btn-primary">買い物を続ける</button>
  <button type="submit" class="btn btn-primary">購入手続きへ</button>
@endsection
@extends('layouts.default')
@section('title', 'Shopping Review')
@section('css')
@section('content')
@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
<form action="{{ url('/users/confirm') }}" method="post">
  @csrf
  <div class="form-group">
    <label>名前：</label>
    <input type="text" name="name" value="{{old('name')}}"><br>
    <label>メールアドレス：</label>
    <input type="text" name="email" value="{{old('email')}}"><br>
    <label>住所１：</label>
    <input type="text" name="address1" value="{{old('address1')}}"><br>
    <label>住所２：</label>
    <input type="text" name="address2" value="{{old('address2')}}"><br>
    <label>パスワード：</label>
    <input type="password" name="password" value="{{old('password')}}">
  </div>
  <input type="submit" class="btn btn-success" value="登録する">
</form>
@endsection
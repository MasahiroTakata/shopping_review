@extends('layouts.default')
@section('title', 'Shopping Review')
@section('css')
@section('content')
<form action="{{ url('/users/complete') }}" method="post">
@csrf
  <div class="form-group">
    <label>名前：{{$userInfo->name}}</label><br>
    <label>メールアドレス：{{$userInfo->email}}</label><br>
    <label>住所１：{{$userInfo->address1}}</label><br>
    <label>住所２：{{$userInfo->address2}}</label><br>
    @foreach($userInfo->getAttributes() as $key => $value)
      <input type="hidden" name="{{$key}}" value="{{$value}}">
    @endforeach
  </div>
<input type="submit" class="btn btn-success" value="登録する">
</form>
@endsection
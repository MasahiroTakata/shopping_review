@extends('layouts.default')
@section('title', 'Shopping Review')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/register-confirm.css') }}">
@endsection
@section('content')
<form action="{{ url('/users/userConfirm') }}" method="post">
@csrf
  <div class="form-group">
    <table>
      <tr>
        <th>名前</th>
        <td><label>{{$userInfo->name}}</label></td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td><label>{{$userInfo->email}}</label></td>
      </tr>
      <tr>
        <th>住所１</th>
        <td><label>{{$userInfo->address1}}</label></td>
      </tr>
      <tr>
        <th>住所２</th>
        <td><label>{{$userInfo->address2}}</label></td>
      </tr>
    </table>
    @foreach($userInfo->getAttributes() as $key => $value)
      <input type="hidden" name="{{$key}}" value="{{$value}}">
    @endforeach
  </div>
  <div class="btnSpace">
    <input type="submit" class="btn btn-success" value="登録する" name = "action">
    <input type="submit" class="btn btn-success" value="戻る" name = "action">
  </div>
</form>
@endsection
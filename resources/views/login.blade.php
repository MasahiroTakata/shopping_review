@extends('layouts.default')
@section('title', 'Shopping Review')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/register-login.css') }}">
@endsection
@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    @if(count($errors) >0)
      <div class="alert alert-danger">
      @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
      </div>
    @endif
    <form action="{{ url('/users/logincomplete') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <table>
          <tr>
            <th>E-Mail</th>
            <td><input type="text" id="email" name="email" class="txtBox" value="{{old('email')}}"></td>
          </tr>
          <tr>
            <th>Password</th>
            <td><input type="password" id="password" name="password" class="txtBox"></td>
          </tr>
        </table>
      </div>
      <div class="btnSpace">
        <input type="submit" class="btn-success" value="ログイン">
      </div>
    </form>
    </div>
</div>
@endsection
@extends('layouts.default')
@section('title', 'Shopping Review')
@section('css')
@section('content')
<form action="{{ url('/shopping/cart') }}" method="post">
        @csrf
        <div class="form-group">
            <label>名前<span class="required">※必須</span></label>
            <input type="text" name="name">
            <label>メールアドレス<span class="required">※必須</span></label>
            <input type="text" name="mail">
            <label>住所１</label>
            <input type="text" name="address1">
            <label>住所２</label>
            <input type="text" name="address2">
        </div>

        <div class="form-group">
            <label><span class="required">※必須</span></label>
            <div class="checkbox">
                <label class="checkbox-inline">
                    <input type="checkbox" name="checkbox[]" value="1">A
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="checkbox[]" value="2">B
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="checkbox[]" value="3">C
                </label>
            </div>
        </div>

        <div class="form-group">
            <label>ラジオボタン<span class="required">※必須</span></label>
            <div class="radio">
                <label class="radio-inline">
                    <input type="radio" name="radio" value="1">A
                </label>
                <label class="radio-inline">
                    <input type="radio" name="radio" value="2">B
                </label>
                <label class="radio-inline">
                    <input type="radio" name="radio" value="3">C
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-success">登録</button>
</form>
@endsection
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ secure_asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/top.css') }}">
    @yield('css')
</head>
<body>
<header>
  <div class = "menu">
    <div class = "menu_title">
      <a href="{{ action('ShoppingController@index') }}" class="a_title">Shopping Review</a>
      <form action="{{ url('/search') }}" method="get" name="keyword" id="keyword" class="form-keyword">
        {{ csrf_field() }}
        <input type="text" name="keyword" value="" placeholder="キーワードを入力">
        <input type="submit" value="検索" >
      </form>
    </div>
    @if(session()->has('userName'))
      <form action="{{ url('/shopping/cart') }}" method="post" name="lookCart" id="lookCart" class="menu_user">
      @csrf
      <p class="loginname">{{session()->get('userName')}}さんログイン中</p>
      <p class="login"><a href="javascript:lookCart.submit()" class="a_login">カートを見る</a><a href="{{ action('UsersController@logout') }}" class="a_login">ログアウト</a></p>
      </form>
    @else
    <div class = "no_user">
      <p class="nologin"><a href="{{ action('UsersController@index') }}" class="a_title">会員登録</a><a href="{{ action('UsersController@login') }}" class="a_title">ログイン</a></p>
    </div>
    @endif
  </div>
</header>
<div class = 'container'>
  @yield('content')
</div>
<footer>
<small>copyrights &copy; 2020 Shopping_review All rights Reserved.</small>
</footer>
</body>
</html>
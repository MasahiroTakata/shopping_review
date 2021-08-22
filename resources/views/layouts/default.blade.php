<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--csrfの対策処理をしないと、エラーが表示される-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    @if(app('env') == 'local')
      <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
      <link rel="stylesheet" href="{{ asset('css/top.css') }}">
    @else
      <link rel="stylesheet" href="{{ secure_asset('css/reset.css') }}">
      <link rel="stylesheet" href="{{ secure_asset('css/top.css') }}">
    @endif
    @yield('css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/search.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/searchAjax.js') }}"></script>
</head>
<body>
<header>
  <div class = "menu">
    <div class = "menu_title">
      <a href="{{ action('ShoppingController@index') }}" class="a_title">Shopping Review</a>
      <form action="{{ url('/search') }}" method="get" id="keyword" class="form-keyword">
        @csrf
        {{ csrf_field() }}
        <input class="form-input" name="keyword" value="" id="keywordBox" placeholder="キーワードを入力">
        <button type = "submit" id = "searchingBtn"><i class="fa fa-search"></i></button>
      </form>
    </div>
    @if(session()->has('custmerName'))
      <form action="{{ url('/cart') }}" method="get" name="lookCart" id="lookCart" class="menu_user">
      @csrf
      <p class="loginname">{{session()->get('custmerName')}}さんログイン中</p>
      <p class="login"><a href="javascript:lookCart.submit()" class="a_login">カートを見る</a><a href="{{ action('CustmerController@logout') }}" class="a_login">ログアウト</a></p>
      </form>
    @else
    <div class = "no_user">
      <p class="nologin"><a href="{{ action('CustmerController@index') }}" class="a_title">会員登録</a><a href="{{ action('CustmerController@login') }}" class="a_title">ログイン</a></p>
    </div>
    @endif
  </div>
</header>
<div class = 'container'>
@yield('content')
</div>
<footer>
<small>copyrights &copy; 2021 Shopping_review All rights Reserved.</small>
</footer>
</body>
</html>
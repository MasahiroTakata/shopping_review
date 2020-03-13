<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')

</head>
<body>
<header>
  <div class = "menu">
    <div class = "title_link">
      <a href="{{ action('ShoppingController@index') }}" class="a_title">Shopping Review</a>
    </div>
    <label>
      @if(session()->has('userName'))
      {{session()->get('userName')}}ログイン中</label>
      @endif
    <div class = "user_link">
      <a href="{{ action('UsersController@index') }}" class="a_title">会員登録</a>
      <a href="{{ action('UsersController@login') }}" class="a_title">ログイン</a>
    </div>
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
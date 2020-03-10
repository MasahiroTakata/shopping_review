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
<h2><a href="{{ action('ShoppingController@index') }}" class="title">Shopping Review</a></h2>
</header>
<div class = 'container'>
  @yield('content')
</div>
<footer>
<small>copyrights &copy; 2020 Shopping_review All rights Reserved.</small>
</footer>
</body>
</html>
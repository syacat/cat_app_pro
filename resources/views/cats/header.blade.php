<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ヘッダー部分のBladeテンプレート</title>
</head>
<!-- ヘッダー部分のBladeテンプレート -->
<header id="header-page">

</header>
<div class="top" id="top-page">
    <div class="title">

    </div>
    {{-- <div class="hamburger">
        <span class="bar bar-top"></span>
        <span class="bar bar-middle"></span>
        <span class="bar bar-bottom"></span>
    </div> --}}
    <ul class="list" id="list-page">
        @auth
            <!-- ログインしている場合 -->
            <li>{{ auth()->user()->name }}さま</li>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
            <li><a href="{{ route('mypage') }}">Mypage</a></li>
            @if(auth()->user()->role === 1)
            <!-- 管理者の場合のみ表示 -->
            
            <li><a href="{{ route('admin') }}">Admin</a></li>

        @endif
        @else
            <!-- ログインしていない場合 -->
            <li>Guestさま</li>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Sign Up</a></li>
        @endauth
        <li><a href="{{ route('cats.create') }}">Photo</a></li>
        
    </ul>
</div>

</html>
